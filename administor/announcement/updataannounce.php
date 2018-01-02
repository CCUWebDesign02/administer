<?php
    extract($_POST);
    use  Data \DatabaseFactory;
    $db=new DatabaseFactory();
    $db->exec("INSERT INTO `announcement`(`date`, `title`) VALUES ('$date','$announce')");
    header("location:./?sucessful=新增成功");
?>