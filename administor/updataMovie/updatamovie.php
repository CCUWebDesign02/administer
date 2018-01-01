<?php
    header("Content-Type:text/html; charset=utf-8");
    require_once('../../connect.php');
    extract($_POST);
    if(empty($moviename)||empty($releasedate)||empty($time)||empty($outdate)||empty($plot))
        header("location:./?error=資料填寫錯誤");
    if(empty($_FILES["file"]["name"]))
        header("location:./?error=請上傳電影劇照");
    $sql ="INSERT INTO `movie`(`movie_name`, `movie_release`, `movie_duringtime`, `movie_outofdate`, `movie_plot`, `movie_rating`)
                VALUES ('$moviename','$releasedate','$time','$outdate','$plot','$rating')" ;
    $result=mysqli_query($connect,$sql);
    if(!$result)header("location:./?error=上傳失敗");
    else {
        $File_Extension = explode(".", $_FILES['file']['name']);
        $arr=array($moviename,".",$File_Extension[1]);
        $_FILES["file"]["name"]=join("",$arr);
        move_uploaded_file($_FILES["file"]["tmp_name"],"../../moviepicture/".$_FILES["file"]["name"]);
        header("location:./?sucessful=上傳成功");
    }
?>