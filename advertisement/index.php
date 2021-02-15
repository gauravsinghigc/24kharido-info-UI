<?php require '../config.php' ;?>
<!DOCTYPE html>
<htm style="background-image: linear-gradient(to right bottom, #caeff7, #1bff0029) !important;" l>

 <head>
  <title>Advertisements | <?php echo $APP_NAME;?></title>
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
<meta name="description" content="advertisement at 24kharido, shop e-gadgets, their monthly rations, groceries, fruit vegetables, and book custom delivery services.">
<meta name="keywords" content="24kharido, fresh fruits and vegetables  in Faridabad buy fruit vegetables in Faridabad, monthly rations offer, grocery ordering online, delivery solution in Faridabad, online shopping groceries, delivery and courier, 24kharido Faridabad, advertisement">
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
  			<h3 class="bg-white p-3 circle">Advertise with <?php echo $APP_NAME;?></h3>
        <p class="p-2 text-justify">
          <?php echo $APP_NAME;?> provide advertisement support for you and your organisation over our app and app users. if any of them is interested in your products & services then he/she contact you directly without mediator.
        </p>
        
        <h4 class="bg-white p-3 circle">Why Advertise with Us?</h4>
        <ul>
          <li>Get Direct Audience Details.</li>
          <li>Customers Directly contact to services & products provider.</li>
          <li>fast, easy to post and easy to maintain ads with us.</li>
          <li>Get ad views, ad clicks, ad page visitors, get their contact details if they show interest in it.</li>
          <li>Affordable ad plans with daily/weekly/monthly/half-year/yearly plans.</li>
          <li>Get 80% Refunds if not satisfieds with advertisements.</li>
          <li>Choose prefer time, date, advertise rate as per your need and requirements.</li>
        </ul>
        <a href="<?php echo $DOMAIN;?>/quotation/" class="btn btn-lg btn-info circle text-white">Get Quotations</a>
  		</div>
  		<div class="col-lg-3 col-md-3 col-sm-3 col-12">
  			<img src="<?php echo $DOMAIN;?>/img/24kharido-Main-App-Screen.png" class="img-fluid">
  		</div>

      <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-3">
        <h4 class="bg-white p-3 circle">Advertisment Plans</h4>
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3 col-12 mb-2">
            <div class="bg-white circle-2 p-3 m-1">
              <h4 class="bg-light p-2 circle">Weekly Plans</h4>
              <ul>
                <li>7 Days Advertisments after end Renew Required.</li>
                <li>Get Form Submission Data on dashboard & Mails.</li>
                <li>Self Upload Advertisement Banners.</li>
                <li>Track Records for view, visitors and clicks.</li>
              </ul>
             <h5 class="text-center mb-2"><span class="bg-success p-2 circle d-block mx-auto text-center text-white">Rs.399</span></h5>
             <a href="<?php echo $DOMAIN;?>/quotation/" class="bg-info p-2 circle btn-block w-100 text-center d-block mx-auto text-white">Get Enquiries</a>
            </div>
          </div>
           <div class="col-lg-3 col-md-3 col-sm-3 col-1 mb-22">
            <div class="bg-white circle-2 p-3 m-1">
              <h4 class="bg-light p-2 circle">Monthly Plans</h4>
              <ul>
                <li>30 Days Advertisments after end Renew Required.</li>
                <li>Get Form Submission Data on dashboard & Mails.</li>
                <li>Export Data in excel/pdf.</li>
                <li>Self Upload Advertisement Banners/Gifs/Videos.</li>
                <li>Track Records for view, visitors and clicks.</li>
              </ul>
             <h5 class="text-center mb-2"><span class="bg-success p-2 circle d-block mx-auto text-center text-white">Rs.1399</span></h5>
             <a href="<?php echo $DOMAIN;?>/quotation/" class="bg-info p-2 circle btn-block w-100 text-center d-block mx-auto text-white">Get Enquiries</a>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-12 mb-2">
            <div class="bg-white circle-2 p-3 m-1">
              <h4 class="bg-light p-2 circle">6 Months Plans</h4>
              <ul>
                <li>180 Days Advertisments after end Renew Required.</li>
                <li>Get Form Submission Data on dashboard & Mails.</li>
                <li>Export Data in excel/pdf.</li>
                <li>Self Upload Advertisement Banners/Gifs/Videos.</li>
                <li>Weekly One Post Sharing on <?php echo $APP_NAME;?> social accounts.</li>
                <li>Track Records for view, visitors and clicks.</li>
              </ul>
             <h5 class="text-center mb-2"><span class="bg-success p-2 circle d-block mx-auto text-center text-white">Rs.8999</span></h5>
             <a href="<?php echo $DOMAIN;?>/quotation/" class="bg-info p-2 circle btn-block w-100 text-center d-block mx-auto text-white">Get Enquiries</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-3 col-12 mb-2">
            <div class="bg-white circle-2 p-3 m-1">
              <h4 class="bg-light p-2 circle">One Year Plan</h4>
              <ul>
                <li>365 Days Advertisments after end Renew Required.</li>
                <li>Get Form Submission Data on dashboard & Mails.</li>
                <li>Export Data in excel/pdf.</li>
                <li>Self Upload Advertisement Banners/Gifs/Videos.</li>
                <li>Weekly One Post Sharing on <?php echo $APP_NAME;?> social accounts.</li>
                <li>Run mail compaign, sms directly from dashboard wihtout any outside tools.</li>
                <li>Track Records for view, visitors and clicks.</li>
              </ul>
             <h5 class="text-center mb-2"><span class="bg-success p-2 circle d-block mx-auto text-center text-white">Rs.14999</span></h5>
             <a href="<?php echo $DOMAIN;?>/quotation/" class="bg-info p-2 circle btn-block w-100 text-center d-block mx-auto text-white">Get Enquiries</a>
            </div>
          </div>

        </div>
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
