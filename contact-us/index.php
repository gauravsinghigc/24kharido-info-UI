<?php require '../config.php' ;?>
<!DOCTYPE html>
<htm style="background-image: linear-gradient(to right bottom, #caeff7, #1bff0029) !important;" l>

 <head>
  <title>Contact Us | <?php echo $APP_NAME;?></title>
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
<meta name="title" content="24kharido | You Need, We Have, We Deliver">
<meta name="description" content="contact 24kharido.in, shop e-gadgets, monthly rations, groceries, fruit vegetables, and book custom delivery services.">
<meta name="keywords" content="24kharido, fresh fruits and vegetables  in Faridabad buy fruit vegetables in Faridabad, monthly rations offer, grocery ordering online, delivery solution in Faridabad, online shopping groceries, delivery and courier, 24kharido Faridabad, contact us">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="1 days">
<meta name="author" content="GauravsinghigC">

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
  			<h3 class="bg-white p-3 circle">Contact Us</h3>
      <p class="p-3 mb-0 pb-0"><code>*</code> Please fill all required details</p>
      <?php
      if(isset($_POST['SendMail'])){
      $FullName = $_POST['FullName'];
      $MailID = $_POST['MailID'];
      $PhoneNumber = $_POST['PhoneNumber'];
      $Subject = $_POST['Subject'];
      $MailDesc = $_POST['MailDesc'];
      $RandomId = date("DmY/").rand(1111, 9999);

      SendMail(
        $Valid = "true", 
        $Subject = "$Subject", 
        $Title = "Contact Form Received - $RandomId", 
        $CustomerMailId = "$store_mail_id", 
        $MAIL_MSG = "<p>
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
              <label>Enter Phone (Optional)</label>
              <input type="text" name="PhoneNumber" class="form-control circle" >
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12 p-3 pt-1">
            <div class="form-group">
              <label>*Enter Subject</label>
              <input type="text" name="Subject" class="form-control circle" required="">
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-3 pt-1">
            <div class="form-group">
              <label>*Message</label>
              <textarea class="form-control" name="MailDesc" required="" rows="5"></textarea>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12 p-3 pt-1">
            <div class="form-group">
              <button class="btn btn-success btn-block" name="SendMail">Submit</button>
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
