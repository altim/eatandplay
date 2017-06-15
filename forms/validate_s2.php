<?php
//GET THE INFO FROM POST
session_start();
if($_GET['change']==1){
	$buy_firstname = $_SESSION[ "buy_firstname"];
	$buy_lastname = $_SESSION[ "buy_lastname"];
	$buy_address1 = $_SESSION[ "buy_address1"];
	$buy_address2 = $_SESSION[ "buy_address2"];
	$buy_city = $_SESSION[ "buy_city"];
	$buy_state = $_SESSION[ "buy_state"];
	$buy_country = $_SESSION[ "buy_country"];
	$buy_zip = $_SESSION[ "buy_zip"];
	$buy_phone = $_SESSION[ "buy_phone"];
	$buy_email = $_SESSION[ "buy_email"];
	$buy_email_verify = $_SESSION[ "buy_email"];
	
	$buy_cc_type = $_SESSION[ "buy_cc_type"];
	$buy_cc_num = $_SESSION[ "buy_cc_num"];
	$buy_cc_nameoncard = $_SESSION[ "buy_cc_nameoncard"];
	$buy_cc_expmonth = $_SESSION[ "buy_cc_expmonth"];
	$buy_cc_expyear = $_SESSION[ "buy_cc_expyear"];
	$buy_cc_cvv = $_SESSION[ "buy_cc_cvv"];
	
	//INHERITED INFO
	$buy_location = $_SESSION[ "buy_location"];
	$buy_quantity = $_SESSION[ "buy_quantity"];
	$ship_option = $_SESSION[ "ship_option"];
}else{
	$buy_firstname = $_POST[ "buy_firstname"];
	$buy_lastname = $_POST[ "buy_lastname"];
	$buy_address1 = $_POST[ "buy_address1"];
	$buy_address2 = $_POST[ "buy_address2"];
	$buy_city = $_POST[ "buy_city"];
	$buy_state = $_POST[ "buy_state"];
	$buy_country = $_POST[ "buy_country"];
	$buy_zip = $_POST[ "buy_zip"];
	$buy_phone = $_POST[ "buy_phone"];
	$buy_email = $_POST[ "buy_email"];
	$buy_email_verify = $_POST[ "buy_email_verify"];
	
	$buy_cc_type = $_POST[ "buy_cc_type"];
	$buy_cc_num = $_POST[ "buy_cc_num"];
	$buy_cc_nameoncard = $_POST[ "buy_cc_nameoncard"];
	$buy_cc_expmonth = $_POST[ "buy_cc_expmonth"];
	$buy_cc_expyear = $_POST[ "buy_cc_expyear"];
	$buy_cc_cvv = $_POST[ "buy_cc_cvv"];
	
	//INHERITED INFO
	$buy_location = $_POST[ "buy_location"];
	$buy_quantity = $_POST[ "buy_quantity"];
	$ship_option = $_POST[ "ship_option"];
}

//VALIDATE THE INFO
$error = false;
$err_msg = "";

//************************************************************************
//********************VALIDATE ADDRESS INFORMATION************************
//************************************************************************
if ($buy_firstname=="")
  {
	$error = true;
	$err_msg = $err_msg . "~Missing first name information.";
  }
if ($buy_lastname=="")
  {
	$error = true;
	$err_msg = $err_msg . "~Missing last name information.";
  }
if ($buy_address1=="")
  {
	$error = true;
	$err_msg = $err_msg . "~Missing address information.";
  }
if ($buy_city=="")
  {
	$error = true;
	$err_msg = $err_msg . "~Missing city information.";
  }
if($buy_country=="CA" || $buy_country=="US"){
	if ($buy_state=="")
	  {
		$error = true;
		$err_msg = $err_msg . "~Missing state/province information.";
	  }
}
if ($buy_country=="")
  {
	$error = true;
	$err_msg = $err_msg . "~Missing country information.";
  }
if ($buy_zip=="")
  {
	$error = true;
	$err_msg = $err_msg . "~Missing zip code information.";
  }
if ($buy_phone=="")
  {
	$error = true;
	$err_msg = $err_msg . "~Missing phone number information.";
  }
if ($buy_email=="")
  {
	$error = true;
	$err_msg = $err_msg . "~Missing email information.";
  }
  
if($buy_email!=$buy_email_verify)
{
	$error = true;
	$err_msg = $err_msg . "~Email Verification does not match";
	$buy_email_verify = "";
}


//************************************************************************
//********************VALIDATE CREDIT CARD INFORMATION********************
//************************************************************************

if ($buy_cc_num=="")
  {
  	$error = true;
	$err_msg = $err_msg . "~Missing credit card number.";
  }
else if (!(strlen($buy_cc_num)==16))
  {
  	$error = true;
	$err_msg = $err_msg . "~Invalid credit card number format.";
  }

if ($buy_cc_nameoncard=="")
  {
  	$error = true;
	$err_msg = $err_msg . "~Missing credit card cardholder name.";
  }

if ($buy_cc_cvv=="")
  {
  	$error = true;
	$err_msg = $err_msg . "~Missing credit card CVV number.";
  }
if($buy_cc_expyear<(date("Y")))
{
	$error=true;
	$err_msg= $err_msg."~Credit card is expired";	
}
if($buy_cc_expyear==(date("Y")))
{
	if($buy_cc_expmonth<(date("n")))
	{
		$error=true;
		$err_msg= $err_msg."~Credit card is expired";
	}
}


?>
