<?php
class Contrat implements Crud {
    private float $salaire ;
    private float $clause_rachat;
    private DateTime $date_fin ;
    private int $id_equipe ;
    private int $id_joueur ;
    private int $id_coatch;
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->connection_db();
    }

    function getSalary() : float {
        return $this->salaire ;
    }

    function setSalary($salaire) : float {
        return$this->salaire = $salaire;
    }
    function getClause_rachat() : float {
        return $this->clause_rachat ;
    }
    function setClause_rachat($clause_rachat) : float {
        return $this->clause_rachat = $clause_rachat ;
    }
    function getDate_fin() : DateTime {
        return $this->date_fin ;
    }
    function setDate_fin($date_fin) : DateTime {
        return $this->date_fin = $date_fin;
    }
    function getId_joueur() : int {
        return $this->id_joueur ;
    }
    function setId_joueur($id_joueur): int {
        return $this->id_joueur = $id_joueur;
    }
    function getId_equipe() : int {
        return $this->id_equipe ;
    }
    function setId_equipe($id_equipe): int {
        return $this->id_equipe = $id_equipe;
    }
    function getId_coatch():int {
        return $this->id_coatch;
    }
    function setId_coatch($id_coatch) : int {
        return $this->id_coatch = $id_coatch;
    }
    public function create (){
        $sql_create = "insert into contrat (salaire	,clause_rachat,	date_fin ,	id_Equipe,	id_joueur,	id_coatch) values (:salaire ,:clause_rachat	,:date_fin,:id_equipe,:id_joueur , :id_coatch) ";
        $data_create = $this->db->prepare($sql_create);
        $data_create->execute([':salaire'=>$this->getSalary(),':clause_rachat'=>$this->getClause_rachat(),':date_fin'=>$this->getDate_fin(),':id_equipe'=>$this->getId_equipe(),':id_joueur'=>$this->getId_joueur()]);
    }
    public function update($id)
    {
        
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