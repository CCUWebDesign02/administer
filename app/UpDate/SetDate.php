<?php
    extract($_GET);
    session_start();
    $_SESSION['date']=$date;
    header("location:../../public/setTime.php");
?>