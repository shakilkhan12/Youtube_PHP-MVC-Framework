<?php

class database {


    public $host     = HOST;
    public $user     = USER;
    public $database = DATABASE;
    public $password = PASSWORD;
    public $con;
    public $result;

    public function __construct(){

     try{

        return $this->con = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database,$this->user, $this->password);
       

     } catch(PDOException $e){

        echo "Database connection Error: ". $e->getMessage();

     }

    }

    public function Query($qry, $params = []){
      
       if(empty($params)){

        $this->result = $this->con->prepare($qry);
        return $this->result->execute();

       } else {
           $this->result = $this->con->prepare($qry);
           return $this->result->execute($params);
       }

    }

    public function rowCount(){

        return $this->result->rowCount();

    }

    public function fetchall(){

        return $this->result->fetchAll(PDO::FETCH_OBJ);

    }

    public function fetch(){

        return $this->result->fetch(PDO::FETCH_OBJ);

    }



}


?>