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
		$con = mysql_connect("localhost","eatandpl_wp",",sV^=iiVE!*~");
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }

		mysql_select_db("eatandpl_maindbeap", $con);

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
    <td align="right"><b>Phone: </b></td>
    <td>Int’l: 212 445 0846 / USA & Canada: 1-800-669-0051</td>
  </tr>
  <tr>
    <td align="right"><b>Open: </b></td>
    <td>7am- 9:30pm<br />
		</td>
  </tr>      <tr>    <td colspan="2">&nbsp;<br><br></td>  </tr>      <tr>    <td colspan="2" align="center"><b>Gray Line New York Visitor Center at J & R Store</b></td>  </tr>  <tr>    <td align="right" valign="top"><b>Location: </b></td>    <td>Downtown Manhattan across from City Hall Park</td>  </tr>  <tr>    <td align="right" valign="top"><b>Address: </b></td>    <td>17 Park Row</td>  </tr>  <tr>    <td align="right"><b>Open: </b></td>    <td>Open daily from 9:00am – 6:00pm<br />		</td>  </tr>  <tr>    <td colspan="2">&nbsp;<br><br></td>  </tr>      <tr>    <td colspan="2" align="center"><b>CitySights NY Visitor Center at Madame Tussauds</b></td>  </tr>  <tr>    <td align="right" valign="top"><b>Location: </b></td>    <td>Times Square</td>  </tr>  <tr>    <td align="right" valign="top"><b>Address: </b></td>    <td>234 W. 42nd Street</td>  </tr>  <tr>    <td align="right"><b>Open: </b></td>    <td>Open daily from 8:00am – 8:00pm<br />		</td>  </tr>  <tr>    <td colspan="2">&nbsp;<br><br></td>  </tr>        <tr>    <td colspan="2" align="center"><b>Century 21 Department Store Visitor Center</b></td>  </tr>  <tr>    <td align="right" valign="top"><b>Location: </b></td>    <td>Financial District</td>  </tr>  <tr>    <td align="right" valign="top"><b>Address: </b></td>    <td>22 Cortlandt Street (between Church and Broadway. 1st Floor)</td>  </tr>  <tr>    <td align="right"><b>Open: </b></td>    <td>Mon – Fri 8am-9pm; Sat 10am-9pm; Sun 11am-8pm<br />		</td>  </tr>
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