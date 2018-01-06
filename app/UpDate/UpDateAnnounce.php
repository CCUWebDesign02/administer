<?php
      require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR .'environment.php');
      require_once(__DIR__ . '/../../autoload.php');
      use \Data \Announce;
      $Announce = new Announce();
      $now = new \DateTime("now", new \DateTimeZone("UTC"));
      $now_str = $now->format('Y-m-d H:i:s');
      extract($_POST);
      $result= $Announce->insertAnnounce($title,$content,$now_str,$now_str);
      if($result)
          header("location:../../public/announce.php?sucessful=更新成功");
      else 
          header("location:../../public/announce.php?error=更新失敗");
?>