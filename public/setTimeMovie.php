<?php
  require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'environment.php');
  require_once(__DIR__ . '/../autoload.php');
  require_once(__DIR__ . '/../permission.php');
  require_once(__DIR__ . '/../views/layouts/header.view.php');
  require_once(__DIR__ . '/../views/setTimeTableTop.view.php');
  use \Data \TimeTable;
  use \Data \Movie;
  $TimeTable = new TimeTable();
  $Movie=new Movie();
  extract($_POST);
  $_SESSION["theater"]=$theater;
  $_SESSION["date"]=$date;
  $TimeTable->insertDate($date);
  $time=$TimeTable->getTime();
  $movielist=$Movie->getOnMovie($date);
  $movieOnTimeList=$TimeTable->getTheaterTimeTable($theater,$date);
  $num=count($movieOnTimeList);
  foreach($time as $row){
    echo "<tr><td>$theater</td><td>$date</td><td>$row</td>";
    $i=0;
    for($i=0;$i<$num;$i++){
      if($row==$movieOnTimeList[$i]['time']){
        echo "<td>".$movieOnTimeList[$i]['movieID']."</td>";
        break;
      }  
    }
    if($i==$num) {
       echo "<td><select class='form-control' name='movie_select$row'>" ;
         echo "<option></option>";
        foreach($movielist as $element){
          echo "<option>".$element['movie_name']."</option>";
        }
        echo "</select></td>";
    }
    echo "<td> <button type='button' class='btn btn-default'  onclick=\"location.href='updata/delect.php?date=$date&theater=$theater&time=$row'\">清空資料</button>";
  }
  require_once(__DIR__ . '/../views/setTimeTableBottom.view.php');
  require_once(__DIR__ . '/../views/layouts/footer.view.php');
?>
