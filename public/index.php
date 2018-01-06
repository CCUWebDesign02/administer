<?php
    require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'environment.php');
    require_once(__DIR__ . '/../views/index.view.php');
    require_once(__DIR__ . '/../autoload.php');
    if($_GET['error']=="你沒有權限")
        echo "<script>setTimeout(\"alert('你沒有權限')\" , 0);</script>";
    else if($_GET['error']=="帳號或密碼錯誤")
        echo "<script>setTimeout(\"alert('帳號或密碼錯誤')\" , 0);</script>";
?>