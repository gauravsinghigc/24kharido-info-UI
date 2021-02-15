<?php require '../config.php' ;?>
<!DOCTYPE html>
<htm style="background-image: linear-gradient(to right bottom, #caeff7, #1bff0029) !important;" l>

 <head>
  <title>Order Online | <?php echo $APP_NAME;?></title>
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
<meta name="description" content="order online, At 24kharido.in, shop e-gadgets, monthly rations, groceries, fruit vegetables, and book custom delivery services.">
<meta name="keywords" content="order online, 24kharido, fresh fruits and vegetables  in Faridabad buy fruit vegetables in Faridabad, monthly rations offer, grocery ordering online, delivery solution in Faridabad, online shopping groceries, delivery and courier, 24kharido Faridabad.">
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
  			<h3 class="bg-white p-3 circle">Order Online</h3>
        <p class="p-2">Now you can order anything that you need and it will be at your door within 24hr.</p>
      <p class="p-2 text-justify"><b>○ Mobiles Phones :</b> Budget Phones, Smartphones, Keypad Phones, Feature Phones and much more.</p>
     <p class="p-2 text-justify"><b>○ Accessories :</b> earphones (wired, bluetooth), headphones (bluetooth, wired), earbugs, Cables, charges, Backcovers, Cases, Powerbanks, Mouse, Keyboard, Tempared Glass (2D, 3D, 4D, 5D,
      6D
      upto Current), Selfie Sticks, Tripods, laptop & mobiles skins, pin convertors, Audio & Video cables, laptop sleeve.</p>
     <p class="p-2 text-justify"><b>○
       Audio & Speakers :</b> USB speakers (3W, 5W upto 100W), Bluetooth Speakers, Home Theaters (All Types like 2.1, 3.1, 4.5, 5.1), DJ System, Audio Amplifies, only speakers.</p>
     <p class="p-2 text-justify"><b>○
       Home Accessories :</b> Pochas, jhadoo, clothes clips, curtains, carpets, chairs, foldable plastic tables, computer tables, dinner tables, curtain rods, rails, home interiors, home decoratives,
      emergency lights (rechargeable).</p>
     <p class="p-2 text-justify"><b>○
       Kitchen Accessories :</b> Dinner set, juicer, mixers, grinders, knife (wooden, plastic, metal), exhaust fans.</p>
     <p class="p-2 text-justify"><b>○
       Men’s Fashion :</b> T-Shirts (V-neck, polo), lowers, shoes (sports, loffers), hats, caps, watches, belts, Sunglasses, loffer socks, bags.</p>
     <p class="p-2 text-justify"><b>○
       Groceries & Staples :</b> Groceries & Staples, Personal Care, Biscuits, Snacks & Chips, Noodles and Instant Foods, Beverages, Dairy Products, Baby Care, Ration Packs.</p>
     <p class="p-2 text-justify"><b>○
       Saloon & Hair Care :</b> Face care, Hair care, Face Cream, Cutting Clothes, Razor, Blades, Lotions, Foam, Shaving Cream, Hair Re-Bonding, Scissors, Cutting Tools and all saloon items.</p>
     <p class="p-2 text-justify"><b>○
       Custom Orders :</b> Custom Order are order where customer send us a request to purchase an item that is not available on 24khariod.in, customer interested in buying an item from their
      favourite
      stores, an item that requires customisation.</p>

     <p class="p-2 text-justify">
      <code>NOTE :</code>
     <h5>Currently <?php echo $APP_NAME;?>.in NOT DELIVER ALCOHOL, CIGRATES, GUTKA in custom orders currently. if something happens like that or you find any of our executive deliver such things then
      email us at support@<?php echo $APP_NAME;?>.in.</h5>
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
