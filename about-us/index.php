<?php require '../config.php' ;?>
<!DOCTYPE html>
<htm style="background-image: linear-gradient(to right bottom, #caeff7, #1bff0029) !important;" l>

 <head>
  <title>About Us | <?php echo $APP_NAME;?></title>
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
<meta name="description" content="About 24kharido.in, shop e-gadgets, their monthly rations, groceries, fruit vegetables, and book custom delivery services.">
<meta name="keywords" content="24kharido, fresh fruits and vegetables  in Faridabad buy fruit vegetables in Faridabad, monthly rations offer, grocery ordering online, delivery solution in Faridabad, online shopping groceries, delivery and courier, 24kharido Faridabad, about">
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
  			<h3 class="bg-white p-3 circle">About <?php echo $APP_NAME;?></h3>
     <p class="mt-2 text-justify mb-1 p-2">
      <b><?php echo $APP_NAME;?>.in</b> was founded in October 2020 out of a need to give B2C, C2C Businesses a new way to reach their customers locally and where services are activated.
      <?php echo $APP_NAME;?>.in helps in delivery your requirements or needs to your home from local stores, markets, and also from your favorite store by requesting a custom order from us. At
      <?php echo $APP_NAME;?> you get what you need in just 24hr.
      <br><br>
      <?php echo $APP_NAME;?>.in gives a solution to customers and local businesses to interact with each other. At <?php echo $APP_NAME;?>.in, customers or a person buy and sell anything to a
      person,
      business and needy person locally and without in contact with them. They have to place order of buy or sell via our <?php echo $APP_NAME;?>.in. <?php echo $APP_NAME;?>.in team verify it and
      deliver it to the order destination within 24 hours.
     </p>
     <h3 class="bg-white p-3 circle">Rations & Groceries</h3>
      <p class="text-justify p-2"><?php echo $APP_NAME;?> offers monthly ration pack that helps customers purchase their monthly rations at great prices and with cashback offers.<br><br>
       At <?php echo $APP_NAME;?>.in, customers buy/sell/order/get quotation of everything of their choice and requirements. They don’t need to leave their homes, comfort
       and safety.
       <?php echo $APP_NAME;?>.in
       delivering your order to its destination locally within 24 hours.</p>
      <a href="" class="bg-info text-white p-3 circle">Get Quotations</a>
      <a href="" class="bg-success text-white p-3 circle">Have an Query?</a>
  		</div>
  		<div class="col-lg-3 col-md-3 col-sm-3 col-12">
  			<img src="<?php echo $DOMAIN;?>/img/24kharido-Main-App-Screen.png" class="img-fluid">
  		</div>

  		<div class="col-lg-12 p-3">
  			<h4 class="bg-white p-3 circle">What <?php echo $APP_NAME;?>.in Does :</h4>
     <p class="p-2">
      <b>○</b> At <?php echo $APP_NAME;?>.in, customers buy/sell everything of their choice and requirements. They don’t need to leave their homes, comfort and safety. <?php echo $APP_NAME;?>.in
      delivering your order to its destination locally within 24 hours.
     </p>
     <p class="p-2">
      <b>○</b>
      At <?php echo $APP_NAME;?>.in, Customers create their own orders too, named as Custom Orders. For Custom Orders, customers have to fill in product details, store information (Optional), Approx
      price of that item (Optional). When Custom Orders are placed, they get a call from <?php echo $APP_NAME;?>.in for your order and price confirmation. After confirmation we will deliver it within
      24 Hours.
     </p>
     <p class="p-2">
      <b>○</b>
      At <?php echo $APP_NAME;?>.in, customers sell their old and used items, products, electronics, and many more items. They don’t need to contact the customer (Buyer of used time) we make deals
      for
      you and pick posted item from your home and deliver it to buyer within 24hrs. Amounts will be transferred via Paytm, Google Pay, Phonepay, Amazon Pay, UPI and Direct Bank Transfer to customer
      accounts after delivery means within in 24hours.
     </p>
     <p class="p-2">
      <b>○</b>
      At <?php echo $APP_NAME;?>.in, customers pay their bills, recharge, buy life/automobile insurances, and do many more exciting things.
     </p>
     <hr>
     <h4 class="bg-white p-3 circle">
      Why Shop at <?php echo $APP_NAME;?>.in:</h4>
     </p>
     <p class="p-2">
      <b>○</b>
      At <?php echo $APP_NAME;?>.in, Customer earns <?php echo $APP_NAME;?> Funds every time on every purchase, <?php echo $APP_NAME;?> Funds are used for Bill/Recharge Payments and Shopping at
      <?php echo $APP_NAME;?>.in, and they also transfer that into their wallets (Paytm) and Bank Accounts as preferred by customers.
     </p>
     <p class="p-2">
      <b>○</b>
      <?php echo $APP_NAME;?> Funds are for direct use. It does not contain points into the amount ration, Like if you Purchase a product then you earn 10% (upto Rs.300) of the purchased amount as
      <?php echo $APP_NAME;?> funds. For example, if a customer purchased a Earphone of Rs.299 then it earn Rs.20 as <?php echo $APP_NAME;?> Funds. Customers can use whole funds for next purchased or
      doing bill payments/recharges.
     </p>
     <h4><?php echo $APP_NAME;?> Refer & Earn</h4>
     <p class="p-2"><?php echo $APP_NAME;?>.in have a Referred Program where you can earn upto Rs.500 per refer as <?php echo $APP_NAME;?> Funds, which is used for shopping at <?php echo $APP_NAME;?>, recharge,
      and many more things. </p>

      <h4 class="bg-white p-3 circle">
      What you buy on <?php echo $APP_NAME;?>.in :</h4>

     <p class="p-2"><b>○ Mobiles Phones :</b> Budget Phones, Smartphones, Keypad Phones, Feature Phones and much more.</p>
     <p class="p-2"><b>○ Accessories :</b> earphones (wired, bluetooth), headphones (bluetooth, wired), earbugs, Cables, charges, Backcovers, Cases, Powerbanks, Mouse, Keyboard, Tempared Glass (2D, 3D, 4D, 5D,
      6D
      upto Current), Selfie Sticks, Tripods, laptop & mobiles skins, pin convertors, Audio & Video cables, laptop sleeve.</p>
     <p class="p-2"><b>○
       Audio & Speakers :</b> USB speakers (3W, 5W upto 100W), Bluetooth Speakers, Home Theaters (All Types like 2.1, 3.1, 4.5, 5.1), DJ System, Audio Amplifies, only speakers.</p>
     <p class="p-2"><b>○
       Home Accessories :</b> Pochas, jhadoo, clothes clips, curtains, carpets, chairs, foldable plastic tables, computer tables, dinner tables, curtain rods, rails, home interiors, home decoratives,
      emergency lights (rechargeable).</p>
     <p class="p-2"><b>○
       Kitchen Accessories :</b> Dinner set, juicer, mixers, grinders, knife (wooden, plastic, metal), exhaust fans.</p>
     <p class="p-2"><b>○
       Men’s Fashion :</b> T-Shirts (V-neck, polo), lowers, shoes (sports, loffers), hats, caps, watches, belts, Sunglasses, loffer socks, bags.</p>
     <p class="p-2"><b>○
       Groceries & Staples :</b> Groceries & Staples, Personal Care, Biscuits, Snacks & Chips, Noodles and Instant Foods, Beverages, Dairy Products, Baby Care, Ration Packs.</p>
     <p class="p-2"><b>○
       Saloon & Hair Care :</b> Face care, Hair care, Face Cream, Cutting Clothes, Razor, Blades, Lotions, Foam, Shaving Cream, Hair Re-Bonding, Scissors, Cutting Tools and all saloon items.</p>
     <p class="p-2"><b>○
       Custom Orders :</b> Custom Order are order where customer send us a request to purchase an item that is not available on 24khariod.in, customer interested in buying an item from their
      favourite
      stores, an item that requires customisation.</p>

     <p class="p-2">
      <code>NOTE :</code>
     <h5>Currently <?php echo $APP_NAME;?>.in NOT DELIVER ALCOHOL, CIGRATES, GUTKA in custom orders currently. if something happens like that or you find any of our executive deliver such things then
      email us at support@<?php echo $APP_NAME;?>.in.</h5>
     </p>
     <h4 class="bg-white p-3 circle">
      <?php echo $APP_NAME;?> Active Cities :</h4>
     <p class="p-2">
      <?php echo $APP_NAME;?>.in currently active in Faridabad, Haryana. Service area in Faridabad;<br>

      <b>Zone A –</b> Sector 1 to Sector 12.<br>
      <b>Zone B1 –</b> Sector 76, Sector 79, Sector 78, PF BLOCK, S BLOCK, PAHLADPUR, Badoli, Kheri Khurd,<br>
      <b>Zone B2 ­–</b> Sector 22, Sector 23, Sector 24, Sector 25, Rajiv Gandhi Colony,<br>
      <b>Zone C –</b> Sector 13 to Sector 16, Sector 29, Bisva Colony,<br>
      <b>Zone C1 –</b> Sector 18, Sector 81, Sector 82, Sector 85, Sector 86, Sector 88, NeharPAR, Kheri Pull.<br>
      <b>Zone C2 –</b> Sector 20 (A-B), Sector 21(A-B), NIT 1, 2, 3, 4, 5. Old Faridabad, Badhkal More, Industrail Area.<br>
      <b>Zone D –</b> Sector 28, Sector 31, Sector 32, Kartik Vihar.<br>
     <p class="p-2">
     <h4 class="bg-white p-3 circle">
      Upcoming cities are:</h4>

     <p class="p-2">

      ○ Gurgaon<br>
      ○ Noida<br>
      ○ Delhi<br>
     </p>
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
