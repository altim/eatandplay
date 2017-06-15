<?php  
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
 
//	require 'PHPMailer-master/PHPMailerAutoload.php';
 

$comingfrom = "sales@eatandplaycard.com";
 

//GET POST AND SESSION INFO

$sendcardby = $_POST[ "sendcardby"];
$ship_option = $_POST[ "sendcardby"];

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

$promo =  $_POST[ "promo-code"];

$price = 25;

foreach ($_POST as $key => $value) {
    error_log("Key: ".$key." Value: ".$value."");
}


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

error_log("total_amount_text: ".$total_amount_text );
error_log("total_amount: ".$total_amount );


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

	error_log("total_amount: ".$total_amount);
	
	$tranString = "requestType=BACKEND&merchant_id=" . $merchantID . "&trnOrderNumber=" . $order_number . "&trnCardOwner=" . $firstnameoncard . "&trnCardNumber=" . $noofcard . "&trnExpMonth=" . $cc_expires_month . "&trnExpYear=" . $cc_expires_year . "&trnCardCvd=" . $cvvofcard . "&trnAmount=" . $total_amount . "&ordName=" . $firstnameoncard . "&ordEmailAddress=" . $uEmail . "&ordPhoneNumber=" . $telephone . "&ordAddress1=" . $billingaddress . "&ordAddress2=" . $billingaddress2 . "&ordCity=" . $billingcity . "&ordProvince=" . $userProvince . "&ordPostalCode=" . $billingpcode . "&ordCountry=".$buy_country. "&ref1=".$product_number."";


    //BeanStream CURL CODE

	// Initialize curl
	$ch = curl_init();

	curl_setopt( $ch, CURLOPT_POST, 1 );
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	// Instruct curl to suppress the output from Beanstream, and to directly return the transfer instead. (Output will be stored in $txResult.)
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt( $ch, CURLOPT_URL, "https://www.beanstream.com/scripts/process_transaction.asp" );
	curl_setopt( $ch, CURLOPT_POSTFIELDS,$tranString);

	$txResult = curl_exec( $ch );
	curl_close( $ch );

    //END BeanStream CURL CODE



    //CHECK IF APPROVED OR NOT -- APPROVAL CODE IS FIRST PIECE OF DATA

    $pos = stripos($txResult,"&");
    $rtn_cd = substr($txResult,0,$pos);
    $errorMessage = "SUCCESS";
	

	
      if ($rtn_cd == "trnApproved=1" )
      {

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
	  

			//Old way to show sucess message
		    //$headerUrl = "Location: http://www.eatandplaycard.com/vpayment_success.php";
			
			// AJax way to do stuff
			echo "work";

		   
			$to = "sales@eatandplaycard.com ,  larryraubach@hotmail.com";
			$subject = "Transaction Successful : New Card Order";
			$full_message = "<strong>CC_First_Name:</strong> " . $buy_firstname . " " . $buy_lastname . "<br/>" .
							"<strong>CC_Address_Line1: </strong>" . $billingaddress . "<br/>" .
							"<strong>CC_Address_Line2: </strong>" . $billingaddress2 . "<br/>" .
							"<strong>CC_City: </strong>" . $billingcity . "<br/>" .
							"<strong>CC_Province: </strong>" . $userProvince . "<br/>" .
							"<strong>CC_Postal_Code: </strong>" . $billingpcode . "<br/>" .
							"<strong>Email Address of Order: </strong>" . $uEmail . "<br/>" .
							"<strong>Destination:</strong> " . $buy_location . "<br/>" .
							"<strong>Phone NUM of Order: </strong>" . $buy_phone . "<br/>" .
							"<strong>Transaction_Amount: </strong>$" . $total_amount_text . "<br/>" .
							"<strong>Order Number: </strong>" . $order_number;
			
			/*
			$headers = "From: $comingfrom";

			mail($to,$subject,$full_message,$headers);
			*/
			 /*
			$mail = new PHPMailer;
			
			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'srv1.existo.ca';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'sales@eatandplaycard.com';                 // SMTP username
			$mail->Password = 'wrn!G;gG1?VR';                           // SMTP password
			$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 465;                                    // TCP port to connect to
			 
			$mail->From = 'eatandplaycard@existo.ca';
			$mail->FromName = 'Eat And Play Card Sales';
			$mail->addAddress($to, 'Eat And Play Card Sales');     // Add a recipient
			$mail->addBCC('eatandplaycard@nouveauexisto.ca');
			$mail->addReplyTo('sales@eatandplaycard.com', 'Eat And Play Card Sales');

			$mail->isHTML(true);                                  // Set email format to HTML
			
			$mail->Subject = 'Transaction Successful : New Card Order';
			$mail->Body    = $full_message;			
			
			if(!$mail->send()) {
			} else {
			}
			*/
			$to = "sales@eatandplaycard.com";
			$curl = curl_init();
			curl_setopt ($curl, CURLOPT_URL, "http://nouveauexisto.ca/eatAndPlayCard_form/formEmailSender.php?sendType=signer&toEmail=".urlencode($to)."&fullMessage=".urlencode($full_message)."");
			curl_exec ($curl);
			curl_close ($curl);
			

		//	$to = $uEmail;
 
				$subject = "Transaction Successful: Your Voucher";

				$full_message = "<span style='font-family:tahoma;font-size:12px;color:#000000;'>Please do not respond to this email.<br /><br />" .
								"Thank you for your Eat and Play Card order. This email is a confirmation of your purchase. Please read it carefully and be sure to print your Voucher.<br /><br />" .
								"<b>Order Confirmation</b><br /><br />" .
								"<b>Quantity:</b>". $buy_quantity ."<br />" .
								"<b>Product:</b> Eat and Play Card" . $buy_location . "<br />" .
								"<b>Product Number:</b>" . $product_number. "<br />" .
								"<b>Total: $</b> $total_amount USD<br />" .
								"<b>Status:</b> Confirmed<br /><br />" .
								"<a href='http://www.eatandplaycard.com/" . $voucher_file . "?voucherid=" .$order_number."'>Click here to download your voucher</a><br /><br /><br />" .
								"<b>Order Details</b><br /><br />" .
								"<b>Name:</b> " . $buy_firstname . " " . $buy_lastname . "<br />" .
								"<b>Email:</b> " . $uEmail . "<br /><br /><br/>" .
								"<b>Date of Order:</b> " . date("Y-m-d") . "<br />" .
								"<b>Credit Card Number:</b> " . $hide_no . "<br /><br />" .
								"<b>Don't forget to print your Voucher.</b> You MUST print your Voucher and present it in " . $buy_location . " to receive your Eat and Play Card. <br /><br />" .
								"Thank you for your business. Have a wonderful time in " . $buy_location. ".<br /><br />" .
								"<b>The Team at Eat and Play Card</b></span><br /><br />";


			// To send HTML mail, the Content-type header must be set
			/*
			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: sales@eatandplaycard.com' . "\r\n";


		
			
			$mailClient = new PHPMailer;
			 

			 
			 
			 
			$mailClient->isSMTP();                                      // Set mailer to use SMTP
			$mailClient->Host = 'srv1.existo.ca';  // Specify main and backup SMTP servers
			$mailClient->SMTPAuth = true;                               // Enable SMTP authentication
			$mailClient->Username = 'sales@eatandplaycard.com';                 // SMTP username
			$mailClient->Password = 'wrn!G;gG1?VR';                           // SMTP password
			$mailClient->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
			$mailClient->Port = 465;                                    // TCP port to connect to
			
			$mailClient->From = 'eatandplaycard@existo.ca';
			$mailClient->FromName = 'Eat And Play Card Sales';
			$mailClient->addAddress($uEmail, $buy_firstname . ' ' . $buy_lastname);     // Add a recipient
			$mailClient->addReplyTo('sales@eatandplaycard.com', 'Eat And Play Card Sales');
			$mail->addBCC('larry@eatandplaycard.com');
			$mail->addBCC('chris@eatandplaycard.com');
			$mail->addBCC('larryraubach@hotmail.com');
			$mail->addBCC('monitoring@existo.ca');			
			$mail->addBCC('eatandplaycard@nouveauexisto.ca');
			$mailClient->isHTML(true);                                  // Set email format to HTML
			
			$mailClient->Subject = $subject;
			$mailClient->Body    = $full_message;			
			
			if(!$mailClient->send()) {
			} else {
			}
			*/
			$toName = $buy_firstname.' '.$buy_lastname;
			
			$curl = curl_init();
			curl_setopt ($curl, CURLOPT_URL, "http://nouveauexisto.ca/eatAndPlayCard_form/formEmailSender.php?sendType=teamEatAndPlay&toEmail=".urlencode($uEmail)."&toName=".urlencode($toName)."&sendcardby=".urlencode($sendcardby)."&fullMessage=".urlencode($full_message)."");
			curl_exec ($curl);
			curl_close ($curl);	

      }

    else

      {

 

		  //GET THE BEANSTREAM ERROR MESSAGE
		  
		  //Get &messageText
		   $pos1 = stripos($txResult,"&messageText");
		   $pos2 = stripos($txResult,"&trnOrderNumber");
		   $errorMessage = substr($txResult,($pos1+13),($pos2-$pos1));
		   $errorMessage = str_replace("&trnOrderNumb","", $errorMessage);
			
			
		   //Old way to show error message
		   //$headerUrl = "Location: http://www.eatandplaycard.com/vpayment_nosuccess.php?errorMessage=" . $errorMessage;
		  
		   // AJax way to do stuff
		   echo urldecode($errorMessage) ;
		  

      }





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