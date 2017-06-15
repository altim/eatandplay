<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Purchase Error - Eat and Play Card: Take a bite out of vacation expenses</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="author" content="Cerca Marketing">
<link href="/css/eatandplaysub2.css" rel="stylesheet" type="text/css">

<script language="JavaScript" src="/scripts/common.js"></script>
<?php
$path = $_GET["path"];
$errorMessage = $_GET["errorMessage"];
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

		<table width="800px" border="0" cellpadding="0" cellspacing="0">
		  <tr>
		   <td width="230px" valign="top" align="center"><!-- LEFT COLUMN -->
		      <span style="font-family:arial;font-size:4px;"><br /><br /></span>
                          <img src="images/buy_nosuccess.png" border="0" width="104" height="108" alt="Order Unsuccessful" />
					   <span style="font-family:arial;font-size:4px;"><br /><br /></span>
		   </td>
		   </td>
		   <td width="570px" valign="top">
			 <div id="about_blank">
			   <span style="font-family:arial-font-size:4px;"><br /></span>

												<table border="0" cellpadding="0" cellspacing="3" width="550px">
													<tr>
													<td>Error with Payment Processing<br /><br />
													    <b>Error Message(s): </b><br /><?php echo $errorMessage; ?><br />
													</td>
													</tr>
												</table>
												<br /><br /><br /><br /><br /><br /><br /><br /><br />


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