<?php
    namespace Data ;
    class TimeTable extends DatabaseFactory{
        public function __construct(){
            parent::__construct();
        }
        public function getTimeTable(){
            $query=Array();
            foreach($this->db->query("select * from timetable") as $row)
                $query[]=$row;
            return $query;
        }
        public function getTheater(){
            $query=Array();
            foreach($this->db->query("select * from theater")as $row)
                $query[]=$row;
            return $query;
        }
        public function getTheaterTimeTable($theater,$date){
            $query=Array();
            foreach($this->db->query("select * from timetable where theater_id='$theater' and date='$date'")as $row)
                $query[]=$row;
            return $query;
        }
        public function deleteTimeTable($theater,$date,$time){
            $this->db->exec("DELETE FROM `ticket` WHERE theater='$theater' and date='$date' and time='$time'");
            $result=$this->db->exec("DELETE FROM `timetable` WHERE theater_ID='$theater' and date='$date' and time='$time'");
            if($result) return true;
            else return false;
        }
        public function insertTimeTable($theater,$date,$time,$movie){
            $result=$this->db->exec("INSERT INTO `timetable`(`theater_ID`, `date`, `time`, `movieID`) VALUES ('$theater','$date','$time','$movie')");
            $this->db->exec("INSERT INTO `ticket`(`theater`, `date`, `time`, `moive`) VALUES ('$theater','$date','$time','$movie')");
            if($result) return true;
            else return false;
        }
        public function getDate(){
            $query=Array();
            $date=date("y-m-d");
            for($i=0;$i<10;$i++)$query[]=date('Y-m-d', strtotime("+$i days"));
            return $query;
        }
        public function insertDate($date){
            $this->db->exec("INSERT INTO `Date`(`Date`) VALUES ('$date') ");
        }
        public function getTime(){
                $time =Array("10:00:00","12:00:00","14:00:00","16:00:00","18:00:00","20:00:00","22:00:00");
            return $time;
        }
    }
?>