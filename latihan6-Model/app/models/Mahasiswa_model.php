<?php

class Mahasiswa_model {
    private $dbh ; //database hendler 
    private $stm ; //statment

    public function __construct() {
        //data source name 
        $dsn = 'mysql:host=localhost;dbname=php_mvc' ; 
        try {
            $this->dbh = new PDO($dsn,'root','') ; 
        } catch (PDOException $e) {
            die($e->getMessage()) ; 
        }
    }

    public function getAllMahasiswa(){
        $this->stm = $this->dbh->prepare('SELECT * FROM mahasiswa') ; 
        $this->stm->execute() ; 
        return $this->stm->fetchAll(PDO::FETCH_ASSOC) ; 
    }
}