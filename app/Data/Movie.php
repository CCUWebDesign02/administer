<?php
    namespace Data ;
    class Movie extends DatabaseFactory{
        public function __construct(){
            parent::__construct();
        }
        public function insertMovie($moviename,$release,$time,$outofdate,$rating,$plot){
           $result=$this->db->exec("INSERT INTO `movie`(`movie_name`, `movie_release`, `movie_duringtime`, `movie_outofdate`,`movie_rating`, `movie_plot`)
                                         VALUES ('$moviename','$release','$time','$outofdate','$rating','$plot')");
            if($result)return true;
            else return false;
        }
        public function getMovie(){
            $query = Array();
            foreach($this->db->query("select * from movie") as $row)
              $query[]=$row;
           return $query;
        }
        public function getOnMovie($date){
            $query = Array();
            foreach($this->db->query("select * from movie where '$date' BETWEEN  movie_release and  movie_outofdate") as $row)
              $query[]=$row;
            
            return $query;
        }
        public function getNewMovie($date){
            $query = Array();
            foreach($this->db->query("select * from movie where '$date' < movie_release") as $row)
                $query[]=$row;
            return $query;
        }
        public function getSelectMovie($movie){
            $query = Array();
            foreach($this->db->query("select * from movie where movie_name='$movie'") as $row)
              $query[]=$row;
           return $query;
        }
    }
?>