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
//    $con = mysql_connect("127.0.0.1","eatandplaycard","3b91bIwORUmlyqzoVqmg");
    $con = mysql_connect("db685702714.db.1and1.com","dbo685702714",'874#$dadsf#a');
    //$con = mysql_connect("localhost","cercae_admin2","7f2a?B");
    if (!$con)
      {
      die('ici Could not connect: ' . mysql_error());
      }

//    mysql_select_db("wp_eatandplaycard", $con);
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
<tr><td colspan="2" width="100%" align="center"><img src="/images/logo2.jpg" border="0" width="298"><h3>PREPAID VOUCHER</h3></td></tr>

  <tr>
    <td width="33%" align="left"><b>Product: </b></td>
    <td>The Gray Line New York Eat and Play Card</td>
  </tr>
  <tr>
    <td align="left"><b>Product Code: </b></td>
    <td>GLNYEAPC</td>
  </tr>
  <tr>
    <td align="left"><b>Quantity: </b></td>
    <td><?php echo $row['quantity']; ?></td>
  </tr>
  <tr>
    <td align="left"><b>Name: </b></td>
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
    <td colspan="2"><b>How to receive your Gray Line New York Eat and Play Card</b></td>
  </tr>
  <tr>
    <td colspan="2">You must print this Voucher - screen captures of this voucher on mobile phones are not accepted. Present your printed Voucher at the
    location listed below. You will be required to sign the Voucher and present identification.</td>
  </tr>

  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><b>Gray Line New York Visitor Center</b></td>
  </tr>
  <tr>
    <td align="right" valign="top"><b>Location: </b></td>
    <td>Midtown NY</td>
  </tr>
  <tr>
    <td align="right" valign="top"><b>Address: </b></td>
    <td>777 8th Avenue (between 47th & 48th St.), New York</td>
  </tr>
  <tr>
    <td align="right"><b>Open: </b></td>
    <td>Open daily from 7:00am - 9:00pm<br />
		</td>
  </tr> 
  
  
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><b>CitySights NY Visitor Center at Madame Tussauds</b></td>
  </tr>
  <tr>
    <td align="right" valign="top"><b>Location: </b></td>
    <td>Times Square</td>
  </tr>
  <tr>
    <td align="right" valign="top"><b>Address: </b></td>
    <td>234 W. 42nd Street (between 7th and 8th Ave)</td>
  </tr>
  <tr>
    <td align="right"><b>Open: </b></td>
    <td>Open daily from 8:00am – 8:00pm<br />
		</td>
  </tr> 
  
  
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><b>Gray Line NY Visitor Center</b></td>
  </tr>
  <tr>
    <td align="right" valign="top"><b>Location: </b></td>
    <td>Grand Central</td>
  </tr>
  <tr>
    <td align="right" valign="top"><b>Address: </b></td>
    <td>125 Park Ave. (between 41st and 42nd St.)</td>
  </tr>
  <tr>
    <td align="right"><b>Open: </b></td>
    <td>Open daily from 8:00am – 5:00pm<br />
		</td>
  </tr> 
  
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><b>Gray Line NY Visitor Center</b></td>
  </tr>
  <tr>
    <td align="right" valign="top"><b>Location: </b></td>
    <td>Port Authority</td>
  </tr>
  <tr>
    <td align="right" valign="top"><b>Address: </b></td>
    <td>42nd Street (between 8th and 9th Ave)</td>
  </tr>
  <tr>
    <td align="right"><b>Open: </b></td>
    <td>Open daily from 7:00am – 7:00pm<br />
		</td>
  </tr> 
  
  
  
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
		Please be sure to read Eat and Play Card Terms and Conditions as outlined on the card's sleeve.
	</td>
  </tr>
</table>
</td></tr></table>
</div>

<?php

      }
    else
      {
        echo "VOUCHER INVALID";
      }

$con = mysql_close();
?>
</body>
</html>