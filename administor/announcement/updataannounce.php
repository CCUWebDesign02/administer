<?php
    require_once('../layouts/header.php'); 
    extract($_POST);
    $sql="INSERT INTO `announcement`(`date`, `title`) VALUES ('$date','$announce')";
    $result=mysqli_query($connect,$sql);
    header("location:./?sucessful=新增成功");
?>