<?php 
    require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'environment.php');
    require_once(__DIR__ . '/../autoload.php');
    require_once(__DIR__ . '/../permission.php');
   require_once(__DIR__ . '/../views/layouts/header.view.php');
   require_once(__DIR__ . '/../views/membertop.view.php');
   use \Data \Member;
   $member = new Member();
   $member_data=$member->getMember();
   foreach($member_data as $row){
      echo "<tr>";
      for($j=0;$j<5;$j++)
        echo "<td>".$row[$j]."</td>";
      if($row[5])echo "<td>願意接受活動資訊</td>";
      else echo "<td>不願意接受活動資訊</td>";
        echo "<td> <button type='button' class='btn btn-default'  onclick=\"location.href='cart.php?cart=".$row[6]."'\">查看購物紀錄</button>";
      echo "</tr>";
   }
   require_once(__DIR__ . '/../views/memberbottom.view.php');
   require_once(__DIR__ . '/../views/layouts/footer.view.php');
?>