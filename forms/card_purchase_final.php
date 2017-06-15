<?php
	
require 'PHPMailer-master/PHPMailerAutoload.php';

$comingfrom = "sales@eatandplaycard.com";
//GET POST AND SESSION INFO

$buy_location = $_POST[ "buy_location"];
$buy_quantity = $_POST[ "buy_quantity"];
$ship_option = $_POST[ "ship_option"];

if($ship_option=="email_voucher")
{
	$buy_firstname = $_POST[ "buy_firstname"];
	$buy_lastname = $_POST[ "buy_lastname"];

	$billingaddress = $_POST[ "buy_address1"];
	$billingaddress2 = $_POST[ "buy_address2"];
	$billingcity = $_POST[ "buy_city"];
	$userProvince = $_POST[ "buy_state"];
	$buy_country = $_POST[ "buy_country"];
	$billingpcode = $_POST[ "buy_zip"];
	$telephone = $_POST[ "buy_phone"];
	$uEmail = $_POST[ "buy_email"];
	$total_amount = $_POST[ "total_amount"];
	$total_amount_text = $_POST[ "total_amount_text"];
}else{
	$buy_firstname = $_POST[ "buy_firstname"];
	$buy_lastname = $_POST[ "buy_lastname"];

	$telephone = $_POST[ "buy_phone"];
	$uEmail = $_POST[ "buy_email"];
	$ship_to_billing = $_POST[ "ship_to_billing"];
	$ship_firstname = $_POST[ "ship_firstname"];
	$buy_country = $_POST[ "buy_country"];
	$ship_lastname = $_POST[ "ship_lastname"];
	$billingaddress = $_POST[ "ship_address1"];
	$billingaddress2 = $_POST[ "ship_address2"];
	$billingcity = $_POST[ "ship_city"];
	$userProvince = $_POST[ "buy_state"];
	$ship_country = $_POST[ "ship_country"];
	$billingpcode = $_POST[ "ship_zip"];
	$total_amount = $_POST[ "total_amount"];
	$total_amount_text = $_POST[ "total_amount_text"];
}

session_start();
$buy_cc_type = $_SESSION["buy_cc_type"];
$noofcard = $_SESSION["buy_cc_num"];
$firstnameoncard = $_SESSION["buy_cc_nameoncard"];
$cc_expires_month = $_SESSION["buy_cc_expmonth"];
$cc_expires_year = $_SESSION["buy_cc_expyear"];
$cvvofcard = $_SESSION["buy_cc_cvv"];

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

//HIDE CREDIT CARD NUMBER
$hide_no = "XXXX XXXX XXXX " . substr($noofcard,12);

//CALCULATE TOTAL PRICE (25 * QUANTITY)


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

    //$tranString = "requestType=BACKEND&merchant_id=" . $merchantID . "&trnOrderNumber=" . $order_number . "&trnCardOwner=" . $firstnameoncard . "&trnCardNumber=" . $noofcard . "&trnExpMonth=" . $cc_expires_month . "&trnExpYear=" . $cc_expires_year . "&trnCardCvd=" . $cvvofcard . "&trnAmount=" . $total_amount . "&ordName=" . $firstnameoncard . "&ordEmailAddress=" . $uEmail . "&ordPhoneNumber=" . $telephone . "&ordAddress1=" . $billingaddress . "&ordAddress2=" . $billingaddress2 . "&ordCity=" . $billingcity . "&ordProvince=" . $userProvince . "&ordPostalCode=" . $billingpcode . "&ordCountry=".$buy_country."";
	//ADDING the ref1 parameter to know which product code was purchased.
	$tranString = "requestType=BACKEND&merchant_id=" . $merchantID . "&trnOrderNumber=" . $order_number . "&trnCardOwner=" . $firstnameoncard . "&trnCardNumber=" . $noofcard . "&trnExpMonth=" . $cc_expires_month . "&trnExpYear=" . $cc_expires_year . "&trnCardCvd=" . $cvvofcard . "&trnAmount=" . $total_amount . "&ordName=" . $firstnameoncard . "&ordEmailAddress=" . $uEmail . "&ordPhoneNumber=" . $telephone . "&ordAddress1=" . $billingaddress . "&ordAddress2=" . $billingaddress2 . "&ordCity=" . $billingcity . "&ordProvince=" . $userProvince . "&ordPostalCode=" . $billingpcode . "&ordCountry=".$buy_country. "&ref1=".$product_number."";


    //BeanStream CURL CODE

	// Initialize curl
	$ch = curl_init();

	// Get curl to POST
	curl_setopt( $ch, CURLOPT_POST, 1 );
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	// Instruct curl to suppress the output from Beanstream, and to directly return the transfer instead. (Output will be stored in $txResult.)
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );

	// This is the location of the Beanstream payment gateway
	curl_setopt( $ch, CURLOPT_URL, "https://www.beanstream.com/scripts/process_transaction.asp" );

	// These are the transaction parameters that we will POST
	//curl_setopt( $ch, CURLOPT_POSTFIELDS,"requestType=BACKEND&merchant_id=196850000&trnCardOwner=Paul+Randal&trnCardNumber=5194930004875020&trnExpMonth=10&trnExpYear=10&trnOrderNumber=2251&trnAmount=10.00&ordEmailAddress=prandal@mydomain.net&ordName=Paul+Randal&ordPhoneNumber=9999999&ordAddress1=1045+Main+Street&ordAddress2=&ordCity=Vancouver&ordProvince=BC&ordPostalCode=V8R+1J6&ordCountry=CA");
	curl_setopt( $ch, CURLOPT_POSTFIELDS,$tranString);

	/*
	curl_setopt( $ch, CURLOPT_POSTFIELDS,"requestType=BACKEND&merchant_id=196850000
	                                                         &trnCardOwner=Paul+Randal
	                                                         &trnCardNumber=5194930004875020
	                                                         &trnExpMonth=01
	                                                         &trnExpYear=05
	                                                         &trnOrderNumber=2232
	                                                         &trnAmount=10.00
	                                                         &ordEmailAddress=prandal@mydomain.net
	                                                         &ordName=Paul+Randal
	                                                         &ordPhoneNumber=9999999
	                                                         &ordAddress1=1045+Main+Street
	                                                         &ordAddress2=
	                                                         &ordCity=Vancouver
	                                                         &ordProvince=BC
	                                                         &ordPostalCode=V8R+1J6
	                                                         &ordCountry=CA");
    */
	// Now POST the transaction. $txResult will contain the Beanstream response
	$txResult = curl_exec( $ch );
	//echo "Result:<BR>";
	//echo $txResult;
	curl_close( $ch );
    //END BeanStream CURL CODE

    //CHECK IF APPROVED OR NOT -- APPROVAL CODE IS FIRST PIECE OF DATA
    $pos = stripos($txResult,"&");
    $rtn_cd = substr($txResult,0,$pos);
    $errorMessage = "SUCCESS";
    
/*	if ($_SERVER['REMOTE_ADDR'] == '206.248.137.174')
	{
		$rtn_cd == "trnApproved=1";
	}
 */

    if ($rtn_cd=="trnApproved=1" )
      {
        //IF APPLICCABLE SEND ORDER TO SHIPWIRE
        if($ship_option=="physical_voucher")
         {
		 	$billingaddress = str_replace("+"," ",$billingaddress);
			$billingaddress2 = str_replace("+"," ",$billingaddress2);
			$billingcity = str_replace("+"," ",$billingcity);
			$billingpcode = str_replace("+"," ",$billingpcode);
          include("shipwire_interface.php");
         }
	 
/*	if ($_SERVER['REMOTE_ADDR'] == '206.248.137.174')
	{
		$ship_error_list = "";
	}
 */
        //IF NO ERRORS FROM SHIPWIRE
        if($ship_error_list=="")
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

		  //echo "THE QUERY: " . $query;
		  $result = mysql_query($query);
		  $con = mysql_close();

		  //$headerUrl = "Location: https://www.eatandplaycard.com.ca/vpayment_success.php?id1=" . $photoId1 . "&id2=" . $photoId2 . "&id3=" . $photoId3;
		  $headerUrl = "Location: http://www.eatandplaycard.com/vpayment_success.php";
		  //

		  //SEND EMAIL TO EATANDPLAY OFFICE
		   //$comingfrom = "Eat And Play Card";
			$to = "sales@eatandplaycard.com";
			$subject = "Transaction Successful : New Card Order";
			$full_message = "CC_First_Name: " . $buy_firstname . " " . $buy_lastname . "\n" .
							"CC_Address_Line1: " . $billingaddress . "\n" .
							"CC_Address_Line2: " . $billingaddress2 . "\n" .
							"CC_City: " . $billingcity . "\n" .
							"CC_Province: " . $userProvince . "\n" .
							"CC_Postal_Code: " . $billingpcode . "\n" .
							"Email Address of Order: " . $uEmail . "\n\n" .
							"Destination: " . $buy_location . "\n\n" .
							"Phone NUM of Order: " . $buy_phone . "\n" .
							"Transaction_Amount: $" . $total_amount_text . "\n" .
							"Order Number: " . $order_number;
				
			$mail = new PHPMailer;
			 
			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'srv1.existo.ca';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'sales@eatandplaycard.com';                 // SMTP username
			$mail->Password = 'wrn!G;gG1?VR';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to
			 
			$mail->From = 'sales@eatandplaycard.com';
			$mail->FromName = 'Eat And Play Card Sales';
			$mail->addAddress($to, 'Eat And Play Card Sales');     // Add a recipient
			$mail->addReplyTo('sales@eatandplaycard.com', 'Eat And Play Card Sales');

			$mail->isHTML(false);                                  // Set email format to HTML
			
			$mail->Subject = 'Transaction Successful : New Card Order';
			$mail->Body    = $full_message;			
			
			if(!$mail->send()) {
			} else {
			}
			



		//	$to = $uEmail;

			if ($ship_option == "email_voucher")
			 {
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
			  }
			else
			  {
						$subject = "Transaction Successful: Email Confirmation";
						$full_message = "<span style='font-family:tahoma;font-size:12px;color:#000000;'>Please do not respond to this email.<br /><br />" .
										"Thank you for your Eat and Play Card order.  This email is a confirmation of your purchase. <br /><br />" .
										"<b>Order Confirmation</b><br /><br />" .
										"<b>Quantity:</b>". $buy_quantity ."<br />" .
										"<b>Product:</b> Eat and Play Card" . $buy_location . "<br />" .
										"<b>Product Number:</b>" . $product_number. "<br />" .
										"<b>Total: $</b> $total_amount USD<br />" .
										"<b>Status:</b> Confirmed<br /><br /><br />" .
										"<b>Order Details</b><br /><br />" .
										"<b>Name:</b> " . $buy_firstname . " " . $buy_lastname . "<br />" .
										"<b>Date of Order:</b> " . date("Y-m-d") . "<br />" .
										"<b>Credit Card Number:</b> " . $hide_no . "<br />" .
										"<b>Ship To:</b> " . $billingaddress . " " . $billingaddress2 . " " . $billingcity . ", " . $userProvince . "  " . $billingpcode . " " . $ship_country . "<br />" .
										"<b>Phone:</b> " . $telephone . "<br />" .
										"<b>Email:</b> " . $uEmail . "<br /><br /><br/>" .
										"<b>Delivery Information</b><br /><br />" .
										"Shipping is via USPS. Your Eat and Play Card should arrive within 10 business days. Further emails will follow from our warehouse containing important shipping information including a tracking number.<br /><br />" .
										"Thank you for your business. Have a wonderful time in " . $buy_location. ".<br /><br />" .
										"<b>The Team at Eat and Play Card</b></span><br /><br />";
										
			  }



			
			$mailClient = new PHPMailer;
			
			$mailClient->isSMTP();                                      // Set mailer to use SMTP
			$mailClient->Host = 'srv1.existo.ca';  // Specify main and backup SMTP servers
			$mailClient->SMTPAuth = true;                               // Enable SMTP authentication
			$mailClient->Username = 'sales@eatandplaycard.com';                 // SMTP username
			$mailClient->Password = 'wrn!G;gG1?VR';                           // SMTP password
			$mailClient->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mailClient->Port = 587;                                    // TCP port to connect to
			
			$mailClient->From = 'sales@eatandplaycard.com';
			$mailClient->FromName = 'Eat And Play Card Sales';
			$mailClient->addAddress($uEmail, $buy_firstname . ' ' . $buy_lastname);     // Add a recipient
			$mailClient->addReplyTo('sales@eatandplaycard.com', 'Eat And Play Card Sales');
			$mail->addBCC('larry@eatandplaycard.com');
			$mail->addBCC('chris@eatandplaycard.com');
			$mail->addBCC('monitoring@existo.ca');

			$mailClient->isHTML(false);                                  // Set email format to HTML
			
			$mailClient->Subject = $subject;
			$mailClient->Body    = $full_message;			
			
			if(!$mailClient->send()) {
			} else {
			}
			
			 

			mail($uEmail,$subject,$full_message,$headers);
			mail('monitoring@existo.ca',$subject,$full_message,$headers);
			mail('chris@eatandplaycard.com',$subject,$full_message,$headers);
			mail('larry@eatandplaycard.com',$subject,$full_message,$headers);
	     }
	    else
	     {
	       //GET THE SHIPWIRE ERROR MESSAGE
	       $headerUrl = "Location: http://www.eatandplaycard.com/vpayment_nosuccess.php?errorMessage=" . $ship_error_list;
	     }
  
      }
    else
      {
      //GET THE BEANSTREAM ERROR MESSAGE
      //Get &messageText
      $pos1 = stripos($txResult,"&messageText");
      //Get &trnOrderNumber
      $pos2 = stripos($txResult,"&trnOrderNumber");
      $errorMessage = substr($txResult,($pos1+13),($pos2-$pos1));


      $headerUrl = "Location: http://www.eatandplaycard.com/vpayment_nosuccess.php?errorMessage=" . $errorMessage;
      //$headerUrl = "Location: https://www.eatandplaycard.com/vpayment_nosuccess.php";

      }
    //

   //$headerUrl = "Location: https://www.cutiesnaps.ca/vpayment_success.php?id=" . $photoId;
   //echo "THE TRAN URL IS: " . $tranUrl;
   header( $headerUrl );


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





//IF SUCCESSFULL UPDATE DB AND REDIRECT TO THANK YOU



//IF UNSUCCESSFULL REDIRECT TO UNSUCESSFUL PAGE




?>
