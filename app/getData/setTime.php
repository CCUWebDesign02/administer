<?php
 require_once(__DIR__ . '/../../autoload.php');
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
 ?>