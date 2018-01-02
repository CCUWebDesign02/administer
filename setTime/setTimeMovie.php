<?php
        require_once('../layouts/header.php'); 
        session_start();
        extract($_POST);
        $_SESSION["theater"]=$theater;
        $_SESSION["date"]=$date;
        $sql="INSERT INTO `Date`(`Date`) VALUES ('$date')";
        $insert=mysqli_query($connect,$sql);
        $sql="select * from timetable where theater_ID='$theater' and date='$date' ORDER BY `timetable`.`time` ASC";
        $result=mysqli_query($connect,$sql);
        $sql ="select * from movie where '$date' BETWEEN  movie_release and  movie_outofdate";
        $selectMovie=mysqli_query($connect,$sql);      
?>
<form  method="post" action="update.php" enctype="multipart/form-data" id="form1">
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
            $time =Array("10:00:00","12:00:00","14:00:00","16:00:00","18:00:00","20:00:00","22:00:00");
            $moviename=Array();
            while($movie=mysqli_fetch_array($selectMovie))
                array_push($moviename,$movie['movie_name']);
            
            $row=mysqli_fetch_array($result);
            for($i=0;$i<7;$i++){
                echo "<tr><td>$theater</td><td>$date</td><td>".$time[$i]."</td>";
                if($row['time']==$time[$i]){
                    echo "<td>".$row['movieID']."</td>";
                    $row=mysqli_fetch_array($result);
                }
                else{
                   echo "<td><select class='form-control' name=movie_select$time[$i]>" ;
                    echo "<option></option>";
                    for($j=0;$j<count($moviename);$j++){
                        echo "<option>".$moviename[$j]."</option>";
                    }
                     echo "</select></td>";
                } 
              echo "<td> <button type='button' class='btn btn-default'  onclick=\"location.href='delect.php?date=$date&theater=$theater&time=".$time[$i]."'\">清空資料</button>";
          }
        ?>
    </tbody>
</table>
<div class="selectbtn">
  <input type="submit" class="btn btn-default" value="送出" />
</div>
</form>
<?php  require_once('../layouts/footer.php');  ?>