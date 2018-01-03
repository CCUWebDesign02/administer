<?php
 require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR .'environment.php');
 require_once(__DIR__ . '/../../autoload.php');
 session_start();
 use \Data \TimeTable;
 $TimeTable = new TimeTable();
 $time=$TimeTable->getTime();
 foreach($time as $time_element){
     $select="movie_select".$time_element;
     if(!empty($_POST[$select])){
        $movie=$_POST[$select];
        $date=$_SESSION['date'];
        $theater=$_SESSION['theater'];
       $result=$TimeTable->insertTimeTable($theater,$date,$time_element,$movie);
       if(!$result) header("location:../../public/setTime.php?error=更新失敗");
     }
 }
 header("location:../../public/setTime.php?sucessful=更新成功");
?>