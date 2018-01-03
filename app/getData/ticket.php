<?php
     require_once(__DIR__ . '/../../autoload.php');
     use \Data \Ticket;
     $Ticket = new Ticket();
     $ticket_data=$Ticket->getTicket();
     foreach($ticket_data as $row){
        echo "<tr>";
       for($i=0;$i<6;$i++)
        echo "<td>".$row[$i]."</td>";
        echo "<td> <button type='button' class='btn btn-default'  onclick=\"location.href='../app/upData/123.php?id=".$row[6]."'\">查看資料</button>";
        echo "</tr>";
     }
?>