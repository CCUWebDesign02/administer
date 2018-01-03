<?php
    namespace Data ;
    class Member extends DatabaseFactory{
        public $query=Array();
        public function __construct(){
            parent::__construct();
        }
        public function getMember(){
           foreach($this->db->query("select * from member") as $row)
              $this->query[]=$row;
           return $this->query;
        }
    }
?>