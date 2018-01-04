<?php
    namespace Data ;
    class Recommend extends DatabaseFactory{
        public function __construct(){
            parent::__construct();
        }
        public function getRecommend(){
            $query=Array();
            foreach($this->db->query("select * from recommend") as $row)
                $query[]=$row;
            return $query;
        }
        public function insertRecommend($movie,$date,$rating,$plot){
            $result=$this->db->exec("INSERT INTO `recommend`(`movie_ID`, `releasedate`, `rating`, `plot`) VALUES ('$movie','$date','$rating','$plot')");
            return ($result)?true:false;
        }
        public function delectRecommend($movie){
            $result=$this->db->exec("DELETE FROM `recommend` WHERE movie_ID='$movie'");
            return ($result)?true:false;
        }
        public function checkRecommend($movie){
            $query=Array();
          foreach($this->db->query("select * from recommend where movie_ID='$movie'")as $row)
            $query[]=$row;
         if(!empty($query))return true;
         else return false;
        }
    }
?>