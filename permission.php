<?php
   session_start();
    if(empty($_SESSION['admin_id']))
        header("location:./error=你沒有權限");
?>