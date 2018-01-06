<?php
require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'environment.php');
require_once(__DIR__ . '/../autoload.php');
use Auth\Login;
use Data \Member;
$user = new Login($_POST['account'], $_POST['password']);
$member =new Member();
if($user->validate()) {
	if($user->checkoutAdmin()){
		$_SESSION['admin_id']=$user->getUserID();
		$_SESSION['admin_name']=$member->getUserName($_SESSION['admin_id']);
		echo $_SESSION['admin_id'];
		header("location:ticketrecord.php");
	}
	else
		header("location:./?error=你沒有權限");
}
else {
	header("location:./?error=帳號或密碼錯誤");
}
?>