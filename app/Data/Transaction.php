<?php
    namespace Data ;
    class Transaction extends DatabaseFactory{
        public function __construct(){
            parent::__construct();
        }
        public function getTransaction($account){
           $query=Array();
           foreach ($this->db->query("SELECT * FROM `transaction` WHERE account='$account'") as $row){
                $query[]=$row;
           }
           return $query;
        }
        public function getTicket($ticket){
            $query=Array();
            foreach ($this->db->query("SELECT `theater`, `date`, `time`, `movie`, `quantity`, `price`, `ticket_ID` FROM `ticket` WHERE  ticket_ID='$ticket'") as $row){
                $query[]=$row;
           }
           return $query;
        }
        public function getTransactionInfo($ticket){
            $query=Array();
            foreach ($this->db->query("SELECT `transactionID`, `account`, `ticket`, `number`, `amount`, `buy_date` FROM `transaction` WHERE ticket='$ticket'") as $row){
                $query[]=$row;
           }
           return $query;
        }
    }
?>