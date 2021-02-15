<?php require '../config.php' ;?>
<!DOCTYPE html>
<htm style="background-image: linear-gradient(to right bottom, #caeff7, #1bff0029) !important;" l>

 <head>
  <title>Join Us & Career | <?php echo $APP_NAME;?></title>
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
<meta name="description" content="join-us, At 24kharido.in, shop e-gadgets, monthly rations, groceries, fruit vegetables, and book custom delivery services.">
<meta name="keywords" content="join us, 24kharido, fresh fruits and vegetables  in Faridabad buy fruit vegetables in Faridabad, monthly rations offer, grocery ordering online, delivery solution in Faridabad, online shopping groceries, delivery and courier, 24kharido Faridabad.">
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
  			<h3 class="bg-white p-3 circle">Join Us</h3>
     <p class="p-3 text-justify mb-0">At 24Kharido, we're always on the lookout for someone who believes in putting consumers above everyone and everything else, while envisioning growth and pursuing excellence for the years to
      come. Sounds like you?</p>
     <p class="p-3 text-justify">to work with us, please send your update CV or Resume at <br><br><a href="mailto:<?php echo $store_mail_id;?>"
       class="btn btn-info text-white p-2 d-block mx-auto"><?php echo $store_mail_id;?></a>
     </p>
     <h6 class="bg-white p-3 circle">Current Openings</h6>
     <ul>
       <li>Marketing Executives - <a href="mailto:<?php echo $store_mail_id;?>">Apply Now</a></li>
       <li>Delivery Mens - <a href="mailto:<?php echo $store_mail_id;?>">Apply Now</a></li>
       <li>System Admin - <a href="mailto:<?php echo $store_mail_id;?>">Apply Now</a></li>
       <li>Customer Care Executives - <a href="mailto:<?php echo $store_mail_id;?>">Apply Now</a></li>
     </ul>
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
