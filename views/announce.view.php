<p><br /></p>
<div class="container" >
<h1 class="text-center">會員資料</h1><hr/>
   <table class="table table-striped table-bordered table-hover" id="mytable">
       <thead>
            <tr>
               <th>日期</th>
               <th>公告</th>
               <th>刪除</th>
       </thead>
       <tbody>
            <?php
                require_once(__DIR__ . '/../autoload.php');
                use \Data \Announce;
                $Announce = new Announce();
                $announcelist=$Announce->getAnnounce();
                foreach($announcelist as $row){
                    echo "<tr>";
                    echo "<td>".$row['date']."</td><td>".$row['title']."</td>";
                    echo "<td> <a class=\"fa fa-trash fa-lg\" href=\"../app/updata/deleteAnnounce.php?date=".$row['date']."&title=".$row['title']."\"\></td>";
                    echo "</tr>";
                }
            ?>
       </tbody>
       <tfoot>
            <tr>
               <th>日期</th>
               <th>公告</th>
               <th>刪除</th>
       </tfoot>
</table>
<div class="selectbtn">
            <input type="button" class="btn btn-default" value="新增" onclick="location.href='addannounce.php'" />
        </div>
</div>
<script>
    $('#mytable').dataTable();
</script>