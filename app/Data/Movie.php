<?php
    namespace Data ;
    use Data \DataFactory;
    class Movie extends DataFactory{
        public function getMovie(){
            $query=Array();
            foreach($this->getDB()->query("SELECT * FROM `movies` WHERE 1") as $row)
                $query[]=$row;
            return $query;
        }
        public function insertMovie($zh_name,$en_name,$duration,$rating,$release,$director,$actors,$intor,$trailer_url,$update,$created){
            return  ($this->getDB()->exec("INSERT INTO `movies`(`zh_name`, `en_name`, `duration`, `rating`, `released`, `director`, `actors`, `intro`, `trailer_url`,`updated_at` ,`created_at`) 
                VALUES ('$zh_name','$en_name','$duration','$rating','$release','$director','$actors','$intor','$trailer_url','$update','$created')")) ? true:false;
        }
        public function insertPhoto($movie_id,$type,$src){
            $this->getDB()->exec("INSERT INTO `movie_resource`(`movie_id`, `type`, `src`) VALUES ($movie_id,'$type','$src')");
        }
        public function editMovie($movie_id,$zh_name,$en_name,$duration,$rating,$release,$director,$actors,$intor,$trailer_url,$update,$created){
            return  ($this->getDB()->exec("UPDATE `movie_resource` SET `zh_name` = '$zh_name', `en_name`= '$en_name', `duration`='$duration'
            , `rating`='$rating', `released`='$release', `director`='$director', `actors`='$actors', `intro`='$intor', `trailer_url`='$trailer_url', `updated_at`='$update') 
            where id=$movie_id ")) ?true:false;
        }
        public function isExistPhoto($src){
            $query=$this->getDB()->query("select * from `movie_resource` where src='$src'");
            $row=$query->fetch();
            if(empty($row)) return true;
            else return false;
        }
        public function deleteMovie($movie_id){
            $result1=$this->getDB()->exec("DELETE FROM `movies` WHERE id=$movie_id");
            $result2=$this->getDB()->exec("DELETE FROM `movie_resource` WHERE  movie=$movie_id");
            return ($result1||$result2) ?true:false;
        }
        public function getMovieURL($movie_id){
            $query[]=Array();
            foreach($this->getDB()->query("SELECT `id`, `movie_id`, `type`, `src` FROM `movie_resource` WHERE movie_id=$movie_id") as $row)
                $query[]=$row;
            return $query;
        }
        public function getMovieID($zh_name,$en_name){
            $movie=$this->getDB()->query("SELECT `id`, `zh_name`, `en_name`, `duration`, `rating`, `released`, `director`, `actors`, `intro`, `trailer_url`, `updated_at`, `created_at` FROM `movies` 
                                        WHERE zh_name='$zh_name' and en_name='$en_name'");
            $row=$movie->fetch();
            return $row['id'];
        }
        public function insertcarousel($resource,$url){
            return($this->getDB()->exec("INSERT INTO `carousel`( `movie_resource_id`, `url`) VALUES ($resource,'$url')"))?true:false;
        }
        public function getResourceID($movie_id,$type,$src){
            $query=$this->getDB()->query("SELECT `id`, `movie_id`, `type`, `src` FROM `movie_resource` WHERE movie_id=$movie_id and type='$type' and src='$src'");
            $row=$query->fetch();
            return $row['id'];
        }
    }
?>