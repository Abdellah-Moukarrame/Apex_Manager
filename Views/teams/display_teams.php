<?php
require "../../Interface/crud.php";
require "../../Classes/Team.php";

$teams = new Team();
$resultat = $teams->getAll();
// var_dump($resultat);
?>


<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teams – Apex Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-950 text-slate-100 font-sans">

    <!-- Page Container -->
    <div class="min-h-screen p-8 max-w-7xl mx-auto">

        <!-- Page Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold">Teams</h1>
            <p class="text-slate-400 mt-1">
                Overview of all registered eSport teams
            </p>
        </div>

        <!-- Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($resultat as $team) { ?>
                <!-- Team Card -->
                <div class="group bg-slate-900 border border-slate-800 rounded-2xl p-6 
                        shadow-lg transition-all duration-300 
                        hover:-translate-y-2 hover:shadow-2xl hover:border-emerald-500/50">

                    <!-- Header -->

                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-bold group-hover:text-emerald-400 transition">
                            <?= $team['nom_E'] ?>
                        </h2>
                    </div>

                    <!-- Info -->

                    <div class="space-y-2 text-sm text-slate-400">
                        <p><span class="text-slate-500">Manager:</span> <?= $team['manager_E'] ?></p>
                        <!-- <p><span class="text-slate-500">Players:</span> </p> -->
                        <p><span class="text-slate-500">Budget:</span>
                            <span class="text-slate-100 font-semibold"><?= $team['budget_E'] ?></span>
                        </p>
                    </div>



                    <!-- Divider -->
                    <div class="border-t border-slate-800 my-4"></div>

                    <!-- Actions -->
                    <div class="flex gap-3">
                        <a href="#"
                            class="flex-1 py-2 text-center rounded-lg bg-slate-800 
              hover:bg-emerald-600 hover:text-white 
              transition font-medium">
                            View
                        </a>

                        <a href="update_team.php?id_equipe=<?= $team['id_E'] ?>"
                            class="flex-1 py-2 text-center rounded-lg bg-slate-800 
                            hover:bg-blue-600 hover:text-white 
                            transition font-medium">
                            Edit
                        </a>
                    </div>




                </div><?php } ?>
        </div>
    </div>

</body>

</html>