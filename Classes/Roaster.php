<?php
require_once "../../DB/db_connect.php";
class Roaster
{
    // private string  $name, $role, $pseudo;
    // private int $salary;
    // private DateTime $end_contrat;
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->connection_db();
    }

    //Pagination Process

    public function count()
    {
        $sql_count = $this->db->prepare("select count(*) as total_players from joueur");
        $sql_count->execute();
        $fetch_total = $sql_count->fetchColumn();
        return $fetch_total;
    }
    public function displayBypage($page)
    {
        //hna 7dedt l offsit
        $page = ($page - 1) * 4;
        //hna jebt players
        $sql_display = $this->db->prepare("select equipe.nom_E , joueur.* , contrat.salaire , contrat.date_fin from joueur left join contrat on contrat.id_joueur = joueur.id_J join equipe on equipe.id_E = contrat.id_Equipe limit 4 offset $page");
        $sql_display->execute();
        $fetch = $sql_display->fetchAll();
        return  $fetch;
    }
}
