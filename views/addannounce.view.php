<p><br /></p>
    <div class="container">
    <h1 class="text-center">新增活動公告</h1><hr/>
    <form  method="post" action="../app/UpDate/UpDateAnnounce.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="moviename">標題:</label>
            <input type="text" class="form-control" name="title" >
        </div>
        <div class="form-group">
            <label for="comment">內容:</label>
            <textarea class="form-control" rows="12" name="content"></textarea>
        </div>
        <input type="submit" class="btn btn-default" value="上傳" id="upmovie_button" />
    </form>
</div>
