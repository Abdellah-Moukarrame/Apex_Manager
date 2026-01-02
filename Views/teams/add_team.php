<?php
require "../../Interface/crud.php";
require "../../Classes/Team.php";
if (isset($_POST["btn-add"])) {
    $teams = new Team();
    $teams->setNom_E($_POST["team-name"]);
    $teams->setBudget($_POST["budget"]);
    $teams->setManager($_POST["manager"]);

    $teams->create();

    header("location: ../dashboards/admin_dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <title>Add Team – Apex Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-950 text-slate-100 font-sans">

    <!-- Page Wrapper -->
    <div class="min-h-screen flex items-center justify-center p-6">

        <!-- Card -->
        <div class="w-full max-w-xl bg-slate-900 rounded-2xl shadow-xl border border-slate-800">

            <!-- Header -->
            <div class="p-6 border-b border-slate-800">
                <h1 class="text-2xl font-bold">Add New Team</h1>
                <p class="text-sm text-slate-400 mt-1">
                    Create a new eSport team and define its budget & manager
                </p>
            </div>

            <!-- Form -->
            <form class="p-6 space-y-6" method="post">

                <!-- Team Name -->
                <div>
                    <label class="block text-sm font-medium text-slate-400 mb-2">
                        Team Name
                    </label>
                    <input name="team-name" type="text" placeholder="Ex: Team Apex"
                        class="w-full px-4 py-3 rounded-xl bg-slate-800 
                                  border border-slate-700 text-slate-100
                                  placeholder-slate-500
                                  focus:outline-none focus:ring-2 focus:ring-emerald-500">
                </div>

                <!-- Budget -->
                <div>
                    <label class="block text-sm font-medium text-slate-400 mb-2">
                        Budget
                    </label>
                    <div class="relative">
                        <span class="absolute left-4 top-3.5 text-slate-500">$</span>
                        <input name="budget" type="number" placeholder="150000"
                            class="w-full pl-8 pr-4 py-3 rounded-xl bg-slate-800 
                                      border border-slate-700 text-slate-100
                                      placeholder-slate-500
                                      focus:outline-none focus:ring-2 focus:ring-emerald-500">
                    </div>
                </div>

                <!-- Manager -->
                <div>
                    <label class="block text-sm font-medium text-slate-400 mb-2">
                        Manager
                    </label>
                    <input name="manager" type="text" placeholder="Ex: John Doe"
                        class="w-full px-4 py-3 rounded-xl bg-slate-800 
                                  border border-slate-700 text-slate-100
                                  placeholder-slate-500
                                  focus:outline-none focus:ring-2 focus:ring-emerald-500">
                </div>

                <!-- Actions -->
                <div class="pt-6 border-t border-slate-800 flex gap-4">
                    <button name="btn-add" type="submit"
                        class="flex-1 bg-emerald-600 hover:bg-emerald-700
                                   text-white py-3 rounded-xl font-semibold transition">
                        Save Team
                    </button>

                    <button type="button"
                        class="flex-1 bg-slate-700 hover:bg-slate-600
                                   text-slate-200 py-3 rounded-xl font-semibold transition">
                        Cancel
                    </button>
                </div>

            </form>
        </div>
    </div>

</body>

</html>