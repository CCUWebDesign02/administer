<?php
    namespace Data ;
    class Announce extends DatabaseFactory{
        public function __construct(){
            parent::__construct();
        }
        public function insertAnnounce($date,$title){
           $result= $this->db->exec("INSERT INTO `announcement`(`date`, `title`) VALUES ('$date','$title')");
           return ($result)? true:false;
        }
        public function getAnnounce(){
            $query=Array();
            foreach($this->db->query("SELECT * FROM `announcement` ORDER BY `announcement`.`date` DESC")as $row)
                $query[]=$row;
            return $query;
        }
    }
?>