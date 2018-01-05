<?php
    require_once(__DIR__ . '/../autoload.php');
    use \Data \TimeTable;
    $TimeTable = new TimeTable();
    $theater=$TimeTable->getTheater();
    $date=$TimeTable->getDate();
?>
<p><br /></p>
<div class="container">
    <div class="container">
    <h1 class="text-center">更新電影時刻表</h1>
    <hr/>
    <div class="input-group movie_select">
        <span class="input-group-addon">廳次:</span>
        <input id="selShowingDate" type="text" class="form-control" contenteditable="false" value="<?php echo $_SESSION['theater']?>" readonly="true">
        <div class="input-group-btn">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">選取</button>
            <ul class="dropdown-menu pull-right">
                <?php 
                    foreach($theater as $row) 
                        echo "<li><a href=\"../app/upData/setTheater.php?theater=".$row[0]."\">".$row[0]."</a></li>";
                ?>
            </ul>
        </div>
    </div>
    <hr/>
    <div class="input-group movie_select">
        <span class="input-group-addon">日期:</span>
        <input id="selShowingDate" type="text" class="form-control" contenteditable="false" value="<?php echo $_SESSION['date']?>" readonly="true">
        <div class="input-group-btn">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">選取</button>
            <ul class="dropdown-menu pull-right">
                <?php 
                    foreach($date as $row) 
                        echo "<li><a href=\"../app/upData/setDate.php?date=".$row."\">".$row."</a></li>";
                ?>
            </ul>
        </div>
    </div>
    </div>
    <hr/>
    <div class="container">
    <form  method="post" action="../app/upData/updataTimeTable.php" enctype="multipart/form-data" id="form1">
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
                    use \Data \Movie;
                    $TimeTable = new TimeTable();
                    $Movie=new Movie();
                    $theater=$_SESSION["theater"];
                    $date=$_SESSION["date"];
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
                        echo "<td> <a class=\"fa fa-trash fa-lg\"  onclick=\"location.href='../app/upData/Moviedelect.php?date=$date&theater=$theater&time=$row'\"/>";
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

