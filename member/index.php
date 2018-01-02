<?php 
    require_once('../layouts/header.php'); 
    $query=$dbcon->getSelect("select * from member");
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
                foreach($query as $row){
                    for($i=0;$i<count($row);$i++){
                        echo count($row);
                    }
                }
           ?>
       </tbody>
   </table>
</div>
<?php require_once('../layouts/footer.php'); ?>