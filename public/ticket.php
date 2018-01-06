<?php
    error_reporting(E_ALL || ~E_NOTICE); 
    require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'environment.php');
    require_once(__DIR__ . '/../permission.php');
    require_once(__DIR__ . '/../views/layouts/header.view.php');
    require_once(__DIR__ . '/../views/ticket.view.php');
    require_once(__DIR__ . '/../views/layouts/footer.view.php');
?>