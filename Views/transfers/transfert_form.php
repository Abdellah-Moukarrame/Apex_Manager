<?php
require_once "../../Classes/Contrat.php";
require_once "../../DB/db_connect.php";
$id_player = $_GET['id_player'];
$contrat = new Contrat;
$results_id_contrat = $contrat->getIdcontrat_Idplayer($id_player);
$results_nom_equipe = $contrat->getEquipe_Contrat_Player($results_id_contrat);

var_dump($results_id_contrat);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Player Transfer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-950 min-h-screen flex items-center justify-center">

  <form action="transfer.php" method="POST"
    class="w-full max-w-xl bg-slate-900 p-6 rounded-xl space-y-4 shadow-lg">

    <h2 class="text-2xl font-bold text-white mb-4 text-center">
      Player Transfer
    </h2>

    <!-- Joueur -->
    <div>
      <label class="block text-slate-300 mb-1">ID Joueur</label>
      <input type="number" value="<?= $_GET['id_player'] ?>" name="id_joueur" required disabled
        class="w-full px-4 py-2 rounded-lg bg-slate-800 text-white border border-slate-700 focus:outline-none focus:ring-2 focus:ring-emerald-500">
    </div>

    <!-- Contrat -->
    <div>
      <label class="block text-slate-300 mb-1">ID Contrat</label>
      <input type="number" value="<?= $results_id_contrat ?>" name="id_contrat" required disabled
        class="w-full px-4 py-2 rounded-lg bg-slate-800 text-white border border-slate-700 focus:outline-none focus:ring-2 focus:ring-emerald-500">
    </div>

    <!-- Equipe départ -->
    <div>
      <label class="block text-slate-300 mb-1">Équipe de départ</label>
      <input type="text" disabled value="<?= $results_nom_equipe ?>" name="id_equipe_depart" required
        class="w-full px-4 py-2 rounded-lg bg-slate-800 text-white border border-slate-700 focus:outline-none focus:ring-2 focus:ring-emerald-500">
    </div>

    <!-- Equipe arrivée -->
    <div>
      <label class="block text-slate-300 mb-1">Équipe d'arrivée</label>
      <input type="number" name="id_equipe_arrivee" required
        class="w-full px-4 py-2 rounded-lg bg-slate-800 text-white border border-slate-700 focus:outline-none focus:ring-2 focus:ring-emerald-500">
    </div>

    <!-- Montant -->
    <div>
      <label class="block text-slate-300 mb-1">Montant du transfert</label>
      <input type="number" name="montant" required
        class="w-full px-4 py-2 rounded-lg bg-slate-800 text-white border border-slate-700 focus:outline-none focus:ring-2 focus:ring-emerald-500">
    </div>

    <!-- Clause de rachat / Valeur J -->
    <div>
      <label class="block text-slate-300 mb-1">Clause de rachat / Valeur J</label>
      <input type="number" name="valeur_j" required
        class="w-full px-4 py-2 rounded-lg bg-slate-800 text-white border border-slate-700 focus:outline-none focus:ring-2 focus:ring-emerald-500"
        placeholder="Ex: 1000000">
    </div>

    <!-- Submit -->
    <button type="submit" name="btn-transfer"
      class="w-full bg-emerald-600 hover:bg-emerald-700 text-white py-2 rounded-lg font-semibold transition">
      Valider le transfert
    </button>

  </form>

</body>
</html>
