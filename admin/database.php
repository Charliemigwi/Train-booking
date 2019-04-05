<?php

class database{
    public $connect;
    protected $data;

    //connect to db
    public function __construct($host="localhost", $username="root", $password="",$dbname="charlesmigwi",$options=[]){
        $this->connect=TRUE;
        try {
            $this->data=new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username,$password,$options);
            $this->data->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->data->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            throw new Exception($e->getMessage());
        }
    }

    //disconnect from db
    public function disconnect(){
        $this->data=NULL;
        $this->connect=FALSE;
    }

    //get row
    public function getrow($query, $params=[]){
        try{
            $stmt= $this->data->prepare($query);
            $stmt->execute($params);
            return $stmt->fetch();
        }catch(PDOException $e){
            throw new Exception($e->getMessage());

        }
    }

    //get rows
    public function getrows($query, $params=[]){
        try{
            $stmt=$this->data->prepare($query);
            $stmt->execute($params);
            return $stmt->fetchAll();
        }catch(PDOException $e){
            throw new Exception($e->getMessage());
        }
    }

    //insert row
    public function insertrow($query, $params=[]){
        try{
            $stmt=$this->data->prepare($query);
            $stmt->execute($params);
            return TRUE;
        }catch(PDOException $e){
            throw new Exception($e->getMessage());
        }
    }


    //update row
    public function updaterow($query,$params=[]){
        $this->insertrow($query, $params);
    }

    //delete row
    public function deleterow($query,$params=[]){
        $this->insertrow($query, $params);
    }
}



?>