<?php
    namespace Data ;
    use Data \DataFactory;
    class Ticket extends DataFactory{
        public function getTicket(){
            $query=Array();
            foreach($this->getDB()->query("SELECT * FROM `tickets` WHERE 1") as $row)
                $query[]=$row;
            return $query;
        }
    }
?>