<?php

require "../../Classes/Player.php";
require "../../Classes/Contrat.php";
require "../../Classes/Team.php";
$teams = new Team();
$contrat = new Contrat();
$results = $teams->getAll();
$player = new Player();
if (isset($_POST['btn-create'])) {
  $player->setName($_POST['nom_J']);
  $player->setrole($_POST['role_J']);
  $player->setEmail($_POST['email_J']);
  $player->setPseudo($_POST['pseudo_J']);
  $player->create();
}
if (isset($_POST['btn-create'])) {
  $contrat->setSalary($_POST['salary']);
  // $contrat->set
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add Contract Player</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-950 text-slate-100 min-h-screen p-6">

  <!-- Header -->
  <div class="max-w-3xl mx-auto mb-6">
    <h1 class="text-3xl font-bold text-emerald-400">Add Contract Player</h1>
    <p class="text-slate-400 mt-1">
      Create a player and assign him to a team with a contract
    </p>
  </div>

  <!-- Form -->
  <form class="max-w-3xl mx-auto bg-slate-900 p-6 rounded-xl shadow-lg space-y-6" method="post">

    <!-- Player Information -->
    <div>
      <h2 class="text-lg font-semibold text-slate-200 mb-4">
        Player Information
      </h2>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

        <!-- Player ID -->

        <div>
          <label class="text-sm text-slate-400">Player ID</label>
          <input type="text" disabled
            placeholder="Auto generated"
            class="w-full mt-1 bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 text-slate-400 cursor-not-allowed">
        </div>

        <!-- Name -->
        <div>
          <label class="text-sm text-slate-400">Full Name</label>
          <input type="text" name="nom_J" placeholder="Player name"
            class="w-full mt-1 bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-emerald-500">
        </div>

        <!-- Email -->
        <div>
          <label class="text-sm text-slate-400">Email</label>
          <input type="email" name="email_J" placeholder="player@email.com"
            class="w-full mt-1 bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-emerald-500">
        </div>

        <!-- Role -->
        <div>
          <label class="text-sm text-slate-400">Role</label>
          <input type="text" name="role_J" placeholder="Support / Sniper / Tank"
            class="w-full mt-1 bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-emerald-500">
        </div>

        <!-- Pseudo -->
        <div>
          <label class="text-sm text-slate-400">Pseudo</label>
          <input type="text" name="pseudo_J" placeholder="ALX"
            class="w-full mt-1 bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-emerald-500">
        </div>

        <!-- Value -->
        <div>
          <label class="text-sm text-slate-400">Market Value</label>
          <input type="number" name="valeur_J" placeholder="5000"
            class="w-full mt-1 bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-emerald-500">
        </div>

      </div>
    </div>

    <!-- Contract Information -->
<div>
  <h2 class="text-lg font-semibold text-slate-200 mb-4">
    Contract Information
  </h2>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

    <!-- Team -->
    <div>
      <label class="text-sm text-slate-400">Assign to Team</label>
      <select name="id_Equipe" required
        class="w-full mt-1 bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-emerald-500">
        <option value="">Select Team</option>
        <?php foreach ($results as $row) { ?>
          <option value="<?= $row['id_E'] ?>">
            <?= $row['nom_E'] ?>
          </option>
        <?php } ?>
      </select>
    </div>

    <!-- Salary -->
    <div>
      <label class="text-sm text-slate-400">Salary</label>
      <input type="number" name="salaire" required
        placeholder="4500"
        class="w-full mt-1 bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-emerald-500">
    </div>

    <!-- Buyout Clause -->
    <div>
      <label class="text-sm text-slate-400">Buyout Clause</label>
      <input type="number" name="clause_rachat"
        placeholder="10000"
        class="w-full mt-1 bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-emerald-500">
    </div>

    <!-- Contract End Date -->
    <div>
      <label class="text-sm text-slate-400">Contract End Date</label>
      <input type="date" name="date_fin" required
        class="w-full mt-1 bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 focus:ring-2 focus:ring-emerald-500">
    </div>

  </div>
</div>


    <!-- Actions -->
    <div class="flex justify-end gap-3 pt-4 border-t border-slate-800">
      <a href="../roaster/roaster.php"
        class="px-4 py-2 rounded-lg bg-slate-700 hover:bg-slate-600 transition">
        Cancel
      </a>
      <button type="submit"
        name="btn-create"
        class="px-6 py-2 rounded-lg bg-emerald-600 hover:bg-emerald-700 font-medium transition">
        Save Contract
      </button>
    </div>

  </form>

</body>

</html>