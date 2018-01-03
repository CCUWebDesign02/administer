<?php
    error_reporting(E_ALL || ~E_NOTICE); 
    require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR .'environment.php');
    require_once(__DIR__ . '/../../autoload.php');
    use \Data \Announce;
    $Movie = new Announce();
     extract($_POST);
    $result= $Movie->insertAnnounce($date,$announce);
    if($result)
        header("location:../announce.php?sucessful=上傳成功");
    else 
        header("location:../announce.php?error=上傳失敗");
?>