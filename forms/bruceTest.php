<?php	 
require '/forms/PHPMailer-master/PHPMailerAutoload.php';
$full_message = "test 1"; 
$to = "bruce.beaulieu@existo.ca";
	$mail = new PHPMailer;
			 
			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'srv1.existo.ca';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = 'sales@eatandplaycard.com';                 // SMTP username
			$mail->Password = 'wrn!G;gG1?VR';                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to
			 
			$mail->From = 'sales@eatandplaycard.com';
			$mail->FromName = 'Eat And Play Card Sales';
			$mail->addAddress($to, 'Eat And Play Card Sales');     // Add a recipient
			$mail->addReplyTo('sales@eatandplaycard.com', 'Eat And Play Card Sales');

			$mail->isHTML(false);                                  // Set email format to HTML
			
			$mail->Subject = 'Transaction Successful : New Card Order';
			$mail->Body    = $full_message;			
			
			if(!$mail->send()) {
			} else {
			}
			
?>