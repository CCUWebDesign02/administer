<?php
      require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR .'environment.php');
      require_once(__DIR__ . '/../../autoload.php');
      use \Data \Announce;
      $Announce = new Announce();
      extract($_GET);
      $Announce->deleteAnnounce($id);
      header("location:../../public/announce.php?sucessful=更新成功");
?>