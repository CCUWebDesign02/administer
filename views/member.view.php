<p><br /></p>
<div class="container-fluid" >
<h1 class="text-center">會員資料</h1><hr/>
   <table class="table table-striped table-bordered table-hover" id="mytable">
       <thead>
            <tr>
               <th>會員編號</th>
               <th>會員帳號</th>
               <th>會員名子</th>
               <th>會員信箱</th>
               <th>最後登入時間</th>
               <th>最新更新時間</th>
               <th>註冊時間</th>
           </tr>
       </thead>
       <tbody>
        <?php
            require_once(__DIR__ . '/../autoload.php');
            use \Data \Member;
            $member = new Member();
            $member_data=$member->getUser();
            foreach($member_data as $row){
                echo "<tr>";
            echo "<td>".$row['id']."</td><td>".$row['account']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>"
            .$row['last_loggedin']."</td><td>".$row['updated_at']."</td><td>".$row['created_at']."</td>";
            echo "</tr>";
            }
            
        ?>
       </tbody>
       <tfoot>
            <tr>
            <th>會員編號</th>
            <th>會員帳號</th>
            <th>會員名子</th>
            <th>會員信箱</th>
            <th>最後登入時間</th>
            <th>最新更新時間</th>
            <th>註冊時間</th>
           </tr>
       </tfoot>
</table>
</div>
<script>
    $('#mytable').dataTable();
</script>