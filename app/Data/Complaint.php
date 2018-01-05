<?php
    namespace Data ;
    class Complaint extends DatabaseFactory{
        public function __construct(){
            parent::__construct();
        }
        public function getComplaint(){
            $query=Array();
            foreach($this->db->query("SELECT * FROM `customer complaints` WHERE 1") as $row)
                $query[]=$row;
            return $query;
        }
        public function getAccountComplaint($complaintID){
            $query=Array();
            foreach($this->db->query("SELECT * FROM `customer complaints` WHERE complaintID=$complaintID") as $row)
                $query[]=$row;
            return $query;
        }
        public function getString($isresponse){
            return (!$isresponse)? "尚未回覆":"已回復";
        }
        public function Response($response,$complaintID,$date){
            $this->db->exec("UPDATE `customer complaints` SET `isresponse`=1, `response`='$response',`responsedate`='$date' WHERE complaintID='$complaintID'");
            echo "UPDATE `customer complaints` SET `isresponse`=1, `response`=$response  `responsedate`=$date WHERE complaintID=$complaintID";
        }
    }
?>
