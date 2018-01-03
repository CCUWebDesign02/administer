<?php 
  error_reporting(E_ALL || ~E_NOTICE); 
  require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'environment.php');
  require_once(__DIR__ . '/../autoload.php');
  require_once(__DIR__ . '/../permission.php');
  require_once(__DIR__ . '/../views/layouts/header.view.php');
  require_once(__DIR__ . '/../views/updata.view.php');
  require_once(__DIR__ . '/../views/layouts/footer.view.php');
  if($_GET['sucessful']=='成功')
    echo "<script>setTimeout(\"alert('上傳成功')\" , 0);</script>";
  else if($_GET['error']=='失敗')
    echo "<script>setTimeout(\"alert('上傳失敗')\" , 0);</script>";
  else if($_GET['error']=='檔案格式錯誤')
  echo "<script>setTimeout(\"alert('檔案格式錯誤')\" , 0);</script>";
?>