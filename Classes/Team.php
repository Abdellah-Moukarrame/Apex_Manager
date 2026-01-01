<?php
class Team implements Crud
{
    private string $nom_E, $manager_E;
    private float $budget;
    private PDO $db;

    public function __construct($nom_E, $manager_E, $budget)
    {
        $this->nom_E = $nom_E;
        $this->manager_E = $manager_E;
        $this->budget = $budget;
        $this->db = Database::getInstance()->connection_db();
    }
    public function getNom_E(): string
    {
        return $this->nom_E;
    }
    public function setNom_E($nom_E): string
    {
        if ($nom_E == null) {
            throw new Exception("Le nom est obligatoire", 1);
        }
        return $this->nom_E = $nom_E;
    }
    public function getManager(): string
    {
        return $this->manager_E;
    }
    public function setManager($manager_E): string
    {
        if ($manager_E == null) {
            throw new Exception("Le manager est obligatoire", 1);
        }
        return $this->manager_E = $manager_E;
    }
    public function getBudget(): float
    {
        return $this->budget;
    }
    public function setBudget($budget): float
    {
        if ($budget == null) {
            throw new Exception("le budget est obligatoire", 1);
        }
        return $this->budget = $budget;
    }
    public function create()
    {
        $sql_create_team = "insert into equipe values (:nom , :budget, :manager) ";
        $data_create_team = $this->db->prepare($sql_create_team);
        $data_create_team->execute([":nom" => $this->getNom_E(), ":budget" => $this->getBudget(), ":manager" => $this->getManager()]);
        $team_create = $data_create_team->fetchAll(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
    public function update($id_equipe)
    {
        $sql_update_team = "update equipe set nom_E = :name , budget_E = :budget , manager_E = :manager where id_E = :id";
        $data_update_team = $this->db->prepare($sql_update_team);
        $data_update_team->execute([":nom" => $this->getNom_E(), ":budget" => $this->getBudget(), ":manager" => $this->getManager() , ":id" =>$id_equipe]);
    }
    public function delete($id_equipe) {
        $sql_delet_team = "delete from equipe where id_E = :id";
        $data_delete_team = $this->db->prepare($sql_delet_team);
        $data_delete_team->execute([":id"=>$id_equipe]);
    }
    public function getAll()
    {
        $sql_teams = "select * from equipe ";
        $data_teams = $this->db->prepare($sql_teams);
        $data_teams->execute();
        $teams = $data_teams->fetchAll(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    }
    public function getById($id_equipe)
    {
        $sql_team_id = "select * from equipe where id_E = :id ";
        
    }
}
