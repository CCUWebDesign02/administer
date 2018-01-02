<?php
    extract($_POST);
    require_once('../autoload.php'); 
    $dbcon=new DatabaseFactory();
     $db=$dbcon->getDB();
    $db->exec("INSERT INTO `announcement`(`date`, `title`) VALUES ('$date','$announce')");
    header("location:./?sucessful=新增成功");
?>