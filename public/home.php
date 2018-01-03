<?php
    require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'environment.php');
    require_once(__DIR__ . '/../autoload.php');
    require_once(__DIR__ . '/../permission.php');
    require_once(__DIR__ . '/../views/layouts/header.view.php');
    use \Data \DatabaseFactory;
     $db = new DatabaseFactory();
    require_once(__DIR__ . '/../views/home.view.php');
    require_once(__DIR__ . '/../views/layouts/footer.view.php');
?>