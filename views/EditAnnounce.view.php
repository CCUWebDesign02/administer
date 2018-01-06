<?php
    require_once(__DIR__ . '/../autoload.php');
    use \Data \Announce;
    $Announce=new Announce();
    extract($_GET);
    $announcelist=$Announce->getSelectAnnounce($id);
?>
<p><br /></p>
<div class="container">
    
    <form action="../app/UpDate/ReWriteAnnounce.php?" method="get" role="form">
        <h1 class="text-center"><legend>更新公告</legend></h1>
        <hr>
        <div class="form-group">
            <label for="title">公告編號:</label>
            <input type="text" class="form-control" name="id" value="<?php echo $announcelist['id']?>" readonly="readonly"/>
        </div>
        <div class="form-group">
            <label for="title">標題:</label>
            <input type="text" class="form-control" name="title" value="<?php echo $announcelist['title']?>"/>
        </div>
        <div class="form-group">
            <label for="comment">內容:</label>
            <textarea class="form-control" rows="12" name="content"><?php echo $announcelist['content']?> </textarea>
        </div>
        <button type="submit" class="btn btn-primary" id="upmovie_button">更新</button>
    </form>
    
</div>
