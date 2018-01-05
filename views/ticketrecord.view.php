<?php
    require_once(__DIR__ . '/../autoload.php');
    extract($_GET);
    use \Data \Transaction;
    $Transaction=new Transaction();
    $Ticket_info=$Transaction->getTicket($ticketrecord);
    $record=$Transaction->getTransactionInfo($ticketrecord);
?>
<p><br /></p>
<div class="container">
<h3 class="text-center"><?php echo $Ticket_info[0]['theater']."&nbsp".$Ticket_info[0]['date']."&nbsp".$Ticket_info[0]['time']."&nbsp".$Ticket_info[0]['movie']?></h3>
<hr>
<table class="table table-striped table-bordered table-hover" id="mytable">
        <thead>
            <tr>
                <th>會員</th>
                <th>購買票數</th>
                <th>總價</th>
                <th>購買日期</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($record as $row){
                    echo "<tr>";
                    echo "<td>".$row['account']."</td><td>".$row['number']."</td><td>".$row['amount']."</td><td>".$row['buy_date']."</td><td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
        <tfoot>
            <tr>
            <th>會員</th>
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