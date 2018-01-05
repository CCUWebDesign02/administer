<?php
 require_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR .'environment.php');
 require_once(__DIR__ . '/../../autoload.php');
 use \Data \Complaint;
 $Complaint=new Complaint();
 extract($_GET);
 $date=date("y-m-d");
 $Complaint->Response($response,$complaintID,$date);
 header("location:../../public/complaint.php?");
?>