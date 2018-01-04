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
                    require_once(__DIR__ . '/../autoload.php');
                    use \Data \TimeTable;
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
                        echo "<td> <button type='button' class='btn btn-default'  onclick=\"location.href='../app/upData/Moviedelect.php?date=$date&theater=$theater&time=$row'\">清空資料</button>";
                    }
                ?>

            </tbody>
        </table>
        <div class="selectbtn">
            <input type="submit" class="btn btn-default" value="送出" />
        </div>
    </form>
</div>