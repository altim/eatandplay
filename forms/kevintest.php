<?php                                                                                                                                                                                                                                        
			
			require 'PHPMailer-master/PHPMailerAutoload.php';
				
			/*
			$comingfrom = "sales@eatandplaycard.com";
			//$to = "larry@eatandplaycard.com";
			$to = "bruce.beaulieu@existo.ca";
			$subject = "Website message test ".time();
			$full_message = "This is a ".time()." test from your website";
			$headers = "From: $comingfrom";

			mail($to,$subject,$full_message,$headers);
			
			
			
			$comingfrom = "sales@eatandplaycard.com";
			//$to = "larry@eatandplaycard.com";
			$to = "newherob@hotmail.com";
			$subject = "Website message test".time();
			$full_message = "This is a test ".time()." from your website";
			$headers = "From: $comingfrom";

			mail($to,$subject,$full_message,$headers);

			
			$comingfrom = "sales@eatandplaycard.com";
			//$to = "larry@eatandplaycard.com";
			$to = "support@existo.ca";
			$subject = "Website message test".time();
			$full_message = "This is a test from ".time()." your website";
			$headers = "From: $comingfrom";

			mail($to,$subject,$full_message,$headers);	


			$comingfrom = "sales@eatandplaycard.com";
			//$to = "larry@eatandplaycard.com";
			$to = "michael.mesa@existo.ca";
			$subject = "Website message test".time();
			$full_message = "This is a test from ".time()." your website";
			$headers = "From: $comingfrom";

			mail($to,$subject,$full_message,$headers);			
			echo "sda";
			*/
			$mail = new PHPMailer;
			
			define('SMTP_SERVER', 'smtp04.domainlocalhost.com');
			
			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp04.domainlocalhost.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			
			$mail->Username = 'sales@eatandplaycard.com';
			$mail->Password = 'Spg123!';     
			
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to
			
			$mail->From = 'sales@eatandplaycard.com';
			$mail->FromName = 'Eat And Play Card Sales';
			$mail->addAddress('dave@spgds.com', 'Test');     // Add a recipient
			$mail->addReplyTo('sales@eatandplaycard.com', 'Sales');
			$mail->addBCC('support@existo.ca');
			
			$mail->isHTML(true);                                  // Set email format to HTML
			
			$full_message = "Please confirm the receipt of this email. Test by Existo.";
			
			$mail->Subject = 'New Transaction Sales !';
			$mail->Body    = $full_message;
			
			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
			    echo 'Message has been sent';
			}
			?>