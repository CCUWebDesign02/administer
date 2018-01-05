<?php
    extract($_GET);
    session_start();
    $_SESSION['theater']=$theater;
    header("location:../../public/setTime.php");
?>