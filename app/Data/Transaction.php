<?php
    namespace Data ;
    use Data \DataFactory;
    class Transaction extends DataFactory{
        public function getTransaction($account){
            $query=Array();
            foreach ($this->getDB()->query("SELECT * FROM `orders` WHERE user_id='$account'") as $row){
                 $query[]=$row;
            }
            return $query;
         }
         public function getTicket($ticket){
             $query=Array();
             foreach ($this->getDB()->query("SELECT * FROM `tickets` WHERE  id='$ticket'") as $row){
                 $query[]=$row;
            }
            return $query;
         }
         public function getTransactionInfo($ticket){
             $query=Array();
             foreach ($this->getDB()->query("SELECT * FROM `orders` WHERE ticket_id='$ticket'") as $row){
                 $query[]=$row;
            }
            return $query;
         }
     }
?>