<?php
    session_start();
    if(empty($_SESSION['admin_account'])||empty($_SESSION['admin_password']))
        header("location:./error=你沒有權限");
?>