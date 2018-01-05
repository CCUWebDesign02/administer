<?php
    require_once(__DIR__ . '/../autoload.php');
    extract($_GET);
    use \Data \Complaint;
    $Complaint=new Complaint();
    $complaintlist=$Complaint->getComplaint();
?>
<p><br /></p>
<div class="container">
<h3 class="text-center">顧客回應</h3>
<hr>
<table class="table table-striped table-bordered table-hover" id="mytable">
        <thead>
            <tr>
                <th>會員</th>
                <th>留言日期</th>
                <th>留言</th>
                <th>回復</th>
                <th>是否已經回復</th>
                <th>回復日期</th>
            </tr>
        </thead>
        <tbody>
           <?php
                foreach($complaintlist as $row){
                    $responsedate= ($row['responsedate']=='')?"尚未回覆" : $row['responsedate'];
                    echo "<tr><td>".$row['account']."</td><td>".$row['date']."</td><td>".$row['complaint']."</td>";
                    echo "<td> <a class=\"fa fa-comment fa-lg\" href=\"response.php?complaintID=".$row['complaintID']."\"\></td>";
                    echo "<td>".$Complaint->getString($row['isresponse'])."</td>";
                    echo "<td>$responsedate</td></tr>";
                }
           ?>
        </tbody>
        <tfoot>
            <tr>
                <th>會員</th>
                <th>留言日期</th>
                <th>留言</th>
                <th>回復</th>
                <th>是否已經回復</th>
                <th>回復日期</th>
            </tr>
        </tfoot>
    </table>
</div>
<script>
    $('#mytable').dataTable();
</script>