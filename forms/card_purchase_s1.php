<?php session_start(); ?>
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
                          <img src="images/buy_selection_logo.png" border="0" width="89" height="132" alt="Product Selection" />
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

			   			echo "<form method='POST' action='card_purchase_s4.php?change=1'>";

					}else {
						echo "<form method='POST' action='card_purchase_s2.php'>";
					}

					?>
			  <!-- <form method="POST" ACTION="card_purchase_s2.php"> -->

                         <!-- BEGIN STEP 2 -->
												<table border="0" cellpadding="0" cellspacing="3" width="550px">
													<tr>
													<td align="right" width="35%" valign="middle"><img src="images/buy_step1.png" border="0" height="48" width="101">&nbsp;</td>
													<td>Please choose an Eat and Play Card destination and the number of cards required (2 max).</td>
													</tr>
													<tr><td colspan="2">&nbsp;</td></tr>
													<tr>
													<td align="right"><span id="contact"><b>Destination:</b></span></td>
													<td>

															<select name="buy_location">
																<option value="Orlando">Orlando&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
																<option value="New York City">New York City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
															</select>

													</td>
													</tr>
													<tr>
													<td align="right"><span id="contact"><b>Quantity:</b></span></td>
													<td>
															<select name="buy_quantity" id="quantity">
																<option value="1">1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
																<option value="2">2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
																<!--<option value="3">3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>-->
																<!--<option value="4">4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>-->
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
                                                <br /><br />
			</form>
            <span style="font-family:arial;font-size:4px;"><br /></span>


			 </div>
		   </td>
		   <script type="text/javascript">
		   	function set_quantity(number){
				document.getElementById('quantity').selectedIndex=(number-1);
			}
		   </script>
		   <?php
		   	if($temp==1){
				echo "<SCRIPT LANGUAGE=\"javascript\">";
						echo "set_quantity(".$_SESSION['buy_quantity'].");";
						echo "</SCRIPT>";
			}
			?>

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