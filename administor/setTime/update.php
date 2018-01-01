<?php
    require_once('../../connect.php');
    session_start();
    $time =Array("10:00:00","12:00:00","14:00:00","16:00:00","18:00:00","20:00:00","22:00:00");
    for($i=0;$i<count($time);$i++,$count++){
        $select="movie_select".$time[$i];
        if(!empty($_POST[$select])){
            $movie=$_POST[$select];
            $date=$_SESSION['date'];
            $theater=$_SESSION['theater'];
            $timeperiod=$time[$i];
            $sql="INSERT INTO `timetable`(`theater_ID`, `date`, `time`, `movieID`) 
            VALUES ('$theater','$date','$timeperiod','$movie');";
            $result=mysqli_query($connect,$sql);
            if(!$result)header("location:./?error=更新失敗");
        }
    }
     header("location:./?sucessful=上傳成功");
?>