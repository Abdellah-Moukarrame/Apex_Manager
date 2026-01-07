<?php
class Contrat implements Crud {
    private float $salaire ;
    private float $clause_rachat;
    private string $date_fin ;
    private int $id_equipe ;
    private int $id_joueur ;
    private int $id_coatch;
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->connection_db();
    }

    public function getSalary() : float {
        return $this->salaire ;
    }

    public function setSalary($salaire) : float {
        return$this->salaire = $salaire;
    }
    public function getClause_rachat() : float {
        return $this->clause_rachat ;
    }
    public function setClause_rachat($clause_rachat) : float {
        return $this->clause_rachat = $clause_rachat ;
    }
    public function getDate_fin() : string {
        return $this->date_fin ;
    }
    public function setDate_fin($date_fin) : string {
        return $this->date_fin = $date_fin;
    }
    public function getId_joueur() : int {
        return $this->id_joueur ;
    }
    public function setId_joueur($id_joueur): int {
        return $this->id_joueur = $id_joueur;
    }
    public function getId_equipe() : int {
        return $this->id_equipe ;
    }
    public function setId_equipe($id_equipe): int {
        return $this->id_equipe = $id_equipe;
    }
    public function getId_coatch():int {
        return $this->id_coatch;
    }
    public function setId_coatch($id_coatch) : int {
        return $this->id_coatch = $id_coatch;
    }
    public function getLastInsertedId():int {
        return $this->db->lastInsertId();
    }
    public function create (){
        $sql_create = "insert into contrat (salaire	,clause_rachat,	date_fin ,	id_Equipe,	id_joueur) values (:salaire ,:clause_rachat	,:date_fin,:id_equipe,:id_joueur ) ";
        $data_create = $this->db->prepare($sql_create);
        $data_create->execute([':salaire'=>$this->getSalary(),':clause_rachat'=>$this->getClause_rachat(),':date_fin'=>$this->getDate_fin(),':id_equipe'=>$this->getId_equipe(),':id_joueur'=>$this->getLastInsertedId()]);
    }
    public function update($id)
    {
        $sql_update = "update contrat set salaire = :salaire clause_rachat = :clause_rachat where id_Cn = :id";
        $data_update = $this->db->prepare($sql_update);
        $data_update->execute([':salaire'=>$this->getSalary(),':clause_rachat'=>$this->getClause_rachat(),':id'=>$id]);
    }
    public function delete($id)
    {
    }
    public function getAll()
    {
        
    }
    public function getById($id)
    {
        
    }
}