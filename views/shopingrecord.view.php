<?php
    require_once(__DIR__ . '/../autoload.php');
    extract($_GET);
    use \Data \Transaction;
    $Transaction=new Transaction();
    $transactionlist=$Transaction->getTransaction($account);
?>
<p><br /></p>
<div class="container">
<h3 class="text-center"><?php echo $account."購物紀錄"?></h3>
<hr>
<table class="table table-striped table-bordered table-hover" id="mytable">
        <thead>
            <tr>
                <th>廳次</th>
                <th>日期</th>
                <th>時間</th>
                <th>電影</th>
                <th>購買票數</th>
                <th>總價</th>
                <th>購買日期</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($transactionlist as $row){
                    echo "<tr>";
                    $ticket_Info=$Transaction->getTicket($row['ticket']);
                    echo "<td>".$ticket_Info[0]['theater']."</td><td>".$ticket_Info[0]['date']."</td><td>".$ticket_Info[0]['time']."</td><td>".$ticket_Info[0]['movie']."</td><td>".$row['number'].
                         "</td><td>".$row['amount']."</td><td>".$row['buy_date']."</td></tr>";
                }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>廳次</th>
                <th>日期</th>
                <th>時間</th>
                <th>電影</th>
                <th>購買票數</th>
                <th>總價</th>
                <th>購買日期</th>
            </tr>
        </tfoot>
    </table>
</div>
<script>
    $('#mytable').dataTable();
</script>