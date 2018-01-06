<p><br /></p>
<div class="container" >
    <h1 class="text-center">票卷紀錄</h1>
    <hr/>
    <table class="table table-striped table-bordered table-hover" id="mytable">
        <thead>
            <tr>
                <th>廳次</th>
                <th>日期</th>
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
            use \Data \TimeTable;
            $TimeTable=new TimeTable();
            $Ticket = new Ticket();
            $ticket_data=$Ticket->getTicket();
            foreach($ticket_data as $row){
                $name=$TimeTable->getMovieName($row['movie_id']);
                echo "<tr>";
                echo "<td>".$row['hall']."</td><td>".$row['showing_time']."</td><td>".$name."</td><td>".$row['remanded']."</td><td>250</td>";
                echo "<td> <a class=\"fa fa-ticket fa-lg\" href=\"ticketrecord.php?ticketrecord=".$row['id']."\"\></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>廳次</th>
                <th>日期</th>
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
