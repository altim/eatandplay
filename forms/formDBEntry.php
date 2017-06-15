<?php  

	
$comingfrom = "sales@eatandplaycard.com";
 

//GET POST AND SESSION INFO

$buy_location = $_POST[ "destination"];

$buy_quantity = $_POST[ "quantity"];

$buy_firstname = $_POST[ "firstname"];

$buy_lastname = $_POST[ "lastname"];

$billingaddress = $_POST[ "address"];

$billingaddress2 = $_POST[ "address2"];

$billingcity = $_POST[ "city"];

$userProvince = $_POST[ "state"];

$buy_country = $_POST[ "country"];

$billingpcode = $_POST[ "zip"];

$telephone = $_POST[ "phone"];

$uEmail = $_POST[ "email"];

$promo =  strtoupper($_POST[ "promo-code"]);

$price = 25;



//VERIFY IF CANADIAN OR US
if ($buy_country == "CA") {
	$userProvince = $_POST[ "stateCanada"];
}
else if ($buy_country == "US") {
	$userProvince = $_POST[ "stateUS"];
}
else {
	$userProvince = "AB";
}


//VERIFY IF PROMOTION CODE HAS BEEN GIVEN
if ( $promo == "14EPTW20" || $promo == "14EAPC20" || $promo == "14EPFB20") {
	$price = 20;
}


$total_amount = $buy_quantity * $price;
$total_amount_text = "";
 
if($promo == "VFEAPC20" )
{
	$total_amount = $total_amount - ($total_amount * 0.2);
}

if($buy_country=="CA"){

	$total_amount=(float)($total_amount);			

}

$total_amount = number_format($total_amount,2);

$total_amount_text = $total_amount;




session_start();

$buy_cc_type = $_POST["cc-type"];

$noofcard = $_POST["cc-number"];

$firstnameoncard = $_POST["cc-name"];

$cc_expires_month = $_POST["cc-exp-month"];

$cc_expires_year = $_POST["cc-exp-year"];

$cvvofcard = $_POST["cc-code"];

$hide_no = "XXXX XXXX XXXX " . substr($noofcard,12);



//EVALUATE LOCATION -- Orlando by default...

$product_number = "EPCARDORL";

$voucher_file = "myvoucher.php";



if ($buy_location=="New York City")

{

  $product_number = "GLNYEAPC";

  $voucher_file = "nycvoucher.php";

}

//*********************************************

//*****SUBMIT THE TRANSACTION TO BEANSTREAM****

//*********************************************



//GENERATE ORDER NUMBER

$t=time();
$curdate = date("Ymd");
$order_number = $curdate . $t;
$_SESSION['order_number']=$order_number;



    //BEAN STREAM REQUIRED INFO

    $merchantID = '196850000';



    //REPLACE SPACES IN FIELDS

    $firstnameoncard = str_replace(" ","+",$firstnameoncard);
    $billingaddress = str_replace(" ","+",$billingaddress);
    $billingaddress2 = str_replace(" ","+",$billingaddress2);
    $billingcity = str_replace(" ","+",$billingcity);
    $billingpcode = str_replace(" ","+",$billingpcode);
	$cc_expires_year= substr($cc_expires_year,2);

	if($buy_country=="US"){
		if($userProvince==""){
			$userProvince="--";
		}
	}else{
		if($userProvince==""){
			$userProvince="--";
		}
	}

	if(strlen($cc_expires_month)<2){
		$cc_expires_month="0".cc_expires_month;
	}

        	//CONNECT TO DATABASE

			$con = mysql_connect("localhost","eatandpl_wp",",sV^=iiVE!*~");

			if (!$con)

			  {

			  die('Could not connect: ' . mysql_error());

			  }



			mysql_select_db("eatandpl_maindbeap", $con);



			//UPDATE TRANSACTION DB
			
			$query  = "INSERT INTO transactions (order_num,

											   fname,

											   lname,

											   address1,

											   address2,

											   city,

											   state,

											   country,

											   zip,

											   phone,

											   email,

											   destination,

											   quantity,

											   ship_option,

											   ship_fname,

											   ship_lname,

											   ship_address1,

											   ship_address2,

											   ship_city,

											   ship_state,

											   ship_country,

											   ship_zip,

											   ship_tranid,

											   purchase_tstamp) VALUES ('" . $order_number . "',

																		'" . $buy_firstname . "',

																		'" . $buy_lastname . "',

																		'" . $billingaddress . "',

																		'" . $billingaddress2 . "',

																		'" . $billingcity . "',

																		'" . $userProvince . "',

																		'" . $buy_country . "',

																		'" . $billingpcode . "',

																		'" . $telephone . "',

																		'" . $uEmail . "',

																		'" . $buy_location . "',

																		" . $buy_quantity . ",

																		'" . $ship_option . "',

																		'" . $ship_firstname . "',

																		'" . $ship_lastname . "',

																		'" . $billingaddress . "',

																		'" . $billingaddress2 . "',

																		'" . $billingcity . "',

																		'" . $userProvince . "',

																		'" . $ship_country . "',

																		'" . $billingpcode . "',

																		'" . $ship_tranid_list . "', CURRENT_TIMESTAMP)";



		  $result = mysql_query($query);

		  $con = mysql_close();






function getProvinceText($tmp)

{

    switch($tmp)

    {

      case "1":

       return "BC";

      case "2":

       return "AB";

      case "3":

       return "SK";

      case "4":

       return "MB";

      case "5":

       return "ON";

      case "7":

       return "NB"; 

      case "8":

       return "NS";

      case "9":

       return "PE";

      case "10":

       return "NL";

      case "11":

       return "NT";

      case "12":

       return "YT";

      case "13":

       return "NU";

      default:

       return "";

    }

}

?>