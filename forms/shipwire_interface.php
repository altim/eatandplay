<?php
/*
  $Id: XML_Order_PHP_sample_code.php,v 1.1
  http://www.shipwire.com
  Copyright (c) 2004-2008 Shipwire.com
  For use with Shipwire.com only
*/

// replace the "emailwire" & "passwdwire" String values with your Shipwire email and password
$emailwire = "larry@eatandplaycard.com";
$passwdwire = "eatshipwire1";
$server = "Production"; // or "Production"
$warehouse = "0"; // Leave "00" if you want Shipwire to determine the warehouse

/*
Build Order Submitter
In actual use, you would probably populate the order submission
parameters (Address, Item, Quantity, etc.) from data submitted
via an on-line order form or database.
For this sample we will just hard code some dummy data.
*/

$OrderList='<OrderList StoreAccountName="scr-test-485.0123456789ABCDEF">
<EmailAddress>'.$emailwire.'</EmailAddress>
<Password>'.$passwdwire.'</Password>
<Server>'.$server.'</Server>
<Referer>023YAHOO</Referer>
<Order id="'.$order_number.'">
  <Warehouse>'.$warehouse.'</Warehouse>
  <AddressInfo type="ship">
   <Name>
    <Full>' .$buy_firstname. ' ' .$buy_lastname.'</Full>
   </Name>
   <Address1>' .$billingaddress. '</Address1>
   <Address2>' .$billingaddress2. '</Address2>
   <City>' .$billingcity. '</City>
   <State>' .$userProvince. '</State>
   <Country>' .$ship_country. '</Country>
   <Zip>' .$billingpcode. '</Zip>
   <Phone>' .$telephone. '</Phone>
   <Email>' .$uEmail. '</Email>
  </AddressInfo>
  <Shipping>GD</Shipping>
  <Item num="0">
   <Code>EPCARDORL</Code>
   <Quantity>'.$buy_quantity.'</Quantity>
  </Item>
 </Order>
 </OrderList>';

//Convert characters to proper format for post
$OrderList = urlencode($OrderList);

mail("jpplouffe@cercamarketing.com","orderlist encoded - eatandplay", $OrderList, "FROM: JP");

// open synchronous connection to Shipwire servlet

// NOTE:  you must have the cURL libraries installed with PHP on your server--
// If you need them, see your System Administrator, who can get then at
// http://curl.haxx.se/download.html

$urlConn = curl_init ("https://www.shipwire.com/exec/FulfillmentServices.php");
curl_setopt ($urlConn, CURLOPT_POST, 1);
curl_setopt ($urlConn, CURLOPT_HTTPHEADER, array("Content-type", "application/x-www-form-urlencoded"));
curl_setopt ($urlConn, CURLOPT_POSTFIELDS, "OrderListXML=".$OrderList);
curl_setopt ($urlConn, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($urlConn, CURLOPT_SSL_VERIFYPEER, 0);

$orderSubmitted = curl_exec($urlConn);

//if (empty($orderSubmitted)) {
//  print "ERROR: " . curl_error($urlConn) . "\n";
//  exit;
//}

// Parse the response

$parser= xml_parser_create();
xml_parse_into_struct($parser,$orderSubmitted,$XMLvals,$XMLindex);
xml_parser_free($parser);

// This function will return an array of the values of an element
// given the $vals and $index arrays, and the element name

function getElementValue($XMLvals, $elName) {
  $elValue = null;
  foreach ($XMLvals as $arrkey => $arrvalue) {
    foreach ($arrvalue as $key => $value) {
      if ($value==strtoupper($elName)){
        $elValue[] = $arrvalue['value'];
      }
    }
  }
  return $elValue;
}

// Use the above function to get the values you want using element names, e.g.
$errorMessage = getElementValue($XMLvals,"ErrorMessage");
$totalOrders = getElementValue($XMLvals,"TotalOrders");
$transactionId = getElementValue($XMLvals,"TransactionId");

$ship_error_list = "";
$ship_tranid_list = "";

// Print the tag values we extracted
//echo "<b>Here is the data extracted from the Shipwire response XML:</b><br><br> ";
if (!empty($errorMessage)) {
  foreach ($errorMessage as $key => $err) {
    $ship_error_list = $ship_error_list . $err.  "<br />";
  }
}
//if (!empty($totalOrders)) {
//  foreach ($totalOrders as $key => $tot) {
//  }
//}
if (!empty($transactionId)) {
  foreach ($transactionId as $key => $tra) {
    $ship_tranid_list = $ship_tranid_list . $tra.  ",";
  }
}
?>