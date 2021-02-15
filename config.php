<?php 

//App Configurations
$APP_NAME = "24kharido";
$DOMAIN = "http://192.168.43.206/projects/24kharido";
$APP_DOMAIN = $DOMAIN."/app";
$ADMIN_DOMAIN = $DOMAIN."/admin";
$APP_PHONE = "8447572565";
$store_mail_id = "24kharido@gmail.com";
$SENDER_MAIL = "notification@24kharido.in";
$RECEIVER_MAIL = "24kharido@gmail.com";
$SMS_KEY = "KDNCSKJDBCJHBSAHYUASDG87WQEYGBDWEDWUBCG872EGBOHDBEWOCBXUODCB";
$STORE_ADDRESS = "Y6/37 2nd Floor, Sector 76, Near Police Station Sector 75, Faridabad Haryana -121004";

//DATABASE CONFIGURATION
$Host = "localhost";
$User = "root";
$Pass = "";
$DataBase = "24kharido";
$con = mysqli_connect($Host, $User, $Pass, $DataBase);
$Connection = $con;


//SMS GATEWAYS FOR sending sms or msg
function SMS($MSG, $PHONE){
 global $SMS_KEY;
 
    $curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk?authorization=$SMS_KEY&sender_id=KHARIDO&message=".urlencode("
    ---
    $MSG")."&language=english&route=p&numbers=".urlencode("$PHONE"),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
}

//IP_ADDRESS
function IP_ADDRESS() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}


//Get running url
function get_url() {
  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
         $url = "https://";
    else
         $url = "http://";
    // Append the host(domain name, ip) to the URL.
    $url.= $_SERVER['HTTP_HOST'];

    // Append the requested resource location to the URL
    $url.= $_SERVER['REQUEST_URI'];

    return $url;
}

// Device Type 
function DeviceType(){
  $deviceName="";
  $userAgent = $_SERVER["HTTP_USER_AGENT"];
  $devicesTypes = array(
        "Computer" => array("msie 10", "msie 9", "msie 8", "windows.*firefox", "windows.*chrome", "x11.*chrome", "x11.*firefox", "macintosh.*chrome", "macintosh.*firefox", "opera"),
        "Tablet"   => array("tablet", "android", "ipad", "tablet.*firefox"),
        "Mobile"   => array("mobile ", "android.*mobile", "iphone", "ipod", "opera mobi", "opera mini"),
        "Bot"      => array("googlebot", "mediapartners-google", "adsbot-google", "duckduckbot", "msnbot", "bingbot", "ask", "facebook", "yahoo", "addthis")
    );
  foreach($devicesTypes as $deviceType => $devices) {
        foreach($devices as $device) {
            if(preg_match("/" . $device . "/i", $userAgent)) {
                $deviceName = $deviceType;
            }
        }
    }
    return ucfirst($deviceName);
  }

//Send Mails 
function SendMail($Valid, $Subject, $Title, $CustomerMailId, $MAIL_MSG){
global $con;
global $SENDING_OTP;
global $store_mail_id;
global $SENDER_MAIL;
global $RECEIVER_MAIL;

//Mail Variables 
$EnableMail = $Valid;
$Subject = $Subject;
$Title = $Title;
$SendByMail = $SENDER_MAIL;
$ReplyToMail = $RECEIVER_MAIL;
$CustomerMailId = $CustomerMailId;
$MailingContent = $MAIL_MSG;


//Device Details
$ip_address = IP_ADDRESS();
$device_type = DeviceType();
date_default_timezone_set("Asia/Calcutta");
$date_time_c = date("D d M, Y h:m:s a");
$ipv6_n = php_uname('n');
$ipv6_p = php_uname('p');
$os = php_uname('s');
$OS_release = php_uname('r');
$OS_Version = php_uname('v');
$System_Info = php_uname('m');
$System_more_Info = $_SERVER['HTTP_USER_AGENT'];
$device_Details = "<b>Date Time:</b> $date_time_c<br><b>Ip-Address :</b> $ip_address<br><b>Device Type :</b> $device_type<br><b>Host Name :</b> $ipv6_n<br><b> System Information :</b> $System_more_Info";

if($EnableMail == "true"){

// Subject
$subject = "$Subject";

// Set Message
$message = "
<style>
@import url('https://fonts.googleapis.com/css2?family=Commissioner&display=swap');
  html,
body, table, tr, th, td, h1, h2, h3, h4, h5, h6, p, span, div, section, b {
    font-family: 'Commissioner', sans-serif !important;
    font-size: 11px !important;
    text-align: justify !important;
    background-color: #d6fcd673 !important;
}
</style>
<div style='text-shadow: 0px 0px 0.2px grey;background-color: #d6fcd673 !important; max-width:900px !important;margin: auto;'>
<img src='https://24kharido.in/img/MailTopBanner.png' style='width:100%;'>
<div style='padding: 2% !important;'>

<h3><b>$Title</b></h3>
$MailingContent
<br>
<p style='font-size: 9px !important;'>
<b style='font-size: 10px !important;'>Device Details:</b><br>$device_Details
</p>

<hr>
<p style='text-align:left !important;font-size:9.5px !important;'>
<img src='http://24kharido.in/app/img/24kharidorectangle.png' style='width:150px;'><br>
<b>Address :</b> Shop no 1, C-1511, Pipal Vali Gali, Sector 4, <br>Ballabgarh, Faridabad, Haryana 121004.<br>
<b>Call or Whatsapp :</b> +91-9871620117<br>
<b>Email-id :</b> 24kharido@gmail.com<br>
<b>Website :</b> 24kharido.in</p>
<p style='font-size: 9px !important;'>
<b>Note:</b> This is an auto generated email sent from 24kharido.in. If you find something incorrect in this mail or have any query then mail us at $ReplyToMail</p>
</div>
<a href='https://play.google.com/store/apps/details?id=com.gauravsinghigc.u24kharido'>
<img src='https://24kharido.in/img/DownloadMailButton.png' style='width: 100%;'>
</a>
<a href='https://24kharido.in/'>
<img src='https://24kharido.in/img/MailBottomBanner.png' style='width:100%;'>
</a>
</div>
";

// Set From: header
 $from =  "24kharido Alerts" . "<" . $SendByMail . ">";
 
// Email Headers
$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: ". $ReplyToMail . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

ini_set("sendmail_from", $store_mail_id); // for windows server
 mail($CustomerMailId, $subject, $message, $headers);
  }
}

//Save Data
function Save_DATA($tablename, $checkrows, array $tablerows, $auth)
{
  global $con;
  $Datatables = "";
  $TableValues = "";
  $data = $tablerows[0];
  $tablerows = $tablerows;
  $arraycount = count($tablerows);
  $mainarray = $arraycount - 1;
  $FocusedData = $_REQUEST["$data"];
  $cr_url = $_REQUEST['cr_url'];
    
    foreach ($tablerows as $key => $value) {
      if ($key == $mainarray) {
        $TableValues .= "'" . $_REQUEST["$value"] . "'";
      } else {
        $TableValues .= "'" . $_REQUEST["$value"] . "', ";
      }
    }

  foreach ($tablerows as $key => $value) {
    if ($key == $mainarray) {
      $Datatables .= "$value";
    } else {
      $Datatables .= "$value, ";
    }
  }
  
  if($checkrows != 0){
  $CheckData = "SELECT * FROM $tablename where $checkrows";
  $CheckDataQuery = mysqli_query($con, $CheckData);
  $CountData = mysqli_num_rows($CheckDataQuery);
  } else {
    $CountData = 0;
  }

  if ($CountData == 0) {
    $InsertNewData = "INSERT INTO $tablename ($Datatables) VALUES ($TableValues)";
    if ($auth == "0") {
    } elseif ($auth == "1") {
      die($InsertNewData);
    }
    $InsertNewDataQuery = mysqli_query($con, $InsertNewData);
    if ($InsertNewDataQuery == true) {
      header("location: $cr_url&msg=$FocusedData is Saved Successfully!");
    } else {
      header("location: $cr_url&err=Unable to save $FocusedData!");
    }
  } else {
    header("location: $cr_url&msg=$FocusedData is Already Exits!");
  }
}


//More Requirements
$ip_address = IP_ADDRESS();
$device_type = DeviceType();
date_default_timezone_set("Asia/Calcutta");
$date_time_c = date("D d M, Y h:m:s a");
$ipv6_n = php_uname('n');
$ipv6_p = php_uname('p');
$os = php_uname('s');
$OS_release = php_uname('r');
$OS_Version = php_uname('v');
$System_Info = php_uname('m');
$System_more_Info = $_SERVER['HTTP_USER_AGENT'];
$device_Details = "<p>
<b>Date Time:</b> $date_time_c<br>
<b>Ip-Address :</b> $ip_address<br>
<b>Device Type :</b> $device_type<br>
<b>Ipv6_N :</b> $ipv6_n<br>
<b>Tpv6_P :</b> $ipv6_p<br>
<b>OS :</b> $os<br>
<b>OS_RELEASE :</b> $OS_release<br>
<b>OS_VERSION :</b> $$OS_Version<br>
<b>System :</b> $System_Info<br>
<br>Host Name :</br> $ipv6_n<br>
<b>System Information :</b> $System_more_Info</p>";

?>
