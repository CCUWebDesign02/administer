<?php
    extract($_GET);
    require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR .'environment.php');
    require_once(__DIR__ . '/../../autoload.php');
    use \Data \TimeTable;
    $TimeTable = new TimeTable();
    $TimeTable->deleteTimeTable($theater,$date,$time);
    header("location:../../public/setTime.php?sucessful=更新成功");
?>