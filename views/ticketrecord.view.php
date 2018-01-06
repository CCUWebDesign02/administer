<?php
    require_once(__DIR__ . '/../autoload.php');
    extract($_GET);
    use \Data \Transaction;
    use \Data \TimeTable;
    use \Data \Member;
    $Member=new Member();
    $Transaction=new Transaction();
    $TimeTable=new TimeTable();
    $Ticket_info=$Transaction->getTicket($ticketrecord);
    $record=$Transaction->getTransactionInfo($ticketrecord);
    $moviename=$TimeTable->getMovieName($Ticket_info[0]['movie_id']);
?>
<p><br /></p>
<div class="container-fluid">
<h3 class="text-center"><?php echo $Ticket_info[0]['hall']."&nbsp".$Ticket_info[0]['showing_time']."&nbsp".$moviename?></h3>
<hr />
<table class="table table-striped table-bordered table-hover" id="mytable">
        <thead>
            <tr>
                <th>會員編號</th>
                <th>會員名子</th>
                <th>購買票數</th>
                <th>總價</th>
                <th>購買日期</th>
               
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($record as $row){
                    $name=$Member->getUserName($row['user_id']);
                    $amount=$row['num']*250;
                    echo "<tr>";
                    echo "<td>".$row['user_id']."</td><td>".$name."</td><td>".$row['num']."</td><td>".$amount."</td><td>".$row['created_at']."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>會員編號</th>
                <th>會員名子</th>
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