<?php 
    require_once('../layouts/header.php'); 
?>

    
<div class="container">
<h2>上傳新電影</h2>
<form  method="post" action="updatamovie.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="moviename">電影名稱:</label>
    <input type="text" class="form-control" name="moviename" placeholder="Enter MovieName">
  </div>
  <div class="form-group">
    <label for="releasedate">上映日期:</label>
    <input type="text" class="form-control" name="releasedate" placeholder="2017/12/31">
  </div>
  <div class="form-group">
    <label for="time">片長:</label>
    <input type="text" class="form-control" name="time" placeholder="單位分">
  </div>
  <div class="form-group">
    <label for="out">下檔日期:</label>
    <input type="text" class="form-control" name="outdate" placeholder="2017/12/31">
  </div>
  <div class="form-group">
  <label for="rating">分級:</label>
  <select class="form-control" name="rating">
    <option>普遍級</option>
    <option>保護級</option>
    <option>輔導級</option>
  </select>
</div>
  <div class="form-group">
    <label for="comment">劇情介紹:</label>
    <textarea class="form-control" rows="5" name="plot"></textarea>
  </div>
  <div class="form-group">
    <label for="releasedate">電影劇照:</label>
    <input type="file" name="file" value="file" />
  </div>
  <input type="submit" class="btn btn-default" value="上傳" />
</form>
</div>
    

<?php require_once('../layouts/footer.php'); ?>