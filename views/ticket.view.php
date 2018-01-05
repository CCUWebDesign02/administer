<p><br /></p>
<div class="container" >
    <h1 class="text-center">票卷紀錄</h1>
    <hr/>
    <table class="table table-striped table-bordered table-hover" id="mytable">
        <thead>
            <tr>
                <th>廳次</th>
                <th>日期</th>
                <th>時間</th>
                <th>電影</th>
                <th>數量</th>
                <th>價錢</th>
                <th>購買紀錄</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once(__DIR__ . '/../autoload.php');
            use \Data \Ticket;
            $Ticket = new Ticket();
            $ticket_data=$Ticket->getTicket();
            foreach($ticket_data as $row){
                echo "<tr>";
                for($i=0;$i<6;$i++)
                echo "<td>".$row[$i]."</td>";
                echo "<td> <a class=\"fa fa-ticket fa-lg\" href=\"ticketrecord.php?ticketrecord=".$row['ticket_ID']."\"\></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>廳次</th>
                <th>日期</th>
                <th>時間</th>
                <th>電影</th>
                <th>數量</th>
                <th>價錢</th>
                <th>購買紀錄</th>
            </tr>
        </tfoot>
    </table>
</div>
<script>
    $('#mytable').dataTable();
</script>
