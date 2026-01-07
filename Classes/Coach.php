<?php
class Coach extends Person implements Crud
{
    private string $style;
    private DateTime $annee_exp;
    private PDO $db;
    public function __construct($id, $name, $nationnalite, $style, $annee_exp)
    {
        $this->style = $style;
        $this->annee_exp = $annee_exp;
        $this->db = Database::getInstance()->connection_db();
        parent::__construct($id, $name, $nationnalite);
    }
    public function getStyle(): string

    {
        return $this->style;
    }
    public function setStyle($style): string
    {
        if ($style === null) {
            throw new Exception("Error Processing Request", 1);
        }
        return $this->style = $style;
    }
    public function getAnne(): DateTime
    {
        return $this->annee_exp;
    }
    public function getAnnualCost(): float
    {
        throw new \Exception('Not implemented');
    }
    public function create()
    {
        $sql_create = "insert into coach (nom_C  , style_coaching,annee_Exp) values (:name,:style,:annee_exp)";
        $data_create = $this->db->prepare($sql_create);
        $data_create->execute([":name" => $this->getName(), ":style" => $this->getStyle(), ":annee_exp" => $this->getAnne()]);
    }
    public function update($id)
    {
        $sql_update = "update  coach set nom_C = :name , style_coaching = :style , annee_Exp =annee_exp where id_C = :id ";
        $data_update = $this->db->prepare($sql_update);
        $data_update->execute([":name" => $this->getName(), ":role" => $this->getStyle(), ":pseudo" => $this->getAnne(), ":id" => $id]);
    }
    public function delete($id)
    {
        $sql_delete = "delete  from coach where id_C :id ";
        $data_delete = $this->db->prepare($sql_delete);
        $data_delete->execute([":id" => $id]);
    }
    public function getAll()
    {
        $sql_coachs = "select * from coach ";
        $data_coachs = $this->db->prepare($sql_coachs);
        $data_coachs->execute();
        $coachs = $data_coachs->fetch(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
    public function getById($id)
    {
        $sql_coach =  "select * from coach where id_C =:id";
        $data_coach = $this->db->prepare($sql_coach);
        $data_coach->execute([':id'=>$id]);
        $coach = $data_coach->fetchColumn($data_coach);
    }
}
