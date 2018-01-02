<?php
    include("autoload.php");
    extract($_POST);
    session_start();
    $dbcon=new DatabaseFactory();
    $query=$dbcon->getSelect("select * from admin where account=\"$account\" and password=\"$password\"");
    if(!empty($query)){
      //  print_r($query);
        $_SESSION['admin_account']=$query[0][0];
        $_SESSION['admin_password']=$query[0][1];
        $_SESSION['admin_name']=$query[0][2];
        header("location:home/");
    }
    else{
        header("location:./?error=帳號或密碼錯誤");
        
    }
?>
