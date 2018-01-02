<?php
    require_once('../layouts/header.php'); 
    $sql="select * from theater";
    $result=mysqli_query($connect,$sql);
?>
<div class="container"><h2>上傳新電影</h2>
<form  method="post" action="setTimeMovie.php" enctype="multipart/form-data">
  <label for="theater">聽次:</label>
  <select class="form-control" name='theater'>
    <?php 
        while($row=mysqli_fetch_array($result)){
                echo "<option>".$row[0]."</option>";
        }
    ?>
  </select>
        <label for='date'>日期:</label>
        <select class='form-control' name='date'>";
        <?php 
        $currentDate = date("Y/m/d");// current date
        for($i=0;$i<=10;$i++)
        echo "<option>".date('Y/m/d', strtotime("+$i days"))."</option>";
        ?>
    </select>
  <div class="selectbtn">
  <input type="submit" class="btn btn-default" value="送出" />
  </div>
</form>
</div>
<?php  require_once('../layouts/footer.php');  ?>

