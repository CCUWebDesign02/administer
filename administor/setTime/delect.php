<?php
   extract($_GET);
   require_once('../../connect.php');
   session_start();
   $sql="DELETE FROM `timetable` WHERE theater_ID='$theater' and date='$date' and time='$time'";
   $result=mysqli_query($connect,$sql);
   header("location:./");
?>