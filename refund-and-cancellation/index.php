<?php require '../config.php' ;?>
<!DOCTYPE html>
<htm style="background-image: linear-gradient(to right bottom, #caeff7, #1bff0029) !important;" l>

 <head>
  <title>Refund & Cancellations | <?php echo $APP_NAME;?></title>
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
<meta name="description" content="refund and cancellation At 24kharido.in Shop e-gadgets, monthly rations, groceries, fruit vegetables, and book custom delivery services.">
<meta name="keywords" content="refund and cancellation, 24kharido, fresh fruits and vegetables  in Faridabad buy fruit vegetables in Faridabad, monthly rations offer, grocery ordering online, delivery solution in Faridabad, online shopping groceries, delivery and courier, 24kharido Faridabad.">
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
  			<h3 class="bg-white p-3 circle">Refunds & Cancellations</h3>
         <p class="mt-2 p-3 text-justify"><b><i class="fa fa-arrow-right"></i></b> Refund for an order takes place 5-6 working days after verify order details and accepting refund request.<br>
      <b><i class="fa fa-arrow-right"></i> </b> Refund request can be raise by app or website, it depends on customer which method they feel confortable.<br>
      <b><i class="fa fa-arrow-right"></i></b> Refund request can also be raise by sending email of invoice to support@24kharido.in, after verify order we proceed for refund methods.<br>
      <b><i class="fa fa-arrow-right"></i></b> No Refund for Fruits & vegetables, we replace the item on refund request instead of refund.<br>
      <b><i class="fa fa-arrow-right"></i> </b> Grocery items can be refunded after verify quality, order details, checking mfd date and way where it is dilevered.<br>
      <b><i class="fa fa-arrow-right"></i></b> Refund cannot be processed in cash, it is only processed UPI/DIRECT BANK DEPOSIT/WALLET methods/24kharido Funds only.<br>
      <b>Note: </b> Refund policy varies from item to item, so if you are raising a refund request it maybe rejected or non refundable in some case, which can be defines in mails
     </p>

     <h5>Order Cancellation</h5>
     <p class="p-3 text-justify"><b><i class="fa fa-arrow-right"></i></b> An order be cancelled before "OUT OF DELIVERY" status, after Out for Delivery order cannot be cancelled. <br>
      <b><i class="fa fa-arrow-right"></i></b> You have to request for cancel your order from app or website, distributor verify your request. they may be accept of reject it. <br>
      <b><i class="fa fa-arrow-right"></i> </b> Cancellation depends on disributor decission.
     </p>
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
