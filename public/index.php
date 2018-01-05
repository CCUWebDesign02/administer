<?php
    require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'environment.php');
    require_once(__DIR__ . '/../views/index.view.php');
    require_once(__DIR__ . '/../autoload.php');
    use \Data \Administor;
    $admin=new Administor();
    session_start();
    extract($_POST);
    if(!empty($account)||!empty($password)){
        if($admin->getAdmin($account,$password)){
            $_SESSION['admin_account']=$account;
            $_SESSION['admin_password']=$password;
            $_SESSION['admin_name']=$admin->getName();
            header("location:ticket.php");
        }
        else{
            echo "<script>
                setTimeout(\"alert('帳號或密碼錯誤')\" , 0);
            </script>";
            }
    }
?>