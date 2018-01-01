<?php
    include("../connect.php");
    extract($_POST);
    session_start();
    $sql="select * from admin where account=\"$account\" and password=\"$password\"";
    $result=mysqli_query($connect,$sql);
    if(mysqli_num_rows($result)){
        $rows=mysqli_fetch_array($result);
        $_SESSION['admin_account']=$rows['account'];
        $_SESSION['admin_password']=$rows['password'];
        $_SESSION['admin_name']=$rows['name'];
        header("location:home");
    }
    else{
        header("location:./?error=帳號或密碼錯誤");
        
    }
?>
