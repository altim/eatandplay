<?php
//GET THE INFO FROM POST

session_start();
if($_GET['change']==1){
	$buy_location = $_SESSION["buy_location"];
	$buy_quantity = $_SESSION["buy_quantity"];
}
else{
	$buy_location = $_POST["buy_location"];
	$buy_quantity = $_POST["buy_quantity"];
}

//VALIDATE THE INFO
$error = false;
$err_msg = "";

//************************************************************************
//********************VALIDATE STEP 1 INFORMATION************************
//************************************************************************
if ($buy_location=="")
  {
	$error = true;
	$err_msg = $err_msg . "~Missing location information.";
  }
if ($buy_quantity=="")
  {
	$error = true;
	$err_msg = $err_msg . "~Missing quantity information.";
  }

?>