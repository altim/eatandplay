<?php

//Caclulate Total Amount with taxes and everything

$total_amount = $buy_quantity * 25;
if($ship_option=="physical_voucher"){
	$total_amount= $total_amount + 4.95;
}

				
$total_amount_text = "";

if($buy_country=="CA"){
	$total_amount=(float)($total_amount);			
}

//NO TAX CALCULATIONS NEEDED - JAN 12 2010
$total_amount = number_format($total_amount,2);
$total_amount_text = $total_amount;

//Ontario Resident
//if ($buy_state=="ON")
//  {
//   $total_amount = $total_amount * 1.13;
//   $total_amount = number_format($total_amount,2);
//   $total_amount_text = $total_amount . " (incl. GST and PST)";
//  }
//else if ($buy_country=="CANADA")
//  {
//   $total_amount = $total_amount * 1.05;
//   $total_amount = number_format($total_amount,2);
//   $total_amount_text = $total_amount . " (incl. GST)";
//  }
//else
//  {
//    $total_amount = number_format($total_amount,2);
//    $total_amount_text = $total_amount;
//  }


//printf("With 2 decimals: %1\$.2f",$number);

?>
