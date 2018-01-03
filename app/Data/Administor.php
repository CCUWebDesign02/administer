<?php
    namespace Data ;
    class Administor extends DatabaseFactory{
        public $query=Array();
        public function __construct(){
            parent::__construct();
        }
        public function getAdmin($account,$password){
           foreach($this->db->query("select * from admin where account=\"$account\" and password=\"$password\"") as $row){
              $this->query[]=$row;
           }
           if(empty($this->query))
                    return false;
           else return true;
        }
        public function getAccount(){
            return $this->query[0]['account'];
        }
        public function getPassword(){
            return $this->query[0]['password'];
        }
        public function getName(){
            return $this->query[0]['name'];
        }
    }
?>