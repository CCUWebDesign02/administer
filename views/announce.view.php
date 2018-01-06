<p><br /></p>
<div class="container" >
<h1 class="text-center">會員資料</h1><hr/>
   <table class="table table-striped table-bordered table-hover" id="mytable">
       <thead>
            <tr>
               <th>公告編號</th>
               <th>公告標題</th>
               <th>公告內容</th>
               <th>上傳日期</th>
               <th>刪除</th>
               <th>編輯</th>
       </thead>
       <tbody>
            <?php
                require_once(__DIR__ . '/../autoload.php');
                use \Data \Announce;
                $Announce = new Announce();
                $announcelist=$Announce->getAnnounce();
                foreach($announcelist as $element){
                    echo "<tr>";
                    for($i=0;$i<4;$i++)
                    echo "<td>".$element[$i],"</td>";
                    echo "<td> <a class=\"fa fa-trash fa-lg\" href=\"../app/Update/DeleteAnnounce.php?id=".$element['id']."\"/></td>";
                    echo "<td><a class=\"fa fa-pencil-square-o fa-lg\" href=\"EditAnnounce.php?id=".$element['id']."\"/></td>";
                    echo "</tr>";
                }
            ?>
       </tbody>
       <tfoot>
            <tr>
                <th>公告編號</th>
                <th>公告標題</th>
                <th>公告內容</th>
                <th>上傳日期</th>
                <th>刪除</th>
                <th>編輯</th>
       </tfoot>
</table>
<div class="selectbtn">
            <input type="button" class="btn btn-default" value="新增" onclick="location.href='addannounce.php'" />
        </div>
</div>
<script>
    $('#mytable').dataTable();
</script>