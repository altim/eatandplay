<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Your Voucher - Eat and Play Card: Take a bite out of vacation expenses</title>

</head>
<body>

<?php

//GET POST AND SESSION INFO
$voucherid = $_GET[ "voucherid"];


    if (!($voucherid==""))
      {
	  
	 
	   
		//CONNECT TO DATABASE
//		$con = mysql_connect("127.0.0.1","eatandplaycard","3b91bIwORUmlyqzoVqmg");
		$con = mysql_connect("db685702714.db.1and1.com","dbo685702714",'874#$dadsf#a');
		//$con = mysql_connect("localhost","cercae_admin2","7f2a?B");
		if (!$con)
		  {
		  die('ici Could not connect: ' . mysql_error());
		  }

//		mysql_select_db("wp_eatandplaycard", $con);
		mysql_select_db("db685702714", $con);

        //GET THE TRANSACTION FROM THE DB
	    $query  = "SELECT * FROM transactions WHERE order_num='" . $voucherid . "'";

	    $result = mysql_query($query);
		$row=mysql_fetch_array($result);
?>

<div align="center">
<table border="1" cellpadding="10px"><tr><td>
<table width="600px" border="0" cellpadding="2" cellspacing="0" style="font-size:12px;">
<!-- <tr><td colspan="2" width="100%" align="center"><img src="images/logo1.png" border="0" width="100"><h3>PREPAID VOUCHER</h3></td></tr> -->
<tr><td colspan="2" width="100%" align="center"><img src="images/logo2.jpg" border="0" width="298"><h3>PREPAID VOUCHER</h3></td></tr>

  <tr>
    <td width="33%" align="left"><b>Product: </b></td>
    <td>Eat and Play Card - Orlando</td>
  </tr>
  <tr>
    <td align="left"><b>Product Code: </b></td>
    <td>EPCARDORL</td>
  </tr>
  <tr>
    <td align="left"><b>Quantity: </b></td>
    <td><?php echo $row['quantity']; ?></td>
  </tr>
  <tr>
    <td align="left"><b><strong>Lead Traveler Name</strong>: </b></td>
    <td><?php echo $row['fname']." ".$row['lname']; ?></td>
  </tr>
  <tr>
    <td align="left"><b>Purchase Date: </b></td>
    <td><?php echo date("F jS, Y",strtotime($row['purchase_tstamp'])); ?></td>
  </tr>
  <tr>
    <td align="left"><b>Order Reference Number: </b></td>
    <td><?php echo $voucherid; ?></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><b>How to receive your Eat and Play Card</b></td>
  </tr>
  <tr>
    <td colspan="2">Print  this voucher and exchange it for your Card at any one of the locations listed  below.&nbsp; You must print this voucher &ndash;  screen captures from mobile phones are not acceptable.&nbsp; You will be required to sign the voucher and  present identification.</td>
  </tr>
 
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>    <td colspan="2" align="center"><b><strong>Lake Buena Vista Area</strong></b></td>  </tr>  <tr>    <td align="right" valign="top"><b>Location: </b></td>    <td>Travelex Currency Services</td>  </tr>    <tr>    <td align="right" valign="top"><b>Address: </b></td>    <td>Lake Buena Vista Factory Stores (next to Old Navy)<br/>15657 State Road 535 (aka S. Apopka Vineland)<br></td>  </tr>  <tr>    <td align="right"><b>Phone: </b></td>    <td>407-465-1932</td>  </tr>  <tr>    <td align="right"><b>Hours: </b></td>    <td>Open Mon - Sat 9am-730pm; Sun 9am-5pm<br></td>  </tr>  <tr>
    <td align="right">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><b><strong>International Drive Area</strong></b></td>
  </tr>
  <tr>
    <td align="right" valign="top"><b>Location: </b></td>
    <td>Titanic The Experience</td>
  </tr>
  <tr>
    <td align="right" valign="top"><b>Address: </b></td>
    <td>7324 International Drive<br />Orlando, FL<br></td>
  </tr>
  <tr>
    <td align="right"><b>Phone: </b></td>
    <td>407-248-1166</td>
  </tr>
  <tr>
    <td align="right"><b>Hours: </b></td>
    <td>Open daily from 10:00am - 5:00pm<br></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><b><strong>Davenport Area</strong></b></td>
  </tr>
   <tr>
    <td align="right" valign="top"><b>Location: </b></td>
    <td>Hotelbeds Homes Welcome Center</td>
  </tr>
  <tr>
    <td align="right" valign="top"><b>Address: </b></td>
    <td>8285 Champions Gate Blvd, Davenport, Fl<!--6365 W. Irlo Bronson Memorial Highway/US 192 <br>(just east of I-4 at Parkway Blvd)--><br></td>
  </tr>
  <tr>
    <td align="right"><b>Phone: </b></td>
    <td>407-362-1017</td> 
  </tr>
  <tr>
    <td align="right"><b>Hours: </b></td>
    <td>Daily from 8:00am - 10:00pm<br />		</td>
  </tr>


  <tr>
    <td colspan="2">&nbsp;<br><br></td>
  </tr>
  <tr>
    <td align="right"><b>Signature: </b></td>
    <td>________________________________</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><b>Date: </b></td>
    <td>________________________________</td>
  </tr>
  <tr>
    <td colspan="2" style="padding-top:2px;"><strong>Terms and Conditions</strong><br><br>
		Please be sure to read Eat and Play Card Terms and Conditions as outlined on the card's carrier.	</td>
  </tr>
</table>
</td></tr></table>
</div>

<?php

      }
    else
      {
        echo "VOUCHER INVALID..";
      }

$con = mysql_close();
?>
</body>
</html>