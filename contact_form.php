<?php
 	$name = $_POST["name"];
 	$email = $_POST["email"];
 	$suburb = $_POST["suburb"];
 	$phonenumber = $_POST["phonenumber"];
 	$message = $_POST["message"];

	if (isset($name)){	
		$subject = $name;
// To send HTML mail, the Content-type header must be set
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From:' . $email. "\r\n"; // Sender's Email
		$headers .= 'Cc:' . $email. "\r\n"; // Carbon copy to Sender
		$template = '<div style="padding:50px; "> <h3>JNJ Cleaning services<br/></h3> Request from ' . $name . ',<br/>'
		. '<br/>'
		. 'Email: ' . $email . '<br/><br/>'
		. 'Suburb : ' . $suburb . '<br/><br/>'
		. 'Contact No :' . $phonenumber . '<br/><br/>'
		. 'Message :<br/>' . $message . '<br/>'
		. '<br/>'
		. 'Thank you .</div>';
		$sendmessage = "<div style=\"background-color:#F5F5F5; color:black;\">" . $template . "</div>";
// message lines should not exceed 70 characters (PHP rule), so wrap it
		$sendmessage = wordwrap($sendmessage, 70);

// Send mail by PHP Mail Function
		mail("john.ambat@gmail.com", $subject, $sendmessage, $headers);
			echo "Your Query has been received, We will contact you soon.";

	}
	else{
		echo "Sorry try again later";
	}
?>
