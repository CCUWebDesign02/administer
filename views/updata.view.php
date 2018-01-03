  <div class="container">
<h2>上傳新電影</h2>
<form  method="post" action="../app/upData/updatamovie.php" enctype="multipart/form-data"  id="form1">
  <div class="form-group">
    <label for="moviename">電影名稱:</label>
    <input type="text" class="form-control" name="moviename" placeholder="Enter MovieName" id="moviename">
  </div>
  <div class="form-group">
    <label for="releasedate">上映日期:</label>
    <input type="text" class="form-control" name="releasedate" placeholder="2017/12/31" id="release">
  </div>
  <div class="form-group">
    <label for="time">片長:</label>
    <input type="text" class="form-control" name="time" placeholder="單位分" id="time">
  </div>
  <div class="form-group">
    <label for="out">下檔日期:</label>
    <input type="text" class="form-control" name="outdate" placeholder="2017/12/31" id="outofdate">
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
    <textarea class="form-control" rows="5" name="plot" id="plot"></textarea>
  </div>
  <div class="form-group">
    <label for="releasedate">電影劇照:</label>
    <input type="file" name="file" value="file" id="file"/>
  </div>
  <input type="submit" class="btn btn-default" value="上傳" id="button" />
</form>
</div>
