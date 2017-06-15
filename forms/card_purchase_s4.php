<?php

include("validate_s3.php");

if ($error==false)
  {

	$buy_cc_type = $_SESSION["buy_cc_type"];
	$buy_cc_num = $_SESSION["buy_cc_num"];
	$buy_cc_nameoncard = $_SESSION["buy_cc_nameoncard"];
	$buy_cc_expmonth = $_SESSION["buy_cc_expmonth"];
	$buy_cc_expyear = $_SESSION["buy_cc_expyear"];
	$buy_cc_cvv = $_SESSION["buy_cc_cvv"];

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

	$buy_location = $_SESSION["buy_location"];
	$buy_quantity = $_SESSION["buy_quantity"];

	$_SESSION['ship_to_billing']=$ship_to_billing;
	$_SESSION['ship_firstname']=$ship_firstname;
	$_SESSION['ship_lastname']=$ship_lastname;
	$_SESSION['ship_address1']=$ship_address1;
	$_SESSION['ship_address2']=$ship_address2;
	$_SESSION['ship_city']=$ship_city;
	$_SESSION['ship_state']=$ship_state;
	$_SESSION['ship_country']=$ship_country;
	$_SESSION['ship_zip']=$ship_zip;
	$_SESSION['ship_option']=$ship_option;

  }

print "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">\n";
print "<html>\n";
print "<head>\n";
print "<title>Card Purchase - Eat and Play Card: Take a bite out of vacation expenses</title>\n";
print "<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'>\n";
print "<meta name='author' content='Cerca Marketing'>\n";
print "<link href='/css/eatandplaysub2.css' rel='stylesheet' type='text/css'>\n";

print "<script language='JavaScript' src='/scripts/common.js'></script>\n";
$path = $_GET["path"];
$isie8=0;
print "<!--[if lt IE 7]>\n";
print "<script defer type='text/javascript' src='scripts/pngfix2.js'></script>\n";
print "<![endif]-->\n\n";

print "<!--[if gte IE 8]>\n";
$isie8=1;
print "<![endif]-->\n\n";

if (!($isie8==1))
 {
	print "<script type='text/javascript'\n
			language='JavaScript1.2'\n
			src='/hm3/scripts/verbose/HM_Loader.js'>\n";
	print "</script>\n";
 }
else
 {
	print "<script type='text/javascript'\n
			language='JavaScript1.2'\n
			src='/hm3/scripts/verbose/HM_Loader8.js'>\n";
	print "</script>\n";
 }



print "</head>\n";
print "<body onLoad='window.scrollTo(0,0)'>\n
           <div align='center'>\n
					  <table width='800px' border='0' cellpadding='0' cellspacing='0'>\n
							<tr>\n
							  <td width='620px'>&nbsp;</td>\n
							  <td width='183px'>\n
                                  &nbsp;\n
							  </td>\n
							</tr>\n
					  </table>\n
					  \n
                   <div id='header1_sun_buycard'>\n
					<div id='topmenu'>\n
					  <table width='625px' height='35px' border='0' cellpadding='0' cellspacing='0'>\n
						<tr>\n
						  <td height='35px'><a href='index.php'><img src='/images/mnu_home_off.png' border='0' height='35' width='125' onMouseOver='imgSwap(this)' onMouseOut='imgSwap(this)' /></a></td>\n
						  <td height='35px'><a href='about.php'><img src='/images/mnu_about_off.png' border='0' height='35' width='125' onMouseOver='imgSwap(this)' onMouseOut='imgSwap(this)' /></a></td>\n
						  <td height='35px'><img src='/images/mnu_dest_off.png' border='0' height='35' width='125'></td>\n
						  <td height='35px'><a href='contact.php'><img src='/images/mnu_contact_off.png' border='0' height='35' width='125' onMouseOver='imgSwap(this)' onMouseOut='imgSwap(this)' /></a></td>\n
						  <td height='35px'><a href='card_purchase_s0.php'><img src='/images/mnu_buy_off.png' border='0' height='35' width='125'/></a></td>\n
						</tr>\n
					  </table>\n
					</div>\n
  </div>\n
  <div id='contentbgsun'>\n
		<span style='font-family:arial;font-size:4px;'><br /></span>\n";

//******************************************************************************
//     IF THERE IS AN ERROR FROM STEP 3, SHOW THE INFO FROM STEP 3 AGAIN
//******************************************************************************
?>
<script type="text/javascript" language="javascript">
		function ship_check_change(){
			if(document.getElementById('ship_check').checked==true){
				document.getElementById('ship_change').style.display="none";
			}
			if(document.getElementById('ship_check').checked==false){
				document.getElementById('ship_change').style.display="block";
			}
		}
		function vouchership(){
			if(document.getElementById('voucher').checked==true){
				document.getElementById('shippingform').style.display="none";
			}
			if(document.getElementById('shipping').checked==true){
				document.getElementById('shippingform').style.display="block";
			}
		}
	</script>
<?php
if ($error==true)
  {
print"	<table width='800px' border='0' cellpadding='0' cellspacing='0'>
		  <tr>
		   <td width='230px' valign='top' align='center'><!-- LEFT COLUMN -->
		      <span style='font-family:arial;font-size:4px;'><br /><br /></span>
                          <img src='images/buy_selection_logo.png' border='0' width='89' height='132' alt='Product Selection' />
					   <span style='font-family:arial;font-size:4px;'><br /><br /></span>
		   </td>
		   </td>
		   <td width='570px' valign='top'>
			 <div id='about_blank'>
			   <span style='font-family:arial-font-size:4px;'><br /></span>
			   <form method='POST' ACTION='card_purchase_s4.php'>
			        <input type='hidden' name='buy_location' value='" . $buy_location. "'>
			        <input type='hidden' name='buy_quantity' value='" . $buy_quantity. "'>
                    <input type='hidden' name='ship_option' value='" . $ship_option. "'>
					<input type='hidden' name='buy_firstname' value='" . $buy_firstname. "'>
					<input type='hidden' name='buy_lastname' value='" . $buy_lastname. "'>
					<input type='hidden' name='buy_address1' value='" . $buy_address1. "'>
					<input type='hidden' name='buy_address2' value='" . $buy_address2. "'>
					<input type='hidden' name='buy_city' value='" . $buy_city. "'>
					<input type='hidden' name='buy_state' value='" . $buy_state. "'>
					<input type='hidden' name='buy_country' value='" . $buy_country. "'>
					<input type='hidden' name='buy_zip' value='" . $buy_zip. "'>
					<input type='hidden' name='buy_phone' value='" . $buy_phone. "'>
					<input type='hidden' name='buy_email' value='" . $buy_email. "'>
					<input type='hidden' name='total_amount' value='" . $total_amount. "'>
					<input type='hidden' name='total_amount_text' value='" . $total_amount_text. "'>

                         <!-- BEGIN STEP 3 -->
                                                 <!-- ERROR MESSAGES -->\n
												 <div style='margin-left:50px;text-align:left;'>\n
                                                      <b class='errred'>The following errors were encountered:</b><br />\n" . parseErrors($err_msg) . "\n
												 </div>\n
												 <!-- END ERROR MESSAGES -->\n

												<table border='0' cellpadding='0' cellspacing='3' width='550px'>
													<tr>
													<td align='right' width='35%' valign='middle'><img src='images/buy_step3.png' border='0' height='48' width='101'>&nbsp;</td>
													<td>";
														if($buy_country=="US"){
														print"Please choose a shipment option.";
														}
													print"</td>
													</tr>
													<tr>
													<td align='right' valign='top'>&nbsp;&nbsp;<input id=\"voucher\" type='radio' name='ship_option' value='email_voucher' onclick=\"vouchership()\" >&nbsp;&nbsp;</td>
													<td>
													     <b class='buyblue'>Email me a voucher.</b><br />
													     You will be issued a printable electronic voucher<br />
													     immediately. It will identify the locations in <br />";
													 print $buy_location . "<!--Orlando--> where it can be redeemed for a physical <br /><b>Eat and Play Card</b>.
													</td>
													</tr>
													<tr><td colspan='2'>&nbsp;</td></tr>

													";
													if($buy_country=="US"){
														print"
														<tr>
														<td align='right' valign='top'>&nbsp;&nbsp;<input id=\"shipping\" type='radio' name='ship_option' value='physical_voucher' onclick=\"vouchership()\">&nbsp;&nbsp;</td>
														<td>
															 <b class='buyblue'>Ship me an Eat and Play Card:</b><br /><em>($4.95 shipping and handling)</em><br />
															 Your card is shipped to you generally within 10 business days.


														</td>
														</tr>";
														}
												print"
												</table>

                         						<span style='font-family:arial;font-size:4px;'><br /></span>
                                                <div align='center'><img src='images/buy_sep.gif' border='0' /></div>
                                                <span style='font-family:arial;font-size:4px;'><br /><br /></span>";

												if($buy_country=="US"){
												print"<div id=\"shippingform\" style=\"display:none\">
												<table border='0' cellpadding='0' cellspacing='3' width='550px'>
													<tr>
													<td align='right' valign='top' width='35%' >&nbsp;&nbsp;<input type='checkbox' id=\"ship_check\" onclick=\"ship_check_change()\" name='ship_to_billing' value='ship_to_billing'>&nbsp;&nbsp;</td>
													<td>
													     Ship this order to my billing address.
													</td>
													</tr>

											    </table>

												<div id=\"ship_change\" style=\"display:block\">
												<table border='0' cellpadding='0' cellspacing='3' width='550px'>
													<tr><td colspan='2'><span style='font-family:arial;font-size:4px;'><br /></span></td></tr>
													<tr>
													<td align='right' width='35%'>&nbsp;</td>
													<td>
													     <b class='buyblue'>OR</b>
													</td>
													</tr>
													<tr><td colspan='2'><span style='font-family:arial;font-size:4px;'><br /></span></td></tr>
													<tr>
													<td align='right' width='35%'>&nbsp;</td>
													<td>Enter your shipping information (Must be in the USA): </td>
													</tr>
													<tr><td colspan='2'>&nbsp;</td></tr>
													<tr>
													<td align='right'><span id='contact'><b>First Name:</b></span></td>
													<td><input type=text
															   size='30'
															   name='ship_firstname' value='" .$ship_firstname."'></td>
													</tr>
													<tr>
													<td align='right'><span id='contact'><b>Last Name:</b></span></td>
													<td><input type=text
															   size='30'
															   name='ship_lastname' value='" .$ship_lastname."'></td>
													</tr>
													<tr>
													<td align='right'><span id='contact'><b>Address:</b></span></td>
													<td><input type=text
															   size='30'
															   name='ship_address1' value='" .$ship_address1."'></td>
													</tr>
													<tr>
													<td align='right'><span id='contact'>Address L2:</span></td>
													<td><input type=text
															   size='30'
															   name='ship_address2' value='" .$ship_address2."'></td>
													</tr>
													<tr>
													<td align='right'><span id='contact'><b>City:</b></span></td>
													<td><input type=text
															   size='30'
															   name='ship_city' value='" .$ship_city."'></td>
													</tr>
													<tr>
													<td align='right'><span id='contact'><b>State:</b></span></td>
													<td><select name='ship_state'>
														<optgroup label='U.S. States'>
														<option value='AK'>Alaska</option>
														<option value='AL'>Alabama</option>
														<option value='AR'>Arkansas</option>
														<option value='AZ'>Arizona</option>
														<option value='CA'>California</option>
														<option value='CO'>Colorado</option>
														<option value='CT'>Connecticut</option>
														<option value='DC'>District of Columbia</option>
														<option value='DE'>Delaware</option>
														<option value='FL'>Florida</option>
														<option value='GA'>Georgia</option>
														<option value='HI'>Hawaii</option>
														<option value='IA'>Iowa</option>
														<option value='ID'>Idaho</option>
														<option value='IL'>Illinois</option>
														<option value='IN'>Indiana</option>
														<option value='KS'>Kansas</option>
														<option value='KY'>Kentucky</option>
														<option value='LA'>Louisiana</option>
														<option value='MA'>Massachusetts</option>
														<option value='MD'>Maryland</option>
														<option value='ME'>Maine</option>
														<option value='MI'>Michigan</option>
														<option value='MN'>Minnesota</option>
														<option value='MO'>Missouri</option>
														<option value='MS'>Mississippi</option>
														<option value='MT'>Montana</option>
														<option value='NC'>North Carolina</option>
														<option value='ND'>North Dakota</option>
														<option value='NE'>Nebraska</option>
														<option value='NH'>New Hampshire</option>
														<option value='NJ'>New Jersey</option>
														<option value='NM'>New Mexico</option>
														<option value='NV'>Nevada</option>
														<option value='NY'>New York</option>
														<option value='OH'>Ohio</option>
														<option value='OK'>Oklahoma</option>
														<option value='OR'>Oregon</option>
														<option value='PA'>Pennsylvania</option>
														<option value='PR'>Puerto Rico</option>
														<option value='RI'>Rhode Island</option>
														<option value='SC'>South Carolina</option>
														<option value='SD'>South Dakota</option>
														<option value='TN'>Tennessee</option>
														<option value='TX'>Texas</option>
														<option value='UT'>Utah</option>
														<option value='VA'>Virginia</option>
														<option value='VT'>Vermont</option>
														<option value='WA'>Washington</option>
														<option value='WI'>Wisconsin</option>
														<option value='WV'>West Virginia</option>
														<option value='WY'>Wyoming</option>
														</optgroup>
														</select>
															   </td>
													</tr>
													<tr>
													<td align='right'><span id='contact'><b>Country:</b></span></td>
													<td><select name='ship_country' disabled=\"disabled\">
													        <option value='CANADA'>Canada</option>
													        <option value='US' SELECTED>USA</option>
													        <option value=''>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
													    </select></td>
													</tr>
													<tr>
													<td align='right'><span id='contact'><b>ZIP Code:</b></span></td>
													<td><input type=text
															   size='15'
															   name='ship_zip' value='" .$ship_zip."'></td>
													</tr>
											    </table></div></div>";}

												print"

											   <span style='font-family:arial;font-size:4px;'><br /><br /><br /><br /></span>


                         <!-- END STEP 3 -->

                                                <div align='center'><input type='submit' value='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Go to Step 4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' /></div>
			</form>";
  }
else
  {
   	$_SESSION['change_info']="1";
	$hide_no = substr($buy_cc_num,12);
    include("calculate_total.php");

?>
		<table width="800px" border="0" cellpadding="0" cellspacing="0">
		  <tr>
		   <td width="230px" valign="top" align="center"><!-- LEFT COLUMN -->
		      <span style="font-family:arial;font-size:4px;"><br /><br /></span>
                          <img src="images/buy_finalize_logo.png" border="0" width="92" height="134" alt="Finalize Order" />
					   <span style="font-family:arial;font-size:4px;"><br /><br /></span>
		   </td>
		   </td>
		   <td width="570px" valign="top">
			 <div id="about_blank">
			   <span style="font-family:arial-font-size:4px;"><br /></span>

			   <form method="POST" ACTION="card_purchase_final.php">
			        <input type="hidden" name="buy_location" value="<?php echo $buy_location; ?>">
			        <input type="hidden" name="buy_quantity" value="<?php echo $buy_quantity; ?>">
                    <input type="hidden" name="ship_option" value="<?php echo $ship_option; ?>">
					<input type="hidden" name="buy_firstname" value="<?php echo $buy_firstname; ?>">
					<input type="hidden" name="buy_lastname" value="<?php echo $buy_lastname; ?>">
					<input type="hidden" name="buy_address1" value="<?php echo $buy_address1; ?>">
					<input type="hidden" name="buy_address2" value="<?php echo $buy_address2; ?>">
					<input type="hidden" name="buy_city" value="<?php echo $buy_city; ?>">
					<input type="hidden" name="buy_state" value="<?php echo $buy_state; ?>">
					<input type="hidden" name="buy_country" value="<?php echo $buy_country; ?>">
					<input type="hidden" name="buy_zip" value="<?php echo $buy_zip; ?>">
					<input type="hidden" name="buy_phone" value="<?php echo $buy_phone; ?>">
					<input type="hidden" name="buy_email" value="<?php echo $buy_email; ?>">
					<input type="hidden" name="ship_to_billing" value="<?php echo $ship_to_billing; ?>">
					<input type="hidden" name="ship_firstname" value="<?php echo $ship_firstname; ?>">
					<input type="hidden" name="ship_lastname" value="<?php echo $ship_lastname; ?>">
					<input type="hidden" name="ship_address1" value="<?php echo $ship_address1; ?>">
					<input type="hidden" name="ship_address2" value="<?php echo $ship_address2; ?>">
					<input type="hidden" name="ship_city" value="<?php echo $ship_city; ?>">
					<input type="hidden" name="ship_state" value="<?php echo $ship_state; ?>">
					<input type="hidden" name="ship_country" value="<?php echo $ship_country; ?>">
					<input type="hidden" name="ship_zip" value="<?php echo $ship_zip; ?>">
					<input type="hidden" name="total_amount" value="<?php echo $total_amount; ?>">
					<input type="hidden" name="total_amount_text" value="<?php echo $total_amount_text; ?>">
<script type="text/javascript" language="javascript">
	function modify_info(type){
		switch(type){
			case "card":
				this.location.href="http://www.eatandplaycard.com/card_purchase_s2.php";
			break;
			case "quantity":
				this.location.href="http://www.eatandplaycard.com/card_purchase_s1.php";
			break;
			case "billing":
				this.location.href="http://www.eatandplaycard.com/card_purchase_s2.php";
			break;
			case "shipping":
				this.location.href="http://www.eatandplaycard.com/card_purchase_s3.php";
			break;
		}
	}
</script>

                         <!-- BEGIN STEP 2 -->
												<table border="0" cellpadding="0" cellspacing="3" width="550px">
													<tr>
													<td align="left" width="101" valign="middle"><img src="images/buy_step4.png" border="0" height="48" width="101">&nbsp;</td>
													<td>Finalize your order.</td>
													</tr>
											    </table>

                                                <table border="0" cellpadding="0" cellspacing="3" width="550px">
												<tr><td colspan="2">&nbsp;</td></tr>
													<tr>
													  <td><b style="font-size:14px;">Order Details</b><br />
													  Quantity Ordered: <?php echo $buy_quantity; ?><br />
													  Name of Product: Eat and Play Card <?php echo $buy_location; ?> <!--Orlando--><br /><br />
													  <?php echo "<div align='left'><a href='card_purchase_s1.php?change=1'><img src='images/btn_modifyinfo.png' border='0'></a></div><br>";
													  ?>
													  </td><td></td>
													</tr>
													<tr>
													  <td width="220"><b style="font-size:14px;">Billing Information</b></td>
													  <td><b style="font-size:14px;">Shipping Information</b></td>
													  <!--<td><b style="font-size:14px;">Billing Amount</b></td>-->
													</tr>
													<tr>
													  <td>
													  <?php echo $buy_firstname; ?>&nbsp;<?php echo $buy_lastname; ?><br />
													  <?php echo $buy_address1; ?><Br >
													  <?php if (!($buy_address2=="")) { echo $buy_address2 . "<br />";} ?>
													  <?php echo $buy_city . "";
													  		if($buy_country=="US" || $buy_country=="CA"){
													  		echo ", ".$buy_state . "  " . $buy_zip;} ?><br />
													  <?php echo $buy_country; ?><Br ><br />
													  <?php

													  echo "
													  <div align='left'><a href='card_purchase_s2.php?change=1'><img src='images/btn_modifyinfo.png' border='0'></a></div><br>";
													  ?>
													  </td>
													  <td valign="top">
<?php
if ($ship_option=="email_voucher")
  {
?>
                                                      <?php echo "<br />Voucher will be sent by email.<br><br>".$buy_email."<br><br>";
													  		echo "<div align='left'><a href='card_purchase_s2.php?change=1'><img src='images/btn_modifyinfo.png' border='0'></a></div><br>";
													  ?>
<?php
  }
else
  {
?>
													  <?php echo $ship_firstname; ?>&nbsp;<?php echo $ship_lastname; ?><br />
													  <?php echo $ship_address1; ?><Br >
													  <?php if (!($ship_address2=="")) { echo $ship_address2 . "<br />";} ?>
													  <?php echo $ship_city . ", " . $ship_state . "  " . $ship_zip; ?><br />
													  <?php echo $ship_country; ?><Br ><br />
													  <?php echo "<div align='left'><a href='card_purchase_s3.php?change=1'><img src='images/btn_modifyinfo.png' border='0'></a></div><br>"; ?>
<?php
  }
?>
													  </td>
													  <!--
													  <td valign="top">
													  <br />
													  $&nbsp;<?php echo $total_amount_text; ?>&nbsp;(US Funds)<Br >
												      <Br ><br />
													  </td>
													  -->
													</tr>
													<tr><td colspan="2">&nbsp;</td></tr>

													<tr>
													  <td><b style="font-size:14px;">Payment Method</b></td>
													  <td><b style="font-size:14px;">Billing Amount</b></td>
													</tr>

													<tr>
													<td>
													Credit Card Type: <?php echo $buy_cc_type; ?><br />
													Card Holder Name: <?php echo $buy_cc_nameoncard; ?><br />
													Credit Card Number: XXXX XXXX XXXX <?php echo $hide_no; ?><br />
													Expiry Date: <?php echo $buy_cc_expmonth . "/" . $buy_cc_expyear ?><br /><br />
													<?php echo "<div align='left'><a href='card_purchase_s2.php?change=1'><img src='images/btn_modifyinfo.png' border='0'></a></div><br>";
													  ?>
													</td>
													  <td valign="top">
													  <br />
													  $&nbsp;<?php echo $total_amount_text; ?>&nbsp;(US Funds) <?php if($ship_option=="physical_voucher"){echo "($4.95 S/H) ";
													  	switch($buy_quantity){
															case "1":
																echo "= $29.95";
															break;
															case "2":
																echo "= $54.95";
															break;
														}
													  } ?><Br >
												      <Br ><br />
													  </td>
													</tr>

													<tr><td colspan="2"><br />
													  By clicking on the purchase button, you will have confirmed your order and an email confirmation will be sent to you. Thank you for your order! Enjoy!
													  </td></tr>


												</table>
                         <!-- END STEP 2 -->
                         						<span style="font-family:arial;font-size:4px;"><br /><br /></span>
                                                <div align="center"><img src="images/buy_sep.gif" border="0" /></div>
                                                <span style="font-family:arial;font-size:4px;"><br /><br /></span>

                                                <div style="width:480px;text-align:right;"><input type="image" src="images/btn_purchase.png" border="0"></a></div>

                                                <br /><br />
			</form>
<?php
   }
?>
            <span style="font-family:arial;font-size:4px;"><br /></span>


			 </div>
		   </td>

		  </tr>
		</table>
  </div>


  <div id="footer1_blank">
	  <br>
	  <table width="790px" border="0" cellpadding="0" cellspacing="0">
	    <tr>
	      <td width="35%" valign="top" align="left">Copyright© 2009 All rights reserved. Eat and Play Card</td>
	      <td width="44%" valign="top" align="center"><a href="comingsoon.php?path=affiliates">Affiliates</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="trav_pro.php">Travel Professionals</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="terms.php">Terms and Conditions</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="privacy.php">Privacy</a></td>
          <td width="23%" valign="top" align="right"><a style="color:#FFFFFF;text-decoration:none;" href="http://www.cercamarketing.com/" target="newwindow">Powered by Cerca Marketing Inc.</a></td>
        </tr>
      </table>
  </div>
</div>
<script type="text/javascript">
var gaJsHost = (("http:" == document.location.protocol) ? "http://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-8921216-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>

<?php
function parseErrors($err_msg) {
  $new_error_string = "";
  $new_error_string = str_replace("~","<br />",$err_msg);
  return $new_error_string . "<br /><br />";
}

?>
