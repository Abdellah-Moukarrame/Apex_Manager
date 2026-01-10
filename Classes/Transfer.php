<?php 
require "../../DB/db_connect.php";
class Transfert{
    private int $id_equipe_depart ,$id_equipe_arrivee,$id_contrat,$id_joueur,$montant;
    private string $state ;
    private PDO $db ;

    public function __construct()
    {
        $this->db = Database ::getInstance()->connection_db() ;
    }

    public function getid_equipe_depart() : int {
        return $this->id_equipe_depart;
    }
    public function getid_equipe_arrivee() : int {
        return $this->id_equipe_arrivee;
    }
    public function getid_contrat() : int {
        return $this->id_contrat;
    }
    public function getmontant() : int {
        return $this->montant;
    }
    public function getstat() : string {
        return $this->state;
    }
    public function setid_equipe_depart($id_equipe_depart) : int {
        return $this->id_equipe_depart = $id_equipe_depart;
    }
    public function setid_equipe_arrivee($id_equipe_arrivee) : int {
        return $this->id_equipe_arrivee = $id_equipe_arrivee;
    }
    public function setid_contrat($id_contrat) : int {
        return $this->id_equipe_depart = $id_contrat;
    }
    public function setmontant($montant) : int {
        return $this->montant = $montant;
    }
    public function setstat($state) : string {
        return $this->montant = $state;
    }

    public function playerTransfer(){
        
    }

    public function playerTransfert () {
        try {
            
            $this->db->beginTransaction() ;
            //check budget
            $sql_check =$this->db->prepare("select budget from equipe where id_E = :id") ;
            $sql_check->execute(['id'=>$this->id_equipe_arrivee]);
            $budget = $sql_check->fetchColumn('budget');
            return $budget;

            
            if ($budget < $montant) {
                $state = "Pending";
                return $state;
            }else {
                $state = "Complete";
                return $state;
            }

            //transfert the budget from the equipe_arrivee to equipe_depart
            $sql_check =$this->db->prepare("update equipe set budget_E = :budget from where id_E = :id") ;
            $sql_check->execute(['budget'=>$budget,'id'=>$this->id_equipe_arrivee]);
            //change the contract 
            
            $sql_check =$this->db->prepare("update id from equipe where id_E = :id") ;
            $sql_check->execute(['id'=>$this->id_equipe_arrivee]);
            $budget = $sql_check->fetchColumn('budget');
            return $budget;

            


        } catch (PDOException $error) {
            $this->db->rollBack() . $error->getMessage();
        }
    }

}