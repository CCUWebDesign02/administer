<?php
      require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR .'environment.php');
      require_once(__DIR__ . '/../../autoload.php');
      use \Data \Announce;
      $Announce = new Announce();
      extract($_GET);
      $now = new \DateTime("now", new \DateTimeZone("UTC"));
      $update = $now->format('Y-m-d H:i:s');
      $Announce->EditAnnounce($id,$title,$content,$update);
      header("location:../../public/announce.php?sucessful=更新成功");
?>