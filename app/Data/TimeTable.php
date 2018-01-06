<?php
    namespace Data ;
    use Data \DataFactory;
    class TimeTable extends DataFactory{
        public function getTimeTable(){
            $query=Array();
            foreach($this->getDB()->query("select * from timetable") as $row)
                $query[]=$row;
            return $query;
        }
        public function getTheater(){
            $query=Array();
            foreach($this->getDB()->query("select * from theater")as $row)
                $query[]=$row;
            return $query;
        }
        public function is_On($theater,$date,$time){
            $tem=Array($date,$time);
            $datetime=implode(" ",$tem);
            $tem=Array($date,$time);
            $datetime=implode(" ",$tem);
            $query=$this->getDB()->query("SELECT `theater_ID`, `DateTime`,  `movieID` FROM `timetable` WHERE theater_ID='$theater' and DateTime='$datetime'");
            $row=$query->fetch();
            if(empty($row)) return false;
            else return $row['movieID'];
        }
       
        public function getDate(){
            $query=Array();
            $date=date("y-m-d");
            for($i=0;$i<10;$i++)$query[]=date('Y-m-d', strtotime("+$i days"));
            return $query;
        }
        public function getTime(){
                $time =Array("10:00:00","12:00:00","14:00:00","16:00:00","18:00:00","20:00:00","22:00:00");
            return $time;
        }
        public function getMovieName($id){
            $query=$this->getDB()->query("SELECT `id`, `zh_name`, `en_name`, `duration`, `rating`, `released`, `director`, `actors`, `intro`, `trailer_url`, `updated_at`, `created_at` 
            FROM `movies` WHERE id='$id'");
            $row =$query->fetch();
            return $row['zh_name'];
        }
        public function DeleteMovie($theater,$date,$time){
            $tem=Array($date,$time);
            $datetime=implode(" ",$tem);
            $resutl1=$this->getDB()->query("DELETE FROM `timetable` WHERE theater_ID='$theater' and DateTime='$datetime' ");
            $resutl2=$this->getDB()->query("DELETE FROM `tickets` WHERE showing_time='$datetime'");
            return ($resutl1||$resutl2)?true:false;
        }
        public function InsertTimeTable($theater,$date,$time,$movie){
            $tem=Array($date,$time);
            $now = new \DateTime("now", new \DateTimeZone("UTC"));
            $now_str = $now->format('Y-m-d H:i:s');
            $datetime=implode(" ",$tem);
            $resutl1=$this->getDB()->query("INSERT INTO `timetable`(`theater_ID`, `DateTime`, `movieid`) VALUES ('$theater','$datetime','$movie')");
            $resutl2= $this->getDB()->query("INSERT INTO `tickets`(`movie_id`, `showing_time`, `hall`, `updated_at`,`created_at`)
            VALUES ('$movie','$datetime','$theater','$now_str','$now_str')");
            ($resutl1||$resutl2)? true:false;
        }
    }
?>