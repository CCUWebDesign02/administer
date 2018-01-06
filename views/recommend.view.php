<?php
    require_once(__DIR__ . '/../autoload.php');
    use \Data \Movie;
    $Movie = new Movie();
    $MovieList=$Movie->getMovie();
?>
<p>
    <br />
</p>
<div class="container" id="recommend">
    <form  method="post" action="../app/UpDate/UpdateMoviePicture.php" enctype="multipart/form-data"  id="form1">
    <h1 class="text-center">電影海報上傳</h1>
    <hr>
   <div class="form-group moivePicture" >
    <label for="moviename">電影:</label>
    <select name="movieID" class="form-control">
        <?php  foreach($MovieList as $row){
                echo "<option value=\"".$row['id']."\">".$row['zh_name']."</option>";
            }
        ?>
    </select>
    </div>
    <div class="form-group moivePicture" >
      <label for="releasedate">電影海報:</label>
      <br>
      <input type="file" name="file" value="file" id="file"/>
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-default " value="上傳" id="upmovie_button" />
    </div>
    </form>
</div>