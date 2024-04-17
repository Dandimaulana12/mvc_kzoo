<?php

class database{
    private $dbhost = DBHOST;
    private $dbuser = DBUSER;
    private $dbpass = DBPASS;
    private $dbname = DBNAME;

    private $dbh;
    private $stmt;

    public function __construct(){
        $dsn = 'mysql:host='.$this->dbhost.';dbname='.$this->dbname.';';
        
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try {
            $this->dbh = new PDO($dsn, $this->dbuser, $this->dbpass, $option);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function query($query){
        $this->stmt = $this->dbh->prepare($query);
        return $this->stmt;
    }

    public function bind($param, $value, $type = null){
        if (is_null($type)) {
            switch (true) {
                case is_int($type):
                    $type = PDO::PARAM_INT;
                    break;
                case is_float($type):
                    $type = PDO::PARAM_FLOAT;
                    break;
                case is_null($type):
                    $type = PDO::PARAM_NULL;
                    break;
                case is_bool($type):
                    $type = PDO::PARAM_BOOL;
                    break;
                
                default:
                    $type = PDO::PARAM_STR;
                    break;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute(){
        $this->stmt->execute();
    }

    public function all_data(){
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single_data(){
        $this->stmt->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount(){
       return $this->stmt->rowCount();
    }

}