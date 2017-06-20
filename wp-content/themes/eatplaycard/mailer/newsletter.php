<?php


$send_to = "tim@mcmillanfreelance.ca";
$send_subject = "Newsletter Join Request - Eat and Play Card";

/*Be careful when editing below this line */

$email = cleanupentries($_POST["newsletter-email"]);
$allowable = strip_tags(trim($_POST["allow"]));
$f_comments = strip_tags(trim($_POST["comments"]));

function cleanupentries($entry) {
	$entry = trim($entry);
	$entry = stripslashes($entry);
	$entry = htmlspecialchars($entry);

	return $entry;
}

$message = "This person would like to join your mailing list:" . $email;

$headers = "From: " . $send_to . "\r\n" .
    "Reply-To: " . $email . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

if (!$email) {
	echo "no email";
	exit;
} else if ($f_comments !== '') {
	echo "comments";
	exit;
} else if ($allowable !== 'allow') {
	echo "disallow";
	exit;
} else {
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		mail($send_to, $send_subject, $message, $headers);
		echo "true";
	}else{
		echo "invalid email";
		exit;
	}
}

?>