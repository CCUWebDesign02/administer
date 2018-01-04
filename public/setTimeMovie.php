<?php
  require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'environment.php');
  require_once(__DIR__ . '/../permission.php');
  require_once(__DIR__ . '/../views/layouts/header.view.php');
  extract($_POST);
  $_SESSION["theater"]=$theater;
  $_SESSION["date"]=$date;
  require_once(__DIR__ . '/../views/setTimeMovie.view.php');
  require_once(__DIR__ . '/../views/layouts/footer.view.php');
?>
