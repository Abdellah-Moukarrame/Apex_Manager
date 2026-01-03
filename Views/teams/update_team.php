<?php
require "../../Interface/crud.php";
require "../../Classes/Team.php";
$id_equipe = $_GET['id_equipe'];
$teams = new Team();
$resultat = $teams->getById($id_equipe);
if (isset($_POST['btn-edit'])) {
    $manager = $_POST['manager'];
    $budget = $_POST['budget'];
    if ($manager == null || $budget == null) {
        echo "manager est budget sont obligatoire";
    }
    $teams->setManager($manager);
    $teams->setBudget($budget);
    $teams->update($id_equipe);
    header("location: ../dashboards/admin_dashboard.php");
    exit;
}


?>
<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Team – Apex Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-950 text-slate-100 font-sans">

    <div class="min-h-screen p-8 max-w-3xl mx-auto">

        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold">Update Team</h1>
            <p class="text-slate-400 mt-1">Edit the details of your eSport team</p>
        </div>

        <!-- Update Team Form Card -->
        <form method="post">

            <div class="bg-slate-900 p-6 rounded-2xl shadow-lg space-y-4">
                <div>
                    <label class="block mb-1 font-medium text-slate-300" for="teamLead">Manager</label>
                    <input name="manager" type="text" id="teamLead" value="<?= $resultat[0]['manager_E'] ?>"
                        class="w-full px-4 py-2 rounded-lg border border-slate-700 bg-slate-800 text-white focus:outline-none focus:ring-2 focus:ring-emerald-500">
                </div>

                <div>
                    <label class="block mb-1 font-medium text-slate-300" for="budget">Budget</label>
                    <input name="budget" type="number" id="budget" value="<?= $resultat[0]['budget_E'] ?>"
                        class="w-full px-4 py-2 rounded-lg border border-slate-700 bg-slate-800 text-white focus:outline-none focus:ring-2 focus:ring-emerald-500">
                </div>

                <!-- Actions -->
                <div class="flex gap-3 mt-4">
                    <a href="#"
                        class="flex-1 text-center py-2 rounded-lg bg-slate-800 hover:bg-slate-600 hover:text-white transition font-medium">
                        Cancel
                    </a>
                    <input type="submit" name="btn-edit" value="Save Changes" class="flex-1 text-center py-2 rounded-lg bg-emerald-600 hover:bg-emerald-500 transition font-medium">


                </div>

            </div>
        </form>

    </div>

</body>

</html>