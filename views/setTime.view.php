<?php
    require_once(__DIR__ . '/../autoload.php');
    session_start();
    use \Data \TimeTable;
    use \Data \Movie;
    $TimeTable = new TimeTable();
    $Movie=new Movie();
    $theater=$TimeTable->getTheater();
    $date=$TimeTable->getDate();
    $movielist=$Movie->getMovie();
    if(empty($_SESSION['theater']))$_SESSION['theater']=$theater[0][0];
    if(empty($_SESSION['date']))$_SESSION['date']=$date[0];
?>
<p><br /></p>
<div class="container">
    <div class="container">
    <h1 class="text-center">更新電影時刻表</h1>
    <hr/>
    <div class="input-group ">
        <span class="input-group-addon">廳次:</span>
        <input id="selShowingDate" type="text" class="form-control" contenteditable="false" value="<?php echo $_SESSION['theater']?>" readonly="true">
        <div class="input-group-btn">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">選取</button>
            <ul class="dropdown-menu pull-right">
                <?php 
                    foreach($theater as $row) 
                        echo "<li><a href=\"../app/UpDate/SetTheater.php?theater=".$row[0]."\">".$row[0]."</a></li>";
                ?>
            </ul>
        </div>
    </div>
    <hr/>
    <div class="input-group ">
        <span class="input-group-addon">日期:</span>
        <input id="selShowingDate" type="text" class="form-control" contenteditable="false" value="<?php echo $_SESSION['date']?>" readonly="true">
        <div class="input-group-btn">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">選取</button>
            <ul class="dropdown-menu pull-right">
                <?php 
                    foreach($date as $row) 
                        echo "<li><a href=\"../app/UpDate/SetDate.php?date=".$row."\">".$row."</a></li>";
                ?>
            </ul>
        </div>
    </div>
    </div>
    <hr/>
    <div class="container">
    <form  method="post" action="../app/UpDate/UpdateTimeTable.php" enctype="multipart/form-data" id="form1">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>廳次</th>
                    <th>日期</th>
                    <th>時間</th>
                    <th>電影</th>
                    <th>刪除</th>
                </tr>
            </thead>
            <tbody>
               <?php
                    $time=$TimeTable->getTime();
                    foreach($time as $row){
                        echo"<tr>";
                        echo "<td>".$_SESSION['theater']."</td>";
                        echo "<td>".$_SESSION['date']."</td>";
                        echo "<td>".$row."</td>";
                        $element=$TimeTable->is_On($_SESSION['theater'],$_SESSION['date'],$row);
                        if($element)
                            echo "<td>".$element."</td>";
                        else {
                            echo "<td><select class='form-control' name='movie_select$row'>" ;
                            echo "<option></option>";
                            foreach($movielist as $element){
                                echo "<option value=\"".$element['id']."\">".$element['zh_name']."</option>";
                            }
                            echo "</select></td>";
                        }
                        echo "<td> <a class=\"fa fa-trash fa-lg\"  href=\"../app/upDate/MovieDelect.php?theater=".$_SESSION['theater']."&date=".$_SESSION['date']."&time=$row\"/>";
                        echo"</tr>";
                    }
               ?>
            </tbody>
        </table>
        <div class="selectbtn">
            <input type="submit" class="btn btn-default" value="送出" />
        </div>
    </form>
    </div>
</div>

<!--  echo "<td> <a class=\"fa fa-trash fa-lg\"  href=\"../app/upData/Moviedelect.php?date=$date&theater=$theater&time=$row\"/>"; -->