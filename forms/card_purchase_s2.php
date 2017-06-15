<?php include("validate_s1.php");

if ($error==false)
  {
	$_SESSION['buy_location']= $buy_location;
	$_SESSION['buy_quantity']= $buy_quantity;
  }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Card Purchase - Eat and Play Card: Take a bite out of vacation expenses</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="author" content="Cerca Marketing">
<link href="/css/eatandplaysub2.css" rel="stylesheet" type="text/css">

<script language="JavaScript" src="/scripts/common.js"></script>
<?php
$path = $_GET["path"];
$isie8=0;
?>
<!--[if lt IE 7]>
<script defer type="text/javascript" src="scripts/pngfix2.js"></script>
<![endif]-->

<!--[if gte IE 8]>
<?php
$isie8=1;
?>
<![endif]-->

<?php
if (!($isie8==1))
 {
?>
<script type="text/javascript"
        language="JavaScript1.2"
        src="/hm3/scripts/verbose/HM_Loader.js">
</script>
<?php
 }
else
 {
?>
<script type="text/javascript"
        language="JavaScript1.2"
        src="/hm3/scripts/verbose/HM_Loader8.js">
</script>
<?php
 }
?>

</head>
<body onLoad="window.scrollTo(0,0)">
<div align="center">
					  <table width="800px" border="0" cellpadding="0" cellspacing="0">
							<tr>
							  <td width="620px">&nbsp;</td>
							  <td width="183px">

							  </td>
							</tr>
					  </table>
  <div id="header1_sun_buycard">
					<div id="topmenu">
					  <table width="625px" height="35px" border="0" cellpadding="0" cellspacing="0">
						<tr>
						  <td height="35px"><a href="index.php"><img src="/images/mnu_home_off.png" border="0" height="35" width="125" onMouseOver="imgSwap(this)" onMouseOut="imgSwap(this)" /></a></td>
						  <td height="35px"><a href="about.php"><img src="/images/mnu_about_off.png" border="0" height="35" width="125" onMouseOver="imgSwap(this)" onMouseOut="imgSwap(this)" /></a></td>
						  <td height="35px"><img src="/images/mnu_dest_off.png" border="0" height="35" width="125"></td>
						  <td height="35px"><a href="contact.php"><img src="/images/mnu_contact_off.png" border="0" height="35" width="125" onMouseOver="imgSwap(this)" onMouseOut="imgSwap(this)" /></a></td>
						  <td height="35px"><a href="card_purchase_s0.php"><img src="/images/mnu_buy_off.png" border="0" height="35" width="125"/></a></td>
						</tr>
					  </table>
					</div>
  </div>
  <div id="contentbgsun">
		<span style="font-family:arial;font-size:4px;"><br /></span>
<?php
//******************************************************************************
//     IF THERE IS AN ERROR FROM STEP 1, SHOW THE INFO FROM STEP 1 AGAIN
//******************************************************************************

if ($error==true)
  {
?>
		<table width="800px" border="0" cellpadding="0" cellspacing="0">
		  <tr>
		   <td width="230px" valign="top" align="center"><!-- LEFT COLUMN -->
		      <span style="font-family:arial;font-size:4px;"><br /><br /></span>
                          <img src="images/buy_selection_logo.png" border="0" width="89" height="132" alt="Product Selection" />
					   <span style="font-family:arial;font-size:4px;"><br /><br /></span>
		   </td>
		   </td>
		   <td width="570px" valign="top">
			 <div id="about_blank">
			   <span style="font-family:arial-font-size:4px;"><br /></span>
			   <form method="POST" ACTION="card_purchase_s2.php">

                         <!-- BEGIN STEP 2 -->
												<table border="0" cellpadding="0" cellspacing="3" width="550px">
													<tr>
													<td align="right" width="35%" valign="middle"><img src="images/buy_step1.png" border="0" height="48" width="101">&nbsp;</td>
													<td>Please choose an Eat and Play Card destination and the number of cards required (2 max).</td>
													</tr>
													<tr><td colspan="2"><span style="color:#e01c3a;"><b>There was an error at step 1.</b></span></td></tr>
													<tr>
													<td align="right"><span id="contact"><b>Destination:</b></span></td>
													<td>

															<select name="buy_location">
															<?php
															if ($buy_location=="Orlando") {
															?>
																<option value="Orlando" SELECTED>Orlando&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
																<option value="New York City">New York City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
															<?php
															} else {
															?>
																<option value="Orlando">Orlando&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
																<option value="New York City" SELECTED>New York City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
															<?php
															}
															?>

															</select>

													</td>
													</tr>
													<tr>
													<td align="right"><span id="contact"><b>Quantity:</b></span></td>
													<td>
															<select name="buy_quantity">
																<?php
																	echo "<option value='" . $buy_quantity . "'>" . $buy_quantity . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>";
																?>
																<option value="1">1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
																<option value="2">2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
															</select>
													</td>
													</tr>
												</table>
												<div align="center"><p><em>(For volume purchases, please call us at 1-888-680-7109. Thank you!)</em></p></div>
                         <!-- END STEP 2 -->
                         						<span style="font-family:arial;font-size:4px;"><br /></span>
                                                <div align="center"><img src="images/buy_sep.gif" border="0" /></div>
                                                <span style="font-family:arial;font-size:4px;"><br /><br /></span>


                                                <div align="center"><input type="submit" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Go to Step 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" /></div>
			</form>
<?php
  }
else
  {

?>
<script type="text/javascript" language="javascript">
	function country_change(){
		if(document.getElementById('buy_country').value=="CA" || document.getElementById('buy_country').value=="US"){
			document.getElementById('stateprov').style.display="block";
		}else{
			document.getElementById('stateprov').style.display="none";
		}
	}
</script>
		<table width="800px" border="0" cellpadding="0" cellspacing="0">
		  <tr>
		   <td width="230px" valign="top" align="center"><!-- LEFT COLUMN -->
		      <p><span style="font-family:arial;font-size:4px;"><br />
              <br />
		        </span>
		        <img src="images/buy_billing_logo.png" border="0" width="108" height="135" alt="Billing Information" />	            </p>
		      <p><img src="images/howcard.PNG"></p>
		      <p><span style="font-family:arial;font-size:4px;"><br />
	          <br />
	          </span>
             </p></td>
	      </td>
		   <td width="570px" valign="top">
			 <div id="about_blank">
			   <span style="font-family:arial-font-size:4px;"><br /></span>
			   <?php
			   		$temp="";
					$temp=$_GET['change'];

			   		if($temp==1){

			   			echo "<form method='POST' action='card_purchase_s4.php?change=2'>";

					}else {
						echo "<form method='POST' action='card_purchase_s3.php'>";
					}

					?>
			        <input type="hidden" name="buy_location" value="<?php echo $buy_location; ?>">
			        <input type="hidden" name="buy_quantity" value="<?php echo $buy_quantity; ?>">
                    <input type="hidden" name="ship_option" value="<?php echo $ship_option; ?>">
                         <!-- BEGIN STEP 1 -->
												<table border="0" cellpadding="0" cellspacing="3" width="550px">
													<tr>
													<td align="right" width="35%" valign="middle"><img src="images/buy_step2.png" border="0" height="48" width="101">&nbsp;</td>
													<td>Please fill out all the fields below. Fields in <b>bold</b> are mandatory.</td>
													</tr>
													<tr>
													<td align="right"><span id="contact"><b>First Name:</b></span></td>
													<td><input type=text
															   size="30"
															   name="buy_firstname" id="buy_firstname"></td>
													</tr>
													<tr>
													<td align="right"><span id="contact"><b>Last Name:</b></span></td>
													<td><input type=text
															   size="30"
															   name="buy_lastname" id="buy_lastname"></td>
													</tr>
													<tr>
													<td align="right"><span id="contact"><b>Address:</b></span></td>
													<td><input type=text
															   size="30"
															   name="buy_address1" id="buy_address1"></td>
													</tr>
													<tr>
													<td align="right"><span id="contact">Address L2:</span></td>
													<td><input type=text
															   size="30"
															   name="buy_address2" id="buy_address2"></td>
													</tr>
													<tr>
													<td align="right"><span id="contact"><b>City:</b></span></td>
													<td><input type=text
															   size="30"
															   name="buy_city" id="buy_city"></td>
													</tr>
													<tr>
													<td align="right"><span id="contact"><b>Country:</b></span></td>
													<td><select id="buy_country" name="buy_country" onChange="country_change()">
															<option value="" SELECTED>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
															<option value="AF">Afghanistan</option>
															<option value="AL">Albania</option>
															<option value="DZ">Algeria</option>
															<option value="AS">American Samoa</option>
															<option value="AD">Andorra</option>
															<option value="AO">Angola</option>
															<option value="AI">Anguilla</option>
															<option value="AG">Antigua</option>
															<option value="AR">Argentina</option>
															<option value="AM">Armenia</option>
															<option value="AW">Aruba</option>
															<option value="AU">Australia</option>
															<option value="AT">Austria</option>
															<option value="AZ">Azerbaijan</option>
															<option value="BS">Bahamas</option>
															<option value="BH">Bahrain</option>
															<option value="BD">Bangladesh</option>
															<option value="BB">Barbados</option>
															<option value="BY">Belarus</option>
															<option value="BE">Belgium</option>
															<option value="BZ">Belize</option>
															<option value="BJ">Benin</option>
															<option value="BM">Bermuda</option>
															<option value="BT">Bhutan</option>
															<option value="BO">Bolivia</option>
															<option value="BA">Bosnia</option>
															<option value="BW">Botswana</option>
															<option value="BR">Brazil</option>
															<option value="BN">Brunei Darussalam</option>
															<option value="BG">Bulgaria</option>
															<option value="BF">Burkina Faso</option>
															<option value="BI">Burundi</option>
															<option value="KH">Cambodia</option>
															<option value="Cameroon">Cameroon</option>
															<option value="CA">Canada</option>
															<option value="CV">Cape Verde</option>
															<option value="CF">Central African Republic</option>
															<option value="TD">Chad</option>
															<option value="CL">Chile</option>
															<option value="CN">China</option>
															<option value="CO">Colombia</option>
															<option value="KM">Comoros</option>
															<option value="CG">Congo</option>
															<option value="CR">Costa Rica</option>
															<option value="HR">Croatia</option>
															<option value="CU">Cuba</option>
															<option value="CY">Cyprus</option>
															<option value="CZ">Czech Republic</option>
															<option value="DK">Denmark</option>
															<option value="DJ">Djibouti</option>
															<option value="DM">Dominica</option>
															<option value="DO">Dominican Republic</option>
															<option value="TL">East Timor</option>
															<option value="EC">Ecuador</option>
															<option value="EG">Egypt</option>
															<option value="SV">El Salvador</option>
															<option value="GQ">Equatorial Guina</option>
															<option value="ER">Eritrea</option>
															<option value="EE">Estonia</option>
															<option value="ET">Ethiopia</option>
															<option value="FO">Faroe Islands</option>
															<option value="FJ">Fiji</option>
															<option value="FI">Finland</option>
															<option value="FR">France</option>
															<option value="GF">Fench Guiana</option>
															<option value="FM">French Metropolitan</option>
															<option value="PF">French Polynesia</option>
															<option value="GA">Gabon</option>
															<option value="GM">Gambia</option>
															<option value="GE">Georgia</option>
															<option value="DE">Germany</option>
															<option value="GH">Ghana</option>
															<option value="GR">Greece</option>
															<option value="GL">Greenland</option>
															<option value="GD">Grenada</option>
															<option value="GP">Guadeloupe</option>
															<option value="GU">Guam</option>
															<option value="GT">Guatemala</option>
															<option value="GN">Guinea</option>
															<option value="GW">Guinea-Bissau</option>
															<option value="GY">Guyana</option>
															<option value="HT">Haiti</option>
															<option value="HS">Holy See</option>
															<option value="HN">Honduras</option>
															<option value="HK">Hong Kong</option>
															<option value="HU">Hungary</option>
															<option value="IS">Iceland</option>
															<option value="IN">India</option>
															<option value="ID">Indonesia</option>
															<option value="IR">Iran</option>
															<option value="IQ">Iraq</option>
															<option value="IE">Ireland</option>
															<option value="IL">Israel</option>
															<option value="IT">Italy</option>
															<option value="JM">Jamaica</option>
															<option value="JP">Japan</option>
															<option value="JO">Jordan</option>
															<option value="KZ">Kazakhstan</option>
															<option value="KE">Kenya</option>
															<option value="KI">Kiribati</option>
															<option value="KR">Korea</option>
															<option value="KW">Kuwait</option>
															<option value="KG">Kyrgyzstan</option>
															<option value="LA">Laos</option>
															<option value="LV">Latvia</option>
															<option value="LB">Lebanon</option>
															<option value="LS">Lesotho</option>
															<option value="LR">Liberia</option>
															<option value="LY">Libya</option>
															<option value="LI">Liechtenstein</option>
															<option value="LT">Lithuania</option>
															<option value="LU">Luxembourg</option>
															<option value="MO">Macau</option>
															<option value="MK">Macedonia</option>
															<option value="MG">Madagascar</option>
															<option value="MW">Malawi</option>
															<option value="MY">Malaysia</option>
															<option value="MV">Maldives</option>
															<option value="ML">Mali</option>
															<option value="MT">Malta</option>
															<option value="MH">Marshall Islands</option>
															<option value="MQ">Martinique</option>
															<option value="MR">Mauritania</option>
															<option value="MU">Mauritius</option>
															<option value="MX">Mexico</option>
															<option value="FM">Micronesia</option>
															<option value="MD">Moldova</option>
															<option value="MC">Monaco</option>
															<option value="MN">Mongolia</option>
															<option value="MS">Montenegro</option>
															<option value="MS">Montserrat</option>
															<option value="MA">Morocco</option>
															<option value="MZ">Mozambique</option>
															<option value="MM">Myanmar</option>
															<option value="NA">Namibia</option>
															<option value="NR">Nauru</option>
															<option value="NP">Nepal</option>
															<option value="NL">Netherlands</option>
															<option value="NC">New Caledonia</option>
															<option value="NZ">New Zealand</option>
															<option value="NI">Nicaragua</option>
															<option value="NE">Niger</option>
															<option value="NG">Nigeria</option>
															<option value="MP">Northern Mariana Islands</option>
															<option value="NO">Norway</option>
															<option value="OM">Oman</option>
															<option value="PK">Pakistan</option>
															<option value="PW">Palau</option>
															<option value="PA">Panama</option>
															<option value="PG">Papua New Guinea</option>
															<option value="PY">Paraguay</option>
															<option value="PE">Peru</option>
															<option value="PH">Philippines</option>
															<option value="PN">Pitcairn Island</option>
															<option value="PL">Poland</option>
															<option value="PT">Portugal</option>
															<option value="PR">Puerto Rico</option>
															<option value="QA">Qatar</option>
															<option value="RE">Reunion Island</option>
															<option value="RO">Romania</option>
															<option value="RU">Russia</option>
															<option value="RW">Rwanda</option>
															<option value="KN">Saint Kitts</option>
															<option value="LC">Saint Lucia</option>
															<option value="VC">Saint Vincent</option>
															<option value="WS">Samoa</option>
															<option value="SM">San Marino</option>
															<option value="ST">Sao Tome</option>
															<option value="SA">Saudi Arabia</option>
															<option value="SN">Senegal</option>
															<option value="CS">Serbia</option>
															<option value="SC">Seychelles</option>
															<option value="SL">Sierra Leone</option>
															<option value="SG">Singapore</option>
															<option value="SK">Slovakia</option>
															<option value="SB">Solomon Islands</option>
															<option value="SO">Somalia</option>
															<option value="ZA">South Africa</option>
															<option value="ES">Spain</option>
															<option value="LK">Sri Lanka</option>
															<option value="SD">Sudan</option>
															<option value="SR">Suriname</option>
															<option value="SZ">Swaziland</option>
															<option value="SE">Sweden</option>
															<option value="CH">Switzerland</option>
															<option value="SY">Syria</option>
															<option value="TW">Taiwan</option>
															<option value="TJ">Tajikistan</option>
															<option value="TZ">Tanzania</option>
															<option value="TH">Thailand</option>
															<option value="TG">Togo</option>
															<option value="TO">Tonga</option>
															<option value="TT">Trinidad</option>
															<option value="TN">Tunisia</option>
															<option value="TR">Turkey</option>
															<option value="TM">Turkmenistan</option>
															<option value="TV">Tuvalu</option>
															<option value="UG">Uganda</option>
															<option value="UA">Ukraine</option>
															<option value="AE">United Arab Emriates</option>
															<option value="GB">United Kingdom</option>
															<option value="US">USA</option>
															<option value="UY">Uruguay</option>
															<option value="UZ">Uzbekistan</option>
															<option value="VU">Vanuatu</option>
															<option value="VE">Venezuela</option>
															<option value="VN">Vietnam</option>
															<option value="VG">Virgin Islands(British)</option>
															<option value="VI">Virgin Islands(US)</option>
															<option value="YE">Yemen</option>
															<option value="ZM">Zambia</option>
															<option value="ZW">Zimbabwe</option>

													    </select></td>
													</tr></table>
													<div id="stateprov" style="display:none;">
													<table border="0" cellpadding="0" cellspacing="3" width="550px">
													<tr>
													<td align="right" width="190"><span id="contact"><b>State/Province:</b></span></td>
													<td><select name="buy_state" id="buy_state">
														<optgroup label="Canadian Provinces">
														<option value="AB">Alberta</option>
														<option value="BC">British Columbia</option>
														<option value="MB">Manitoba</option>
														<option value="NB">New Brunswick</option>
														<option value="NF">Newfoundland</option>
														<option value="NT">Northwest Territories</option>
														<option value="NS">Nova Scotia</option>
														<option value="NU">Nunavut</option>
														<option value="ON">Ontario</option>
														<option value="PE">Prince Edward Island</option>
														<option value="QC">Quebec</option>
														<option value="SK">Saskatchewan</option>
														<option value="YT">Yukon Territory</option>
														</optgroup>
														<optgroup label="U.S. States">
														<option value="AK">Alaska</option>
														<option value="AL">Alabama</option>
														<option value="AR">Arkansas</option>
														<option value="AZ">Arizona</option>
														<option value="CA">California</option>
														<option value="CO">Colorado</option>
														<option value="CT">Connecticut</option>
														<option value="DC">District of Columbia</option>
														<option value="DE">Delaware</option>
														<option value="FL">Florida</option>
														<option value="GA">Georgia</option>
														<option value="HI">Hawaii</option>
														<option value="IA">Iowa</option>
														<option value="ID">Idaho</option>
														<option value="IL">Illinois</option>
														<option value="IN">Indiana</option>
														<option value="KS">Kansas</option>
														<option value="KY">Kentucky</option>
														<option value="LA">Louisiana</option>
														<option value="MA">Massachusetts</option>
														<option value="MD">Maryland</option>
														<option value="ME">Maine</option>
														<option value="MI">Michigan</option>
														<option value="MN">Minnesota</option>
														<option value="MO">Missouri</option>
														<option value="MS">Mississippi</option>
														<option value="MT">Montana</option>
														<option value="NC">North Carolina</option>
														<option value="ND">North Dakota</option>
														<option value="NE">Nebraska</option>
														<option value="NH">New Hampshire</option>
														<option value="NJ">New Jersey</option>
														<option value="NM">New Mexico</option>
														<option value="NV">Nevada</option>
														<option value="NY">New York</option>
														<option value="OH">Ohio</option>
														<option value="OK">Oklahoma</option>
														<option value="OR">Oregon</option>
														<option value="PA">Pennsylvania</option>
														<option value="PR">Puerto Rico</option>
														<option value="RI">Rhode Island</option>
														<option value="SC">South Carolina</option>
														<option value="SD">South Dakota</option>
														<option value="TN">Tennessee</option>
														<option value="TX">Texas</option>
														<option value="UT">Utah</option>
														<option value="VA">Virginia</option>
														<option value="VT">Vermont</option>
														<option value="WA">Washington</option>
														<option value="WI">Wisconsin</option>
														<option value="WV">West Virginia</option>
														<option value="WY">Wyoming</option>

														</optgroup>
														</select>
															   </td>
													</tr>
													</table>
													</div>
													<table border="0" cellpadding="0" cellspacing="3" width="550px">
													<tr>
													<td align="right"><span id="contact"><b>ZIP/Postal Code:</b></span></td>
													<td><input type=text
															   size="15"
															   name="buy_zip" id="buy_zip"></td>
													</tr>
													<tr>
													<td align="right"><span id="contact"><b>Daytime Phone:</b></span></td>
													<td><input type=text
															   size="20"
															   name="buy_phone" id="buy_phone"></td>
													</tr>
													<tr>
													<td align="right"><span id="contact"><b>Email:</b></span></td>
													<td><input type=text
															   size="30"
															   name="buy_email" id="buy_email"></td>
													</tr>
													<tr>
													<td align="right"><span id="contact"><b>Verify Email:</b></span></td>
													<td><input type=text
															   size="30"
															   name="buy_email_verify" id="buy_email_verify"></td>
													</tr>
												</table>
                         <!-- END STEP 1 -->

                         						<span style="font-family:arial;font-size:4px;"><br /><br /></span>
                                                <div align="center"><img src="images/buy_sep.gif" border="0" /></div>
                                                <span style="font-family:arial;font-size:4px;"><br /><br /></span>
                                                <br /><br />

                         <!-- BEGIN STEP 2 -->
												<table border="0" cellpadding="0" cellspacing="3" width="550px">
													<tr>
													<td align="right"><span id="contact"><b>Credit Card Type:</b></span></td>
													<td>
													<select name="buy_cc_type" id="buy_cc_type">
																 <option value="Visa">Visa</option>
											                     <option value="MasterCard">Master Card</option></select>
											        </td>
													</tr>
													<tr>
													<td align="right"><span id="contact"><b>Credit Card Number:</b></span></td>
													<td><input type=text
															   size="30"
															   name="buy_cc_num" id="buy_cc_num"></td>
													</tr>
													<tr>
													<td align="right"><span id="contact"><b>Name on Card:</b></span></td>
													<td><input type=text
															   size="30"
															   name="buy_cc_nameoncard" id="buy_cc_nameoncard"></td>
													</tr>
													<tr>
													<td align="right"><span id="contact"><b>Card Expiry:</b></span></td>
													<td><select name="buy_cc_expmonth" id="buy_cc_expmonth">
													    <option value="01">01 (Jan)</option>
													    <option value="02">02 (Feb)</option>
													    <option value="03">03 (Mar)</option>
													    <option value="04">04 (Apr)</option>
													    <option value="05">05 (May)</option>
													    <option value="06">06 (Jun)</option>
													    <option value="07">07 (Jul)</option>
													    <option value="08">08 (Aug)</option>
													    <option value="09">09 (Sep)</option>
													    <option value="10">10 (Oct)</option>
													    <option value="11">11 (Nov)</option>
													    <option value="12">12 (Dec)</option>
													    </select>&nbsp;Month
													    &nbsp;&nbsp;
														<select name="buy_cc_expyear" id="buy_cc_expyear">
													    <option value="2011">2011</option>
													    <option value="2012">2012</option>
													    <option value="2013">2013</option>
													    <option value="2014">2014</option>
													    <option value="2015">2015</option>
													    <option value="2016">2016</option>
													    <option value="2017">2017</option>
													    <option value="2018">2018</option>
													    <option value="2019">2019</option>
													    <option value="2020">2020</option>
													    <option value="2021">2021</option>
													    <option value="2022">2022</option>
													    <option value="2023">2023</option>
													    <option value="2023">2024</option>
													    <option value="2023">2025</option>
													    </select>&nbsp;Year


													</td>
													</tr>
													<tr>
													<td align="right"><span id="contact"><b>Security Code:</b></span></td>
													<td><input type=text
															   size="8"
															   maxlength="3"
															   name="buy_cc_cvv" id="buy_cc_cvv">&nbsp;<a style="color:#ffffff;" href="#" onClick="window.open('images/visa_cvv2.jpg',  'open_window', 'menubar=no,toolbar=no,location=no,directories=no,status=no,scrollbars=no,resizable=no,width=315,height=260,left=250,top=250');">what is it?</a></td>
													</tr>
													<tr><td colspan="2">&nbsp;</td></tr>

												</table>
                         <!-- END STEP 2 -->
                         						<span style="font-family:arial;font-size:4px;"><br /><br /></span>
                                                <div align="center"><img src="images/buy_sep.gif" border="0" /></div>
                                                <span style="font-family:arial;font-size:4px;"><br /><br /></span>
                                                <br /><br />

                                                <div align="center"><input type="submit" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Go to Step 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" /></div>
                                                <br /><Br />

			</form>
			 <script type="text/javascript">
		   	function set_variables(firstname,lastname,address1,city,country,state,zipcode,phone,email,cardtype,cardno,cardname,cardexpM,cardexpY,cardsec)
			{
				document.getElementById('buy_firstname').value=firstname;
				document.getElementById('buy_lastname').value=lastname;
				document.getElementById('buy_address1').value=address1;

				document.getElementById('buy_city').value=city;
				for(i=0;i<document.getElementById('buy_country').length;i++){
					if(document.getElementById('buy_country').options[i].value==country){
						document.getElementById('buy_country').selectedIndex=i;
					}
				}
				for(i=0;i<document.getElementById('buy_state').length;i++){
					if(document.getElementById('buy_state').options[i].value==state){
						document.getElementById('buy_state').selectedIndex=i;
					}
				}
				document.getElementById('buy_zip').value=zipcode;
				document.getElementById('buy_phone').value=phone;
				document.getElementById('buy_email').value=email;
				document.getElementById('buy_email_verify').value=email;

				document.getElementById('buy_cc_type').value=cardtype;
				document.getElementById('buy_cc_num').value=cardno;
				document.getElementById('buy_cc_nameoncard').value=cardname;
				document.getElementById('buy_cc_expmonth').value=cardexpM;
				document.getElementById('buy_cc_expyear').value=cardexpY;
				document.getElementById('buy_cc_cvv').value=cardsec;
			}
		   </script>
		   <?php
		   	if($temp==1){
				echo "<SCRIPT LANGUAGE=\"javascript\">";
						echo "set_variables(
						'".$_SESSION['buy_firstname']."',
						'".$_SESSION['buy_lastname']."',
						'".$_SESSION['buy_address1']."',
						'".$_SESSION['buy_city']."',
						'".$_SESSION['buy_country']."',
						'".$_SESSION['buy_state']."',
						'".$_SESSION['buy_zip']."',
						'".$_SESSION['buy_phone']."',
						'".$_SESSION['buy_email']."',
						'".$_SESSION['buy_cc_type']."',
						'".$_SESSION['buy_cc_num']."',
						'".$_SESSION['buy_cc_nameoncard']."',
						'".$_SESSION['buy_cc_expmonth']."',
						'".$_SESSION['buy_cc_expyear']."',
						'".$_SESSION['buy_cc_cvv']."');";
						echo "</SCRIPT>";
			}
			?>
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
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-8921216-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>