<p><br /></p>
<div class="container">
  <h1 class="text-center">上傳新電影</h1>
  <hr/>
  <form  method="post" action="../app/UpDate/UpdateMovie.php" enctype="multipart/form-data"  id="form1">
    <div class="form-group">
      <label for="moviename">電影中文名稱:</label>
      <input type="text" class="form-control" name="zh_name" placeholder="Enter ZH_Name" >
    </div>
    <div class="form-group">
      <label for="moviename">電影英文名稱:</label>
      <input type="text" class="form-control" name="en_name" placeholder="Enter en_Name" >
    </div>
    <div class="form-group">
      <label for="time">片長:</label>
      <input type="text" class="form-control" name="time" id="time">
    </div>
    <div class="form-group">
      <label for="rating">分級:</label>
      <select class="form-control" name="rating">
        <option value="0">普遍級</option>
        <option value="1">保護級</option>
        <option value="2">輔12級</option>
        <option value="3">輔15級</option>
        <option value="4">限制級</option>
      </select>
    </div>
    <div class="form-group">
      <label for="releasedate">上映日期:</label>
      <input type="text" class="form-control" name="release" placeholder="2017-12-31" >
    </div>
    <div class="form-group">
      <label for="director">導演:</label>
      <input type="text" class="form-control" name="director">
    </div>
    <div class="form-group">
      <label for="actor">演員:</label>
      <input type="text" class="form-control" name="actor">
    </div>
    <div class="form-group">
      <label for="url">預告片網址:</label>
      <input type="text" class="form-control" name="url">
    </div>
    <div class="form-group">
      <label for="comment">劇情介紹:</label>
      <textarea class="form-control" rows="5" name="intro" ></textarea>
    </div>
    <div class="form-group">
      <label for="releasedate">電影劇照:</label>
      <input type="file" name="file" value="file" id="file"/>
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-default " value="上傳" id="upmovie_button" />
    </div>
  </form>
</div>
