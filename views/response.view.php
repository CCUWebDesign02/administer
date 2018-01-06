<?php
    require_once(__DIR__ . '/../autoload.php');
    use \Data \Complaint;
    extract($_GET);
    $Complaint = new Complaint();
    $Complaintlist=$Complaint->getAccountComplaint($complaintID);

?>
<p><br /></p>
<div class="container">
    <h3 class="text-center">顧客回應</h3>
    <hr/>
    <form  method="GET" action="../app/UpDate/UpDateResponse.php" enctype="multipart/form-data"  id="form1">
    <div class="form-group">
      <label for="complaintID">客訴編號:</label>
      <input type="text" class="form-control" name="complaintID" placeholder="<?php echo $Complaintlist[0]['complaintID'] ?>" id="complaintID" readonly="readonly" value="<?php echo $Complaintlist[0]['complaintID'] ?>"/>
    </div>
    <div class="form-group">
      <label for="moviename">會員:</label>
      <input type="text" class="form-control" name="account" placeholder="<?php echo $name ?>" id="account" readonly="readonly"/>
    </div>
    <div class="form-group">
      <label for="edate">留言日期:</label>
      <input type="text" class="form-control" name="date" placeholder="<?php echo $Complaintlist[0]['date'] ?>" id="date" readonly="readonly">
    </div>
    <div class="form-group">
      <label for="complaint">留言:</label>
      <textarea class="form-control" rows="5" name="complaint" id="complaint" readonly="readonly"><?php echo $Complaintlist[0]['complaint'] ?></textarea>
    </div>
    <div class="form-group">
    <label for="response">回復:</label>
    <?php 
    if($Complaintlist[0]['response']==''){ 
        echo "<textarea class=\"form-control\" rows=\"5\" name=\"response\" id=\"response\"></textarea>";
    }else {
        echo "<textarea class=\"form-control\" rows=\"5\" name=\"response\" id=\"response\">".$Complaintlist[0]['response']."</textarea>";
    }
    ?>
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-default " value="回復" id="upmovie_button" />
    </div>
  </form>
</div>