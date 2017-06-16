 <?php	


	$uEmail = "bruce.beaulieu@existo.ca";
	$toName = "Bruce Beaulieu";
 				$full_message = "<span style='font-family:tahoma;font-size:12px;color:#000000;'>Please do not respond to this email.<br /><br />" .
								"Thank you for your Eat and Play Card order. This email is a confirmation of your purchase. Please read it carefully and be sure to print your Voucher.<br /><br />" .
								"<b>Order Confirmation</b><br /><br />" .
								"<b>Quantity:</b>". $buy_quantity ."<br />" .
								"<b>Product:</b> Eat and Play Card" . $buy_location . "<br />" .
								"<b>Product Number:</b>" . $product_number. "<br />" .
								"<b>Total: $</b> $total_amount USD<br />" .
								"<b>Status:</b> Confirmed<br /><br />" .
								"<a href='http://www.eatandplaycard.com/" . $voucher_file . "?voucherid=" .$order_number."'>Click here to download your voucher</a><br /><br /><br />" .
								"<b>Order Details</b><br /><br />" .
								"<b>Name:</b> " . $buy_firstname . " " . $buy_lastname . "<br />" .
								"<b>Email:</b> " . $uEmail . "<br /><br /><br/>" .
								"<b>Date of Order:</b> " . date("Y-m-d") . "<br />" .
								"<b>Credit Card Number:</b> " . $hide_no . "<br /><br />" .
								"<b>Don't forget to print your Voucher.</b> You MUST print your Voucher and present it in " . $buy_location . " to receive your Eat and Play Card. <br /><br />" .
								"Thank you for your business. Have a wonderful time in " . $buy_location. ".<br /><br />" .
								"<b>The Team at Eat and Play Card</b></span><br /><br />";
 
 
	 
			$to = "bruce.beaulieu@existo.ca";
			$curl = curl_init();
			curl_setopt ($curl, CURLOPT_URL, "http://nouveauexisto.ca/eatAndPlayCard_form/formEmailSender.php?sendType=teamEatAndPlay&toName=".urlencode($toName)."&toEmail=".urlencode($to)."&fullMessage=".urlencode($full_message)."");
			curl_exec ($curl);
			curl_close ($curl);
			
			
function curl_download($Url){
 
    // is cURL installed yet?
    if (!function_exists('curl_init')){
        die('Sorry cURL is not installed!');
    }
 
    // OK cool - then let's create a new cURL resource handle
    $ch = curl_init();
 
    // Now set some options (most are optional)
 
    // Set URL to download
    curl_setopt($ch, CURLOPT_URL, $Url);
 
    // Set a referer
    curl_setopt($ch, CURLOPT_REFERER, "http://www.example.org/yay.htm");
 
    // User agent
    curl_setopt($ch, CURLOPT_USERAGENT, "MozillaXYZ/1.0");
 
    // Include header in result? (0 = yes, 1 = no)
    curl_setopt($ch, CURLOPT_HEADER, 0);
 
    // Should cURL return or print out the data? (true = return, false = print)
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
    // Timeout in seconds
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
 
    // Download the given URL, and return output
    $output = curl_exec($ch);
 
    // Close the cURL resource, and free system resources
    curl_close($ch);
 
    return $output;

}			
			
?>