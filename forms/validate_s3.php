<?php

session_start();
if($_GET['change']==1){
	
	$ship_to_billing = $_SESSION["ship_to_billing"];
	$ship_firstname = $_SESSION["ship_firstname"];
	$ship_lastname = $_SESSION["ship_lastname"];
	$ship_address1 = $_SESSION["ship_address1"];
	$ship_address2 = $_SESSION["ship_address2"];
	$ship_city = $_SESSION["ship_city"];
	$ship_state = $_SESSION["ship_state"];
	$ship_country = $_SESSION["ship_country"];
	$ship_zip = $_SESSION["ship_zip"];
	$ship_option = $_SESSION["ship_option"];
	
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
	
	$_SESSION['buy_location'] = $_POST[ "buy_location"];
	$_SESSION['buy_quantity'] = $_POST[ "buy_quantity"];

	$_SESSION['changeinfo']=0;
}elseif($_GET['change']==2){
	
	print  $_SESSION["ship_option"];
	
	$ship_to_billing = $_SESSION[ "ship_to_billing"];
	$ship_firstname = $_SESSION[ "ship_firstname"];
	$ship_lastname = $_SESSION[ "ship_lastname"];
	$ship_address1 = $_SESSION[ "ship_address1"];
	$ship_address2 = $_SESSION[ "ship_address2"];
	$ship_city = $_SESSION[ "ship_city"];
	$ship_state = $_SESSION[ "ship_state"];
	$ship_country = $_SESSION[ "ship_country"];
	$ship_zip = $_SESSION[ "ship_zip"];
	$ship_option = $_SESSION["ship_option"];
	
	$_SESSION['buy_firstname'] = $_POST[ "buy_firstname"];
	$_SESSION['buy_lastname'] = $_POST[ "buy_lastname"];
	$_SESSION['buy_address1'] = $_POST[ "buy_address1"];
	$_SESSION['buy_address2'] = $_POST[ "buy_address2"];
	$_SESSION['buy_city'] = $_POST[ "buy_city"];
	$_SESSION['buy_state'] = $_POST[ "buy_state"];
	$_SESSION['buy_country'] = $_POST[ "buy_country"];
	$_SESSION['buy_zip'] = $_POST[ "buy_zip"];
	$_SESSION['buy_phone'] = $_POST[ "buy_phone"];
	$_SESSION['buy_email'] = $_POST[ "buy_email"];
	
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
	
	$_SESSION['buy_cc_type'] = $_POST[ "buy_cc_type"];
	$_SESSION['buy_cc_num'] = $_POST[ "buy_cc_num"];
	$_SESSION['buy_cc_nameoncard'] = $_POST[ "buy_cc_nameoncard"];
	$_SESSION['buy_cc_expmonth'] = $_POST[ "buy_cc_expmonth"];
	$_SESSION['buy_cc_expyear'] = $_POST[ "buy_cc_expyear"];
	$_SESSION['buy_cc_cvv'] = $_POST[ "buy_cc_cvv"];

	$_SESSION['changeinfo']=0;
}else{
	$ship_to_billing = $_POST[ "ship_to_billing"];
	$ship_firstname = $_POST[ "ship_firstname"];
	$ship_lastname = $_POST[ "ship_lastname"];
	$ship_address1 = $_POST[ "ship_address1"];
	$ship_address2 = $_POST[ "ship_address2"];
	$ship_city = $_POST[ "ship_city"];
	$ship_state = $_POST[ "ship_state"];
	$ship_country = $_POST[ "ship_country"];
	$ship_zip = $_POST[ "ship_zip"];
	$ship_option = $_POST[ "ship_option"];
	
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
}


//NEW INFO


//VALIDATE THE INFO
$error = false;
$err_msg = "";

//************************************************************************
//********************VALIDATE STEP 3 INFORMATION************************
//************************************************************************
if ($ship_option=="")
  {
	$error = true;
	$err_msg = $err_msg . "~Missing shipping information.";
  }

if ($ship_option=="physical_voucher")
  {
	if (($ship_to_billing=="on") || ($ship_to_billing=="ship_to_billing"))
	  {
		$ship_firstname = $buy_firstname;
		$ship_lastname = $buy_lastname;
		$ship_address1 = $buy_address1;
		$ship_address2 = $buy_address2;
		$ship_city = $buy_city;
		$ship_state = $buy_state;
		$ship_country = $buy_country;
		$ship_zip = $buy_zip;
	  }
	else
	  {
		if ($ship_firstname=="")
		  {
			$error = true;
			$err_msg = $err_msg . "~Missing shipping first name information.";
		  }
		if ($ship_lastname=="")
		  {
			$error = true;
			$err_msg = $err_msg . "~Missing shipping last name information.";
		  }
		if ($ship_address1=="")
		  {
			$error = true;
			$err_msg = $err_msg . "~Missing shipping address information.";
		  }
		if ($ship_city=="")
		  {
			$error = true;
			$err_msg = $err_msg . "~Missing shipping city information.";
		  }
		if ($ship_state=="")
		  {
			$error = true;
			$err_msg = $err_msg . "~Missing shipping state/province information.";
		  }
		if ($ship_country=="")
		  {
			$error = true;
			$err_msg = $err_msg . "~Missing shipping country information.";
		  }
		if ($ship_zip=="")
		  {
			$error = true;
			$err_msg = $err_msg . "~Missing shipping zip code information.";
		  }
	  }
   }
?>