<?php
require "../DB/db_connect.php";
class Player extends Person implements Crud
{
    private string $role;
    private string $pseudo;
    private PDO $db;
    public function __construct($id, $name, $nationnalite, $role)
    {
        $this->role = $role;
        $this->db = Database::getInstance()->connection_db();
        parent::__construct($id, $name, $nationnalite);
    }
    public function getrole(): string
    {
        return $this->role;
    }
    public function setrole($role): string
    {
        if ($role === null) {
            throw new Exception("Le role est obligatoire");
        }
        return $this->role = $role;
    }
    public function getPseudo(): string
    {
        return $this->pseudo;
    }
    public function getAnnualCost(): float
    {
        throw new \Exception('Not implemented');
    }
    public function create()
    {
        $sql_create = "insert into joueur(nom_J , role_J , pseudo_J) values (:name,:role,:pseudo)";
        $data_create = $this->db->prepare($sql_create);
        $data_create->execute([":name" => $this->getName(), ":role" => $this->getrole(), ":pseudo" => $this->getPseudo()]);
        $players_create = $data_create->fetch(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
    public function update()
    {
        $sql_update = "update  joueur set nom_J = :name , role_J = :role , pseudo_J =pseudo where id_J = :id ";
        $data_update = $this->db->prepare($sql_update);
        $data_update->execute([":name" => $this->getName(), ":role" => $this->getrole(), ":pseudo" => $this->getPseudo(), ":id" => $this->getId()]);
        $players_update = $data_update->fetch(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
    public function delete()
    {
        $sql_delete = "delete  from joueur where id_J :id ";
        $data_delete = $this->db->prepare($sql_delete);
        $data_delete->execute([":id" => $this->getId()]);
        $players_update = $data_delete->fetch(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
    public function getAll()
    {
        $sql_players = "select * from joueur ";
        $data_players = $this->db->prepare($sql_players);
        $data_players->execute();
        $players = $data_players->fetch(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
}
