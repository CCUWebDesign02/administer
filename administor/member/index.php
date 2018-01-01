<?php 
    require_once('../layouts/header.php'); 
    $sql="select * from member";
    $result=mysqli_query($connect,$sql);
?>
<div class="container">
   <table class="table table-hover">
       <thead>
            <tr>
               <th>會員帳號</th>
               <th>會員密碼</th>
               <th>會員名子</th>
               <th>會員性別</th>
               <th>會員電話</th>
               <th>會員是否願意接受活動資訊</th>
               <th>查看購物車</th>
               <th>查看消費紀錄</th>
           </tr>
       </thead>
       <tbody>
           <?php 
                while($row=mysqli_fetch_array($result)){
                    for($i=1;$i<=5;$i++)
                        echo "<th>$row[$i]</th>";
                    if($row[6])$active="願意";
                    else $active="不願意";
                    echo "<th>$active</th><th>$row[0]</th></tr>";
                }
           ?>
       </tbody>
   </table>
</div>
<?php require_once('../layouts/footer.php'); ?>