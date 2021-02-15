<?php require '../config.php' ;?>
<!DOCTYPE html>
<htm style="background-image: linear-gradient(to right bottom, #caeff7, #1bff0029) !important;" l>

 <head>
  <title>Custom Order | <?php echo $APP_NAME;?></title>
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
<meta name="description" content="custom order At 24kharido.in, shop e-gadgets, monthly rations, groceries, fruit vegetables, and book custom delivery services.">
<meta name="keywords" content="custom order, 24kharido, fresh fruits and vegetables  in Faridabad buy fruit vegetables in Faridabad, monthly rations offer, grocery ordering online, delivery solution in Faridabad, online shopping groceries, delivery and courier, 24kharido Faridabad.">
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
  			<h3 class="bg-white p-3 circle">Custom Order & Local Delivery</h3>
     <p class="mt-2 text-justify mb-1 p-2">
      <?php echo $APP_NAME;?> provides customer order delivery & local delivery solutions for your products & services. At <?php echo $APP_NAME;?> customer order their requirements, book custom delivery slot like courier for Delhi/NCR. if you want to an delivery solution for your organisation as freelance work then <?php echo $APP_NAME;?> helps in it. 
      </p>
      <h5 class="bg-white p-3 circle">Delivery Charges & Rates</h5>
      <p class="p-2">Custom Order Delivery & courier services have are booked on a minimal charges. Delivery charges are applied on the basis of time taken, distance in(km), products/items weight and convience charges.</p>
      <h5 class="bg-white p-2 circle">Calculate Charges</h5>
      <?php 
      if(isset($_POST['CalculateCharges'])) {
      $Distance = $_POST['Distance'];
      $Weight = $_POST['Weight'];
      $PaymentsMethods = $_POST['PaymentsMethods'];

      //Distance Charges
      if($Distance <= 25) {
        $DistanceCharges = 7*$Distance;
        $DistanceChargesDATA = "Rs.7/km";
      } elseif($Distance > 25){
        $DistanceCharges = 9*$Distance;
        $DistanceChargesDATA = "Rs.9/km";
      } elseif ($Distance >=50) {
        $DistanceCharges = 10*$Distance;
        $DistanceChargesDATA = "Rs.10/km";
      } elseif ($Distance > 100) {
        $DistanceCharges = "Not Supported Distance";
      }

      //Weight Charges
      if($Weight <= 2.5){
        $WeightCharges= 10;
        $WeightChargesData = "Rs.10 (0.1 to 2.5)";
      } elseif ($Weight <= 5) {
        $WeightCharges = 15;
        $WeightChargesData = "Rs.15 (2.6 to 5)";
      } elseif ($Weight <= 10) {
        $WeightCharges = 20;
        $WeightChargesData = "Rs.20 (5.1 to 10)";
      } elseif($Weight <= 15){
        $WeightCharges = 25;
        $WeightChargesData = "Rs.25 (10.1 to 15)";
      } elseif($Weight <= 20){
        $WeightCharges = 30;
        $WeightChargesData = "Rs.30 (15.1 to 20)";
      } elseif ($Weight > 20){
        $WeightCharges = "Not Supported Weight";
      } 

      //Payment Method charges & fee
      if($PaymentsMethods == "OnlinePayments"){
        $PaymentCharges = 3;
        $PaymentChargesData = "$PaymentCharges%";
      } elseif ($PaymentsMethods == "CODPayments") {
        $PaymentCharges = 5;
        $PaymentChargesData = "Rs.$PaymentCharges";
      } 
      if($DistanceCharges == "Not Supported Distance" or $WeightCharges == "Not Supported Weight") {
        echo "<h2><I class='fa fa-warning text-danger'></I> Please Check Some Values :</h2>
        <p>
        <b>Weight :</b> $Weight Kg : Rs.$WeightCharges<br>
        <b>Distance :</b> $Distance Km : Rs.$DistanceCharges<br>
        <b>PaymentsMethods :</b> $PaymentsMethods : $PaymentCharges <br>
        <b>Total Payable Amount :</b> Not Available<br><br>
        <a href='' class='btn btn-sm btn-success circle-2'>Try Again</a>
        </p>";
      }  else {
          $PayableAmount = $DistanceCharges+$WeightCharges;
          if($PaymentsMethods == "OnlinePayments"){
          $FeesCharges = $PayableAmount/100*$PaymentCharges;
          } else {
            $FeesCharges = $PaymentCharges;
          }
          $NetPayableAmount = $PayableAmount+$FeesCharges;
      }?>

      <table class="table table-striped d-block mx-auto" style="width: 70% !important;">
          <thead class="bg-white circle">
            <tr>
              <td></td>
              <th>Fees & Charges</th>
              <th>Required Units</th>
              <th>Total Price</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>Distance</th>
              <td><?php echo $DistanceChargesDATA; ?></td>
              <td><?php echo $Distance; ?>Km</td>
              <td align="right"><b>Rs.<?php echo $DistanceCharges; ?></b></td>
            </tr>
            <tr>
              <th>Weight</th>
              <td><?php echo $WeightChargesData; ?></td>
              <td><?php echo $Weight; ?>Kg</td>
              <td align="right"><b>Rs.<?php echo $WeightCharges; ?></b></td>
            </tr>
             <tr class="bg-info">
              <td colspan="3" align="right"><span class="text-white">Total Amount &nbsp;<i class="fa fa-angle-right"></i></span></td>
              <td colspan="1 text-white" align="right"><b class="text-white">Rs.<?php echo $PayableAmount; ?></b></td>
            </tr>
             <tr class="bg-info">
              <td colspan="3" align="right"><span class="text-white">Payment Methods &nbsp;<i class="fa fa-angle-right"></i></span></td>
              <td colspan="1 text-white" align="right"><b class="text-white"><?php echo $PaymentsMethods; ?></b></td>
            </tr>
             <tr class="bg-info">
              <td colspan="3" align="right"><span class="text-white">Fees & Charges (<?php echo $PaymentChargesData; ?>)&nbsp;<i class="fa fa-angle-right"></i></span></td>
              <td colspan="1 text-white" align="right"><b class="text-white">Rs.<?php echo $FeesCharges;?>  </b></td>
            </tr>
            <tr class="bg-success">
              <td colspan="3" align="right"><span class="text-white">Total Payment Amount &nbsp;<i class="fa fa-angle-right"></i></span></td>
              <td colspan="1 text-white" align="right"><b class="text-white">Rs.<?php echo $NetPayableAmount; ?></b></td>
            </tr>
          </tbody>
        </table>

        <A href="" class="btn btn-md btn-dark d-block mx-auto W-30">Calculate Again</A>

      <?php } else { ?>
      <form action="" class="form" method="POST">
        <div class="row p-3 pt-1">
          <div class="col-lg-4 col-md-4 col-sm-4 col-12 p-2">
            <div class="form-group">
              <label>Enter Distance</label>
              <input type="text" name="Distance" value="" class="form-control circle" required="" placeholder="in km">
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-12 p-2">
            <div class="form-group">
              <label>Enter Weight</label>
              <input type="text" name="Weight" value="" class="form-control circle" required="" placeholder="in KG">
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-12 p-2">
            <div class="form-group">
              <label>Select Payment Method</label>
              <select class="form-control circle" name="PaymentsMethods" required="">
                <option value="OnlinePayments">Online Payments</option>
                <option value="CODPayments">Cash On Delivery</option>
              </select>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-12 p-2">
            <button class="form-control btn btn-success btn-block circle" type="submit" name="CalculateCharges">Calculate Charges</button>
          </div>
        </div>
      </form>
      <?php } ?>
  		</div>
  		<div class="col-lg-3 col-md-3 col-sm-3 col-12">
  			<img src="<?php echo $DOMAIN;?>/img/24kharido-Main-App-Screen.png" class="img-fluid">
  		</div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-12 p-3">
         <h6 class="bg-white text-black p-2 circle"><b>(A)</b> Weight/Handling Charges</h6>
      <table class="table table-striped">
        <thead class="bg-white circle">
          <tr>
            <th>Weights in KG</th>
            <th>Charges in Rs</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>0.1 to 2.5 KG</td>
            <td>Rs.10</td>
          </tr>
           <tr>
            <td>From 2.5KG to 5Kg</td>
            <td>Rs.15</td>
          </tr>
          <tr>
            <td>From 5Kg to 10Kg</td>
            <td>Rs.20</td>
          </tr>
          <tr>
            <td>From 10Kg to 15Kg</td>
            <td>Rs.25</td>
          </tr>
          <tr>
            <td>From 15Kg to 20Kg</td>
            <td>Rs.30</td>
          </tr>
          <tr>
            <td colspan="2"><span class="text-danger">Note:</span> Maximum Deliver Weight is 20KG.</td>
          </tr>
        </tbody>
      </table>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4 col-12 p-3">
        <h6 class="bg-white text-black p-2 circle"><b>(B)</b> Distance Charges</h6>
      <table class="table table-striped">
        <thead class="bg-white circle">
          <tr>
            <th>Charge Per Km</th>
            <th>Distance in Km</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Rs.7/km</td>
            <td>Upto 25Km</td>
          </tr>
           <tr>
            <td>Rs.9/km</td>
            <td>From 26Km to 50Km</td>
          </tr>
          <tr>
            <td>Rs.10/km</td>
            <td>After 51Km to 100Km</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-12 p-3">
        <h6 class="bg-white text-black p-2 circle">Payments methods</h6>
      <table class="table table-striped">
        <thead class="bg-white circle">
          <tr>
            <th>Payments Methods</th>
            <th>Charges on Methods</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Online Payments</td>
            <td><b>A</b> + <b>B</b> + 3%</td>
          </tr>
           <tr>
            <td>COD Payments</td>
            <td><b>A</b> + <b>B</b> + Rs.5</td>
          </tr>
           
        </tbody>
      </table>
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
