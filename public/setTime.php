<?php
  error_reporting(E_ALL || ~E_NOTICE); 
  require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'environment.php');
  require_once(__DIR__ . '/../autoload.php');
  require_once(__DIR__ . '/../permission.php');
  require_once(__DIR__ . '/../views/layouts/header.view.php');
  require_once(__DIR__ . '/../views/setTimetop.view.php');
  use \Data \TimeTable;
  $TimeTable = new TimeTable();
  $theater=$TimeTable->getTheater();
  $date=$TimeTable->getDate();
  foreach($theater as $row)
    echo "<option>".$row[0]."</option>";
  echo "</select><label for=\"date\">日期:</label><select class=\"form-control\" name='date'>";
  foreach($date as $row)
    echo "<option>".$row."</option>";
  echo "</select>";
  require_once(__DIR__ . '/../views/setTimebottom.view.php');
  require_once(__DIR__ . '/../views/layouts/footer.view.php');
  if($_GET['sucessful']=='更新成功')
    echo "<script>setTimeout(\"alert('更新成功')\" , 0);</script>";
  else if($_GET['error']=='更新失敗')
    echo "<script>setTimeout(\"alert('更新失敗')\" , 0);</script>";
?>
