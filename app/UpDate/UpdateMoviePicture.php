<?php
      require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR .'environment.php');
      require_once(__DIR__ . '/../../autoload.php');
      extract($_POST);
      use Data \ Movie;
      $Movie=new Movie();
      $mimetype = exif_imagetype($_FILES["file"]["tmp_name"]);
      if (!($mimetype == IMAGETYPE_GIF || $mimetype == IMAGETYPE_JPEG || $mimetype == IMAGETYPE_PNG || $mimetype == IMAGETYPE_BMP))
           header("location:../../public/recommend.php?error=檔案格式錯誤");
    $File_Extension = explode(".", $_FILES['file']['name']);
    $name=sprintf("%08d",$movieID);
    $arr=array("MR-",$name,"-banner.",$File_Extension[1]);
    $_FILES["file"]["name"]=join("",$arr);
    move_uploaded_file($_FILES["file"]["tmp_name"],"../../public/imgs/movie/".$_FILES["file"]["name"]);
    $src=$_FILES["file"]["name"];
    if(!$Movie->isExistPhoto($src)) header("location:../../public/Recommend.php?error=上傳失敗");
    $Movie->insertPhoto($movieID,"banner",$src);
    $source=$Movie->getResourceID($movieID,"banner",$src);
    ($Movie->insertcarousel($source,$src))?header("location:../../public/Recommend.php?sucessful=上傳成功"):header("location:../../public/Recommend.php?error=上傳失敗");
?>