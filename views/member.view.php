<p><br /></p>
<div class="container" >
<h1 class="text-center">會員資料</h1><hr/>
   <table class="table table-striped table-bordered table-hover" id="mytable">
       <thead>
            <tr>
               <th>會員帳號</th>
               <th>會員密碼</th>
               <th>會員名子</th>
               <th>會員性別</th>
               <th>會員電話</th>
               <th>會員是否願意接受活動資訊</th>
               <th>查看消費紀錄</th>
           </tr>
       </thead>
       <tbody>
        <?php
            require_once(__DIR__ . '/../autoload.php');
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
        ?>
       </tbody>
</table>
</div>
<script>
    $('#mytable').dataTable();
</script>