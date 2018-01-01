<?php
    error_reporting(E_ALL || ~E_NOTICE);
    $server='140.123.175.101';
    $user='team02';
    $dbname='team02';
    $password='banana';
    $connect=mysqli_connect($server,$user,$password,$dbname) or die("fail to connect");
    mysqli_query($connect,"SET NAMES UTF8");
?>