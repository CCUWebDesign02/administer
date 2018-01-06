<?php
    require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR .'environment.php');
    require_once(__DIR__ . '/../../autoload.php');
    use Data \Movie ;
    $Movie=new Movie() ;
    extract($_POST);
    $mimetype = exif_imagetype($_FILES["file"]["tmp_name"]);
    if (!($mimetype == IMAGETYPE_GIF || $mimetype == IMAGETYPE_JPEG || $mimetype == IMAGETYPE_PNG || $mimetype == IMAGETYPE_BMP))
         header("location:../../public/updata.php?error=檔案格式錯誤");
    $now = new \DateTime("now", new \DateTimeZone("UTC"));
    $now_str = $now->format('Y-m-d H:i:s');
    if(!($Movie->insertMovie($zh_name,$en_name,$time,$rating,$release,$director,$actor,$intro,$url,$now_str,$now_str)));
        header("location:../../public/updata.php?error=上傳失敗");
    $id=$Movie->getMovieID($zh_name,$en_name);
    $File_Extension = explode(".", $_FILES['file']['name']);
    $name=sprintf("%08d",$id);
    $arr=array("MR-",$name,"-poster.",$File_Extension[1]);
    $_FILES["file"]["name"]=join("",$arr);
    move_uploaded_file($_FILES["file"]["tmp_name"],"../../public/imgs/movie/".$_FILES["file"]["name"]);
    $src=$_FILES["file"]["name"];
    ($Movie->insertPhoto($id,"poster",$src))?header("location:../../public/updata.php?sucessful=上傳成功"):header("location:../../public/updata.php?error=上傳失敗");
?>