<?php
echo "Begin<br>";
        $headers = "MIME-Version: 1.0\n" ;
        $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
        $headers .= "X-Priority: 1 (Highest)\n";
        $headers .= "X-MSMail-Priority: High\n";
        $headers .= "Importance: High\n";
		$headers .= "Reply-To: no-reply@eatandplaycard.com \n";
		
		$to = "mailconfiguration@nouveauexisto.ca";
		$subject = "Testing email - High Priority";
		$message = "This is a email to verify if the high priority configurations have worked. -Michael";
		
mail($to,$subject,$message,$headers);
echo "End";

?>