<?php
abstract class Person
{
    private int $id;
    private string $name, $nationnalite;

    // public function __construct($id, $name, $nationnalite)
    // {
    //     $this->id = $id;
    //     $this->name = $name;
    //     $this->nationnalite = $nationnalite;
    // }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function setName($name): string
    {
        if ($name == null) {
            throw new Exception("Le nom est obligatoire", 1);
        }
        return $this->name = $name;
    }
    public function getNat(): string {
        return $this->nationnalite ;
    }
    public function setNat($nationnalite):string{
        if ($nationnalite == null ) {
            throw new Exception("La nationnalite est obligatoire");
        }
        return $this->nationnalite;
    }
    abstract public function getAnnualCost() : float;
    
}
