<?php 

class Database {
    private static ?Database $instance ;
    private string $host = "localhost", $dbname = "apex", $username = "root", $password ="";
    private PDO $connection;

    private function __construct()
    {
      $this->connection = new PDO ("mysql:host =$this->host;dbname =$this->dbname",$this->username,$this->password);
      $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    }
    public function getInstance():Database{
        if (!isset($instance)) {
            throw new Exception("The config is not running well :/");
        }
        else {
            self::$instance = new Database();
        }
        return self::$instance;
        
    }
    public function connection_db() :PDO{
        return $this->connection;
    }
}