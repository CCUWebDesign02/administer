<?php
      require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR .'environment.php');
      require_once(__DIR__ . '/../../autoload.php');
      use \Data \Recommend;
      $Announce = new Announce();
      extract($_POST);
      $result= $Announce->insertAnnounce($date,$announce);
      if($result)
          header("location:../../public/announce.php?sucessful=上傳成功");
      else 
          header("location:../../public/announce.php?error=上傳失敗");
?>