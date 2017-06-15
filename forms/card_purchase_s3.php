<?php


	include("validate_s2.php");


if ($error==false)
  {

	//Securing CC Information
	$_SESSION["buy_cc_type"]= $buy_cc_type;
	$_SESSION["buy_cc_num"]= $buy_cc_num;
	$_SESSION["buy_cc_nameoncard"]= $buy_cc_nameoncard;
	$_SESSION["buy_cc_expmonth"]= $buy_cc_expmonth;
	$_SESSION["buy_cc_expyear"]= $buy_cc_expyear;
	$_SESSION["buy_cc_cvv"]= $buy_cc_cvv;

	$_SESSION['buy_firstname']= $buy_firstname;
	$_SESSION['buy_lastname']= $buy_lastname;
	$_SESSION['buy_address1']= $buy_address1;
	$_SESSION['buy_address2']= $buy_address2;
	$_SESSION['buy_city']= $buy_city;
	$_SESSION['buy_state']= $buy_state;
	$_SESSION['buy_country']= $buy_country;
	$_SESSION['buy_zip']= $buy_zip;
	$_SESSION['buy_email']= $buy_email;
	$_SESSION['buy_phone']= $buy_phone;

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
//     IF THERE IS AN ERROR FROM STEP 2, SHOW THE INFO FROM STEP 2 AGAIN
//******************************************************************************
?>
<script type="text/javascript" language="javascript">
	function country_change(){
		if(document.getElementById('country').value=="CA" || document.getElementById('country').value=="US"){
			document.getElementById('stateprov').style.display="block";
		}else{
			document.getElementById('stateprov').style.display="none";
		}
	}
</script>
<?php
if ($error==true)
  {

print "<table width='800px' border='0' cellpadding='0' cellspacing='0'>\n
		  <tr>\n
		   <td width='230px' valign='top' align='center'><!-- LEFT COLUMN -->\n
		      <span style='font-family:arial;font-size:4px;'><br /><br /></span>\n
                          <img src='images/buy_billing_logo.png' border='0' width='108' height='135' alt='Billing Information' />\n
					   <span style='font-family:arial;font-size:4px;'><br /><br /></span>\n
		   </td>\n
		   </td>\n
		   <td width='570px' valign='top'>\n
			 <div id='about_blank'>\n
			   <span style='font-family:arial-font-size:4px;'><br /></span>\n
			   <form method='POST' ACTION='http://www.eatandplaycard.com/card_purchase_s3.php'>\n
			        <input type='hidden' name='buy_location' value='" . $buy_location . "'>\n
			        <input type='hidden' name='buy_quantity' value='" . $buy_quantity . "'>\n
                    <input type='hidden' name='ship_option' value='" . $ship_option . "'>\n
                         <!-- BEGIN STEP 1 -->\n
                                                 <!-- ERROR MESSAGES -->\n
												 <div style='margin-left:50px;text-align:left;'>\n
                                                      <b class='errred'>The following errors were encountered:</b><br />\n" . parseErrors($err_msg) . "\n
												 </div>\n
												 <!-- END ERROR MESSAGES -->\n

												<table border='0' cellpadding='0' cellspacing='3' width='550px'>\n
													<tr>\n
													<td align='right' width='35%' valign='middle'><img src='images/buy_step2.png' border='0' height='48' width='101'>&nbsp;</td>\n
													<td>Please fill out all the fields below. Fields in <b>bold</b> are mandatory.</td>\n
													</tr>\n
													<tr>\n
													<td align='right'><span id='contact'><b>First Name:</b></span></td>\n
													<td><input type=text
															   size='30'
															   name='buy_firstname' value='" . $buy_firstname . "'></td>\n
													</tr>\n
													<tr>\n
													<td align='right'><span id='contact'><b>Last Name:</b></span></td>\n
													<td><input type=text
															   size='30'
															   name='buy_lastname' value='" . $buy_lastname . "'></td>\n
													</tr>\n
													<tr>\n
													<td align='right'><span id='contact'><b>Address:</b></span></td>\n
													<td><input type=text
															   size='30'
															   name='buy_address1' value='" . $buy_address1 . "'></td>\n
													</tr>\n
													<tr>\n
													<td align='right'><span id='contact'>Address L2:</span></td>\n
													<td><input type=text
															   size='30'
															   name='buy_address2' value='" . $buy_address2 . "'></td>\n
													</tr>\n
													<tr>\n
													<td align='right'><span id='contact'><b>City:</b></span></td>\n
													<td><input type=text
															   size='30'
															   name='buy_city' value='" . $buy_city . "'></td>\n
													</tr>\n

													<tr>
													<td align=\"right\"><span id=\"contact\"><b>Country:</b></span></td>
													<td><select id=\"country\" name=\"buy_country\" onChange=\"country_change()\">
															<option value=\"\" SELECTED>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
															<option value=\"AF\">Afghanistan</option>
															<option value=\"AL\">Albania</option>
															<option value=\"DZ\">Algeria</option>
															<option value=\"AS\">American Samoa</option>
															<option value=\"AD\">Andorra</option>
															<option value=\"AO\">Angola</option>
															<option value=\"AI\">Anguilla</option>
															<option value=\"AG\">Antigua</option>
															<option value=\"AR\">Argentina</option>
															<option value=\"AM\">Armenia</option>
															<option value=\"AW\">Aruba</option>
															<option value=\"AU\">Australia</option>
															<option value=\"AT\">Austria</option>
															<option value=\"AZ\">Azerbaijan</option>
															<option value=\"BS\">Bahamas</option>
															<option value=\"BH\">Bahrain</option>
															<option value=\"BD\">Bangladesh</option>
															<option value=\"BB\">Barbados</option>
															<option value=\"BY\">Belarus</option>
															<option value=\"BE\">Belgium</option>
															<option value=\"BZ\">Belize</option>
															<option value=\"BJ\">Benin</option>
															<option value=\"BM\">Bermuda</option>
															<option value=\"BT\">Bhutan</option>
															<option value=\"BO\">Bolivia</option>
															<option value=\"BA\">Bosnia</option>
															<option value=\"BW\">Botswana</option>
															<option value=\"BR\">Brazil</option>
															<option value=\"BN\">Brunei Darussalam</option>
															<option value=\"BG\">Bulgaria</option>
															<option value=\"BF\">Burkina Faso</option>
															<option value=\"BI\">Burundi</option>
															<option value=\"KH\">Cambodia</option>
															<option value=\"Cameroon\">Cameroon</option>
															<option value=\"CA\">Canada</option>
															<option value=\"CV\">Cape Verde</option>
															<option value=\"CF\">Central African Republic</option>
															<option value=\"TD\">Chad</option>
															<option value=\"CL\">Chile</option>
															<option value=\"CN\">China</option>
															<option value=\"CO\">Colombia</option>
															<option value=\"KM\">Comoros</option>
															<option value=\"CG\">Congo</option>
															<option value=\"CR\">Costa Rica</option>
															<option value=\"HR\">Croatia</option>
															<option value=\"CU\">Cuba</option>
															<option value=\"CY\">Cyprus</option>
															<option value=\"CZ\">Czech Republic</option>
															<option value=\"DK\">Denmark</option>
															<option value=\"DJ\">Djibouti</option>
															<option value=\"DM\">Dominica</option>
															<option value=\"DO\">Dominican Republic</option>
															<option value=\"TL\">East Timor</option>
															<option value=\"EC\">Ecuador</option>
															<option value=\"EG\">Egypt</option>
															<option value=\"SV\">El Salvador</option>
															<option value=\"GQ\">Equatorial Guina</option>
															<option value=\"ER\">Eritrea</option>
															<option value=\"EE\">Estonia</option>
															<option value=\"ET\">Ethiopia</option>
															<option value=\"FO\">Faroe Islands</option>
															<option value=\"FJ\">Fiji</option>
															<option value=\"FI\">Finland</option>
															<option value=\"FR\">France</option>
															<option value=\"GF\">Fench Guiana</option>
															<option value=\"FM\">French Metropolitan</option>
															<option value=\"PF\">French Polynesia</option>
															<option value=\"GA\">Gabon</option>
															<option value=\"GM\">Gambia</option>
															<option value=\"GE\">Georgia</option>
															<option value=\"DE\">Germany</option>
															<option value=\"GH\">Ghana</option>
															<option value=\"GR\">Greece</option>
															<option value=\"GL\">Greenland</option>
															<option value=\"GD\">Grenada</option>
															<option value=\"GP\">Guadeloupe</option>
															<option value=\"GU\">Guam</option>

															<option value=\"GT\">Guatemala</option>
															<option value=\"GN\">Guinea</option>
															<option value=\"GW\">Guinea-Bissau</option>
															<option value=\"GY\">Guyana</option>
															<option value=\"HT\">Haiti</option>
															<option value=\"HS\">Holy See</option>
															<option value=\"HN\">Honduras</option>
															<option value=\"HK\">Hong Kong</option>
															<option value=\"HU\">Hungary</option>
															<option value=\"IS\">Iceland</option>
															<option value=\"IN\">India</option>
															<option value=\"ID\">Indonesia</option>
															<option value=\"IR\">Iran</option>
															<option value=\"IQ\">Iraq</option>
															<option value=\"IE\">Ireland</option>
															<option value=\"IL\">Israel</option>
															<option value=\"IT\">Italy</option>
															<option value=\"JM\">Jamaica</option>
															<option value=\"JP\">Japan</option>
															<option value=\"JO\">Jordan</option>
															<option value=\"KZ\">Kazakhstan</option>
															<option value=\"KE\">Kenya</option>
															<option value=\"KI\">Kiribati</option>
															<option value=\"KR\">Korea</option>
															<option value=\"KW\">Kuwait</option>
															<option value=\"KG\">Kyrgyzstan</option>
															<option value=\"LA\">Laos</option>
															<option value=\"LV\">Latvia</option>
															<option value=\"LB\">Lebanon</option>
															<option value=\"LS\">Lesotho</option>
															<option value=\"LR\">Liberia</option>
															<option value=\"LY\">Libya</option>
															<option value=\"LI\">Liechtenstein</option>
															<option value=\"LT\">Lithuania</option>
															<option value=\"LU\">Luxembourg</option>
															<option value=\"MO\">Macau</option>
															<option value=\"MK\">Macedonia</option>
															<option value=\"MG\">Madagascar</option>
															<option value=\"MW\">Malawi</option>
															<option value=\"MY\">Malaysia</option>
															<option value=\"MV\">Maldives</option>
															<option value=\"ML\">Mali</option>
															<option value=\"MT\">Malta</option>
															<option value=\"MH\">Marshall Islands</option>
															<option value=\"MQ\">Martinique</option>
															<option value=\"MR\">Mauritania</option>
															<option value=\"MU\">Mauritius</option>
															<option value=\"MX\">Mexico</option>
															<option value=\"FM\">Micronesia</option>
															<option value=\"MD\">Moldova</option>
															<option value=\"MC\">Monaco</option>
															<option value=\"MN\">Mongolia</option>
															<option value=\"MS\">Montenegro</option>
															<option value=\"MS\">Montserrat</option>
															<option value=\"MA\">Morocco</option>
															<option value=\"MZ\">Mozambique</option>
															<option value=\"MM\">Myanmar</option>
															<option value=\"NA\">Namibia</option>
															<option value=\"NR\">Nauru</option>
															<option value=\"NP\">Nepal</option>
															<option value=\"NL\">Netherlands</option>
															<option value=\"NC\">New Caledonia</option>
															<option value=\"NZ\">New Zealand</option>
															<option value=\"NI\">Nicaragua</option>
															<option value=\"NE\">Niger</option>
															<option value=\"NG\">Nigeria</option>
															<option value=\"MP\">Northern Mariana Islands</option>
															<option value=\"NO\">Norway</option>
															<option value=\"OM\">Oman</option>
															<option value=\"PK\">Pakistan</option>
															<option value=\"PW\">Palau</option>
															<option value=\"PA\">Panama</option>
															<option value=\"PG\">Papua New Guinea</option>
															<option value=\"PY\">Paraguay</option>
															<option value=\"PE\">Peru</option>
															<option value=\"PH\">Philippines</option>
															<option value=\"PN\">Pitcairn Island</option>
															<option value=\"PL\">Poland</option>
															<option value=\"PT\">Portugal</option>
															<option value=\"PR\">Puerto Rico</option>
															<option value=\"QA\">Qatar</option>
															<option value=\"RE\">Reunion Island</option>
															<option value=\"RO\">Romania</option>
															<option value=\"RU\">Russia</option>
															<option value=\"RW\">Rwanda</option>
															<option value=\"KN\">Saint Kitts</option>
															<option value=\"LC\">Saint Lucia</option>
															<option value=\"VC\">Saint Vincent</option>
															<option value=\"WS\">Samoa</option>
															<option value=\"SM\">San Marino</option>
															<option value=\"ST\">Sao Tome</option>
															<option value=\"SA\">Saudi Arabia</option>
															<option value=\"SN\">Senegal</option>
															<option value=\"CS\">Serbia</option>
															<option value=\"SC\">Seychelles</option>
															<option value=\"SL\">Sierra Leone</option>
															<option value=\"SG\">Singapore</option>
															<option value=\"SK\">Slovakia</option>
															<option value=\"SB\">Solomon Islands</option>
															<option value=\"SO\">Somalia</option>
															<option value=\"ZA\">South Africa</option>
															<option value=\"ES\">Spain</option>
															<option value=\"LK\">Sri Lanka</option>
															<option value=\"SD\">Sudan</option>
															<option value=\"SR\">Suriname</option>
															<option value=\"SZ\">Swaziland</option>
															<option value=\"SE\">Sweden</option>
															<option value=\"CH\">Switzerland</option>
															<option value=\"SY\">Syria</option>
															<option value=\"TW\">Taiwan</option>
															<option value=\"TJ\">Tajikistan</option>
															<option value=\"TZ\">Tanzania</option>
															<option value=\"TH\">Thailand</option>
															<option value=\"TG\">Togo</option>
															<option value=\"TO\">Tonga</option>
															<option value=\"TT\">Trinidad</option>
															<option value=\"TN\">Tunisia</option>
															<option value=\"TR\">Turkey</option>
															<option value=\"TM\">Turkmenistan</option>
															<option value=\"TV\">Tuvalu</option>
															<option value=\"UG\">Uganda</option>
															<option value=\"UA\">Ukraine</option>
															<option value=\"AE\">United Arab Emriates</option>
															<option value=\"GB\">United Kingdom</option>
															<option value=\"US\">USA</option>
															<option value=\"UY\">Uruguay</option>
															<option value=\"UZ\">Uzbekistan</option>
															<option value=\"VU\">Vanuatu</option>
															<option value=\"VE\">Venezuela</option>
															<option value=\"VN\">Vietnam</option>
															<option value=\"VG\">Virgin Islands(British)</option>
															<option value=\"VI\">Virgin Islands(US)</option>
															<option value=\"YE\">Yemen</option>
															<option value=\"ZM\">Zambia</option>
															<option value=\"ZW\">Zimbabwe</option>

													    </select></td>
													</tr></table>
													<div id=\"stateprov\" style=\"display:none;\">
													<table border=\"0\" cellpadding=\"0\" cellspacing=\"3\" width=\"550px\">
													<tr>\n
													<td align='right' width='190'><span id='contact'><b>State/Province:</b></span></td>\n
													<td><select name='buy_state'>\n
														<optgroup label='Canadian Provinces'>
														<option value='AB'>Alberta</option>
														<option value='BC'>British Columbia</option>
														<option value='MB'>Manitoba</option>
														<option value='NB'>New Brunswick</option>
														<option value='NF'>Newfoundland</option>
														<option value='NT'>Northwest Territories</option>
														<option value='NS'>Nova Scotia</option>
														<option value='NU'>Nunavut</option>
														<option value='ON'>Ontario</option>
														<option value='PE'>Prince Edward Island</option>
														<option value='QC'>Quebec</option>
														<option value='SK'>Saskatchewan</option>
														<option value='YT'>Yukon Territory</option>
														</optgroup>
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
														</optgroup>\n
														</select>\n
															   </td>\n
													</tr>\n
													</table>
													</div>
													<table border=\"0\" cellpadding=\"0\" cellspacing=\"3\" width=\"550px\">
													<tr>\n
													<td align='right'><span id='contact'><b>ZIP/Postal Code:</b></span></td>\n
													<td><input type=text
															   size='15'
															   name='buy_zip' value='" . $buy_zip . "'></td>\n
													</tr>\n
													<tr>\n
													<td align='right'><span id='contact'><b>Daytime Phone:</b></span></td>\n
													<td><input type=text
															   size='20'
															   name='buy_phone' value='" . $buy_phone . "'></td>\n
													</tr>\n
													<tr>\n
													<td align='right'><span id='contact'><b>Email:</b></span></td>\n
													<td><input type=text
															   size='30'
															   name='buy_email' value='" . $buy_email . "'></td>\n
													</tr>\n
													<tr>\n
													<td align='right'><span id='contact'><b>Verify Email:</b></span></td>\n
													<td><input type=text
															   size='30'
															   name='buy_email_verify' value='" . $buy_email_verify . "'></td>\n
													</tr>\n
												</table>\n
                         <!-- END STEP 1 -->

                         						<span style='font-family:arial;font-size:4px;'><br /><br /></span>\n
                                                <div align='center'><img src='images/buy_sep.gif' border='0' /></div>\n
                                                <span style='font-family:arial;font-size:4px;'><br /><br /></span>\n
                                                <br /><br />\n

                         <!-- BEGIN STEP 2 -->
												<table border='0' cellpadding='0' cellspacing='3' width='550px'>\n
													<tr>\n
													<td align='right'><span id='contact'><b>Credit Card Type:</b></span></td>\n
													<td>\n
													<select name='buy_cc_type'>\n
																 <option value='Visa'>Visa</option>\n
											                     <option value='MasterCard'>Master Card</option></select>\n
											        </td>\n
													</tr>\n
													<tr>\n
													<td align='right'><span id='contact'><b>Credit Card Number:</b></span></td>\n
													<td><input type=text
															   size='30'
															   name='buy_cc_num'></td>\n
													</tr>\n
													<tr>\n
													<td align='right'><span id='contact'><b>Name on Card:</b></span></td>\n
													<td><input type=text
															   size='30'
															   name='buy_cc_nameoncard'></td>\n
													</tr>\n
													<tr>\n
													<td align='right'><span id='contact'><b>Card Expiry:</b></span></td>\n
													<td><select name='buy_cc_expmonth'>\n
													    <option value='01'>01 (Jan)</option>
													    <option value='01'>02 (Feb)</option>
													    <option value='01'>03 (Mar)</option>
													    <option value='01'>04 (Apr)</option>
													    <option value='01'>05 (May)</option>
													    <option value='01'>06 (Jun)</option>
													    <option value='01'>07 (Jul)</option>
													    <option value='01'>08 (Aug)</option>
													    <option value='01'>09 (Sep)</option>
													    <option value='01'>10 (Oct)</option>
													    <option value='01'>11 (Nov)</option>
													    <option value='01'>12 (Dec)</option>
													    </select>&nbsp;Month
													    &nbsp;&nbsp;
														<select name='buy_cc_expyear'>
													    <option value='2009'>2009</option>
													    <option value='2010'>2010</option>
													    <option value='2011'>2011</option>
													    <option value='2012'>2012</option>
													    <option value='2013'>2013</option>
													    <option value='2014'>2014</option>
													    <option value='2015'>2015</option>
													    <option value='2016'>2016</option>
													    <option value='2017'>2017</option>
													    <option value='2018'>2018</option>
													    <option value='2019'>2019</option>
													    <option value='2020'>2020</option>
													    <option value='2021'>2021</option>
													    <option value='2022'>2022</option>
													    <option value='2023'>2023</option>
													    </select>&nbsp;Year
													</td>\n
													</tr>\n
													<tr>\n
													<td align='right'><span id='contact'><b>Security Code:</b></span></td>\n
													<td><input type=text
															   size='8'
															   maxlength='3'
															   name='buy_cc_cvv'>&nbsp;<a style='color:#ffffff;' href='#' onClick=\"window.open('images/visa_cvv2.jpg',  'open_window', 'menubar=no,toolbar=no,location=no,directories=no,status=no,scrollbars=no,resizable=no,width=315,height=260,left=250,top=250');\">what is it?</a></td>\n
													</tr>\n
													<tr><td colspan='2'>&nbsp;</td></tr>\n
												</table>\n
                         <!-- END STEP 2 -->\n
                         						<span style='font-family:arial;font-size:4px;'><br /><br /></span>\n
                                                <div align='center'><img src='images/buy_sep.gif' border='0' /></div>\n
                                                <span style='font-family:arial;font-size:4px;'><br /><br /></span>\n
                                                <br /><br />\n
                                                <div align='center'><input type='submit' value='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Go to Step 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' /></div>\n
                                                <br /><Br />\n
			</form>\n";
  }
else
  {
	//Securing CC Information
	$_SESSION["buy_cc_type"]= $buy_cc_type;
	$_SESSION["buy_cc_num"]= $buy_cc_num;
	$_SESSION["buy_cc_nameoncard"]= $buy_cc_nameoncard;
	$_SESSION["buy_cc_expmonth"]= $buy_cc_expmonth;
	$_SESSION["buy_cc_expyear"]= $buy_cc_expyear;
	$_SESSION["buy_cc_cvv"]= $buy_cc_cvv;
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
		<table width="800px" border="0" cellpadding="0" cellspacing="0">
		  <tr>
		   <td width="230px" valign="top" align="center"><!-- LEFT COLUMN -->
		      <span style="font-family:arial;font-size:4px;"><br /><br /></span>
                          <img src="images/buy_shipping_logo.png" border="0" width="108" height="134" alt="Shipping Information" />
					   <span style="font-family:arial;font-size:4px;"><br /><br /></span>
		   </td>
		   </td>
		   <td width="570px" valign="top">
			 <div id="about_blank">
			   <span style="font-family:arial-font-size:4px;"><br /></span>
			   <?php
			   		$temp="";
					$temp=$_GET['change'];

			   		if($temp==1){

			   			echo "<form method='POST' action='card_purchase_s4.php?change=3'>";

					}else {
						echo "<form method='POST' action='card_purchase_s4.php'>";
					}

					?>

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
					<input type="hidden" name="total_amount" value="<?php echo $total_amount; ?>">
					<input type="hidden" name="total_amount_text" value="<?php echo $total_amount_text; ?>">

                         <!-- BEGIN STEP 3 -->
												<table border="0" cellpadding="0" cellspacing="3" width="567">
													<tr>
													<td align="right" width="35%" valign="middle"><img src="images/buy_step3.png" border="0" height="48" width="101">&nbsp;</td>
													<td><?php
															if($buy_country=="US"){
															print"Please choose a shipment option.";
															}
														?>
													</td>
													</tr>
													<tr>
													<td align="right" valign="top">&nbsp;&nbsp;<input id="voucher" type="radio" name="ship_option" value="email_voucher" onclick="vouchership()">&nbsp;&nbsp;</td>
													<td>
													     <b class="buyblue">Email me a voucher.</b><br />
													     You will be issued a printable electronic voucher<br />
													     immediately. It will identify the various locations in <br />
														<?php echo $buy_location; ?> <!--Orlando (including the airport and Kissimmee)--> where it can be redeemed/exchanged for your physical  <br />
														<b>Eat and Play Card</b>.
												        <br />
											            <br />
										              Orlando- Three convenient locations:<br />
												      Lake Buena Vista, I-Drive and Kissimmee <br />
												      <br />
												      NYC - the Gray Line NY Visitor Center in Midtown Manhattan</td>
													</tr>
													<tr>
													  <td colspan="2">&nbsp; </td>
													</tr>
													<?php
															if($buy_country=="US"){
															print"
															<tr>
															<td align=\"right\" valign=\"top\">&nbsp;&nbsp;<input id=\"shipping\" type=\"radio\" name=\"ship_option\" value=\"physical_voucher\" onclick=\"vouchership()\">&nbsp;&nbsp;</td>
															<td>
																 <b class=\"buyblue\">Ship me an Eat and Play Card:</b><br /><em>($4.95 shipping and handling)</em><br />
																 Your order is shipped to you generally within 10 business days.


															</td>
															</tr>
													"; }
													?>
			   </table>

                         						<span style="font-family:arial;font-size:4px;"><br /></span>
                                                <div align="center"><img src="images/buy_sep.gif" border="0" /></div>
                                                <span style="font-family:arial;font-size:4px;"><br /><br /></span>

												<?php
												if($buy_country=="US"){
												print"<div id=\"shippingform\" style=\"display:none\">
												<table border=\"0\" cellpadding=\"0\" cellspacing=\"3\" width=\"550px\">
													<tr>
													<td align=\"right\" valign=\"top\" width=\"35%\" >&nbsp;&nbsp;<input id=\"ship_check\" type=\"checkbox\" onclick=\"ship_check_change()\" name=\"ship_to_billing\" value=\"ship_to_billing\">&nbsp;&nbsp;</td>
													<td>
													     Ship this order to my billing address.
													</td>
													</tr>
											    </table>

												<div id=\"ship_change\" style=\"display:block\">
												<table border='0' cellpadding='0' cellspacing='3' width='550px'>
												<tr><td colspan=\"2\"><span style=\"font-family:arial;font-size:4px;\"><br /></span></td></tr>
													<tr>
													<td align=\"right\" width=\"35%\">&nbsp;</td>
													<td>
													     <b class=\"buyblue\">OR</b>
													</td>
													</tr>
													<tr><td colspan=\"2\"><span style=\"font-family:arial;font-size:4px;\"><br /></span></td></tr>
													<tr>
													<td align=\"right\" width=\"35%\">&nbsp;</td>
													<td>Enter your shipping information (Must be in the USA): </td>
													</tr>
													<tr><td colspan=\"2\">&nbsp;</td></tr>

													<tr>
													<td align='right'><span id='contact'><b>First Name:</b></span></td>
													<td><input type=text
															   size='30'
															   name='ship_firstname'></td>
													</tr>
													<tr>
													<td align='right'><span id='contact'><b>Last Name:</b></span></td>
													<td><input type=text
															   size='30'
															   name='ship_lastname'></td>
													</tr>
													<tr>
													<td align='right'><span id='contact'><b>Address:</b></span></td>
													<td><input type=text
															   size='30'
															   name='ship_address1'></td>
													</tr>
													<tr>
													<td align='right'><span id='contact'>Address L2:</span></td>
													<td><input type=text
															   size='30'
															   name='ship_address2'></td>
													</tr>
													<tr>
													<td align='right'><span id='contact'><b>City:</b></span></td>
													<td><input type=text
															   size='30'
															   name='ship_city'></td>
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
													<td><select name='ship_countrytemp' disabled=\"disabled\">
													        <option value='CA'>Canada</option>
													        <option value='US' SELECTED>USA</option>
													        <option value=''>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
													    </select><input type='hidden' name='ship_country' value='USA'></td>
													</tr>
													<tr>
													<td align='right'><span id='contact'><b>ZIP Code:</b></span></td>
													<td><input type=text
															   size='15'
															   name='ship_zip'></td>
													</tr>

											    </table></div></div>";
												}?>

											   <span style="font-family:arial;font-size:4px;"><br /><br /><br /><br /></span>
<script type="text/javascript">
		   	function set_variables(ship_option,ship_to_billing)
			{
				if(ship_option=="physical_voucher"){
					document.getElementById('voucher').checked=false;
					document.getElementById('shipping').checked=true;
				}else{
					document.getElementById('voucher').checked=true;
					document.getElementById('shipping').checked=false;
				}
				vouchership();

				if(ship_to_billing=="ship_to_billing"){
					document.getElementById('ship_check').checked=true;
				}else{
					document.getElementById('ship_check').checked=false;
				}
				ship_check_change();
			}
		   </script>
		   <?php
		   	if($temp==1){
				echo "<SCRIPT LANGUAGE=\"javascript\">";
						echo "set_variables(
						'".$_SESSION['ship_option']."',
						'".$_SESSION['ship_to_billing']."');";
						echo "</SCRIPT>";
			}
			?>

                         <!-- END STEP 3 -->

                                                <div align="center"><input type="submit" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Go to Step 4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" /></div>
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
