<?php
  error_reporting(E_ALL || ~E_NOTICE); 
  require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'environment.php');
  require_once(__DIR__ . '/../permission.php');
  require_once(__DIR__ . '/../views/layouts/header.view.php');
  require_once(__DIR__ . '/../views/setTimetop.view.php');
  require_once(__DIR__ . '/../app/getData/setTime.php');
  require_once(__DIR__ . '/../views/setTimebottom.view.php');
  require_once(__DIR__ . '/../views/layouts/footer.view.php');
  if($_GET['sucessful']=='更新成功')
    echo "<script>setTimeout(\"alert('更新成功')\" , 0);</script>";
  else if($_GET['error']=='更新失敗')
    echo "<script>setTimeout(\"alert('更新失敗')\" , 0);</script>";
?>
