<?php
    require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR .'environment.php');
    require_once(__DIR__ . '/../../autoload.php');
    use \Data \Movie;
    $Movie = new Movie();
     extract($_POST);
    $result= $Movie->insertMovie($moviename,$releasedate,$time,$outdate,$rating,$plot);
    if($result){
        $mimetype = exif_imagetype($_FILES["file"]["tmp_name"]);
		if ($mimetype == IMAGETYPE_GIF || $mimetype == IMAGETYPE_JPEG || $mimetype == IMAGETYPE_PNG || $mimetype == IMAGETYPE_BMP){
            $File_Extension = explode(".", $_FILES['file']['name']);
            $arr=array($moviename,".","jpeg");
            $_FILES["file"]["name"]=join("",$arr);
            move_uploaded_file($_FILES["file"]["tmp_name"],"../../public/moviepicture/".$_FILES["file"]["name"]);
            header("location:../../public/updata.php?sucessful=成功");
        }
        else header("location:../../public/updata.php?error=檔案格式錯誤");
    }
    else 
        header("location:../../public/updata.php?error=失敗");

?>