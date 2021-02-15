<?php require '../config.php' ;?>
<!DOCTYPE html>
<htm style="background-image: linear-gradient(to right bottom, #caeff7, #1bff0029) !important;" l>

 <head>
  <title>Quotations | <?php echo $APP_NAME;?></title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset=" utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <?php 
if ($handle = opendir('../assets/css')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") { ?>
<link rel="stylesheet" type="text/css" href="<?php echo $DOMAIN;?>/assets/css/<?php echo $entry;?>">
<?php }
    }
    closedir($handle);
}
?>
 </head>

 <body>
 <div class="container-fluid" style="background-image:url('<?php echo $DOMAIN;?>/img/24kharido-bg-dannger.png');background-size:cover; background-repeat:no-repeat;">
   <div class="row">
    <?php include '../header.php';?>
   </div>
  </div>

  <div class="container-fluid">
  	<div class="row">
  		<div class="col-lg-9 col-md-9 col-sm-9 col-12 p-3">
  			<h3 class="bg-white p-3 circle">Quotation</h3>
      <p class="p-3 mb-0 pb-0"><code>*</code> Please fill all required details</p>
      <?php
      if(isset($_POST['SendMail'])){
      $FullName = $_POST['FullName'];
      $MailID = $_POST['MailID'];
      $PhoneNumber = $_POST['PhoneNumber'];
      $Subject = $_POST['QuotationType'];
      $MailDesc = $_POST['MailDesc'];
      $RandomId = date("DmY/").rand(1111, 9999);

      SendMail(
        $Valid = "true", 
        $Subject = "$Subject", 
        $Title = "Quotation Query Sent @ $Subject - $RandomId", 
        $CustomerMailId = "$MailID", 
        $MAIL_MSG = "
        <h3>$FullName</h3>
        <p>We received your query for the Quotation of Advertisement Plan like $Subject. We mail you best Quotation according to your requirements in 24hr. We may also called you for verification.</p>
        <p><b>Note :</b> We never ask you on call to pay for verification, verify OTP or share any other confidential data. After explaining complete plain detials we mailed you your credentials, invoice, and others details.</p>
        <p><b>Note :</b> payments are send or received only through official mail id. never pay to anyone who claims to be a part of $APP_NAME instead of $store_mail_id.</p>
        <p>
        <h4>We Received Following Details: Send by You</h4>
        <b>FullName</b> : $FullName<BR>
        <B>MailID </B> : $MailID<br>
        <b>PhoneNumber </b> : $PhoneNumber<br>
        <b>Subject </b> : $Subject<br>
        <b>Message </b> : $Message</p>");
      SendMail(
        $Valid = "true", 
        $Subject = "$Subject", 
        $Title = "Quotation Query Received @ $Subject - $RandomId", 
        $CustomerMailId = "$store_mail_id", 
        $MAIL_MSG = "
        <h3>Dear $APP_NAME,</h3>
        <p>$FullName send the Quotation for Advertisement Plan like $Subject. Please provide them best Quotation.</p>
        <h4>Contact Details & Message are as follow:</h4>
        <b>FullName</b> : $FullName<BR>
        <B>MailID </B> : $MailID<br>
        <b>PhoneNumber </b> : $PhoneNumber<br>
        <b>Subject </b> : $Subject<br>
        <b>Message </b> : $Message</p>");
       echo "<h5 class='text-success p-2 bg-white circle'> <i class='fa fa-check-circle'></i> Thanking you for contact us. We contact you ASAP.</h5>";
      } 
      ?>
      <form action="" method="POST" class="p-3">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12 p-3 pt-1">
            <div class="form-group">
              <label>*Enter Full Name</label>
              <input type="text" name="FullName" class="form-control circle" required="">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12 p-3 pt-1">
            <div class="form-group">
              <label>*Enter Mail Id</label>
              <input type="text" name="MailID" class="form-control circle" required="">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12 p-3 pt-1">
            <div class="form-group">
              <label>*Enter Phone</label>
              <input type="text" name="PhoneNumber" class="form-control circle" required="">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12 p-3 pt-1">
            <div class="form-group">
              <label>*Select Plan Type</label>
              <select class="form-control circle" name="QuotationType" required="">
                <option value="WeeklyPlan@399">Weekly Plan @ 399</option>
                <option value="MonthlyPlan@1399">Monthly Plan @ 399</option>
                <option value="SixMonths@8999">Six Months Plan @ 8999</option>
                <option value="YearlyPlan@14999">Yearly Plan @ 14999</option>
              </select>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-3 pt-1">
            <div class="form-group">
              <label>*Enter your query</label>
              <textarea class="form-control" name="MailDesc" required="" rows="5"></textarea>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12 p-3 pt-1">
            <div class="form-group">
              <button class="btn btn-success btn-block" name="SendMail">Send Query</button>
            </div>
          </div>
        </div>
      </form>
  		</div>
  		<div class="col-lg-3 col-md-3 col-sm-3 col-12">
  			<img src="<?php echo $DOMAIN;?>/img/24kharido-Main-App-Screen.png" class="img-fluid">
  		</div>
      
  	</div>
  </div>

<?php include '../footer.php';?>
  <?php 
if ($handle = opendir('../assets/js')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") { ?>
<script type="text/javascript" src="<?php echo $DOMAIN;?>/assets/js/<?php echo $entry;?>"></script>
<?php }
    }
    closedir($handle);
}
?>
<script>
$(document).ready(function() {
 $('.dropdown-toggle').dropdown()
});
</script>
 </body>

 </html>
