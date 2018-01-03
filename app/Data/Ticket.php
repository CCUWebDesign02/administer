<?php
    namespace Data ;
    class Ticket extends DatabaseFactory{
        public $query=Array();
        public function __construct(){
            parent::__construct();
        }
        public function getTicket(){
           foreach($this->db->query("select * from ticket") as $row)
              $this->query[]=$row;
           return $this->query;
        }
    }
?>