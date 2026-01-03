<?php
require "../../Interface/crud.php";
require "../../Classes/Team.php";
$id_equipe = $_GET['id_equipe'];
$teams = new Team();
$resultat = $teams->getById($id_equipe);

if (isset($_POST['delete'])) {
    $teams->delete($id_equipe);
    header("location: display_teams.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Delete Team</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-900 flex items-center justify-center min-h-screen">

    <div class="bg-black text-green-100 rounded-xl shadow-xl p-6 w-full max-w-md text-center">

        <h2 class="text-2xl font-bold text-green-400 mb-4">
            Confirm Deletion
        </h2>

        <p class="text-green-200 mb-6">
            Are you sure you want to delete this team <?= $resultat[0]['nom_E'] ?>
            <span class="block text-sm text-green-300 mt-1">
                This action cannot be undone.
            </span>
        </p>

        <!-- FORM -->
        <form action="" method="post" class="flex gap-4">
            <!-- Cancel -->
            <a href="display_teams.php"
                class="w-full py-2 rounded-md bg-green-200 text-black font-medium hover:bg-green-300 transition text-center">
                Cancel
            </a>

            <!-- Delete -->
            <button type="submit"
                name="delete"
                class="w-full py-2 rounded-md bg-red-600 text-white font-medium hover:bg-red-700 transition">
                Delete
            </button>

        </form>

    </div>

</body>

</html>