<?php

// validate that expected data exists
if( !isset($_POST['name'] ) || 
    !isset($_POST['attachments']) ||
    !isset($_POST['email']) ) {
	died('We are sorry, but there appears to be a problem with the form you submitted.');  
}

function died($error) {
	echo "We are very sorry, but there were error(s) found with the form you submitted.<br />";
	echo $error;	
	die(); 
}

$name = $_POST['name']; // required
$emailaddress_of_user = $_POST['email']; // required 
$attachments = $_POST['attachments'];

$attachments = substr($attachments, 0, -1);
$attachments_array = explode(',', $attachments);

$files = $attachments_array;

/* Email for Thermal */
$to = "jason.white@w2m.co.uk"; 
$from = "info@thermal-economics.co.uk";
$headers_for_thermal  = "From: $from";
$headers_for_thermal .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

$subject_for_thermal = $name . " has just downloaded a white paper";

$message_for_thermal  = "Name: " . $name . "\n\n";
$message_for_thermal .= "Email: " . $emailaddress_of_user . "\n\n";
$message_for_thermal .= "White papers: " . $attachments . "\n\n"; // loop to say which papers have been downloaded

$ok = @mail($to, $subject_for_thermal, $message_for_thermal, $headers_for_thermal); 
if ($ok) { 
	echo "<p>mail 1 sent to $to</p> <p>message $message_for_thermal</p>";
} else { 
	echo "<p>mail could not be sent!</p>"; 
}

/* Email for User */
$subject_for_user = "Thermal Economics White Papers";

$mailBody = '<html><body>';
$mailBody .='<table width="100%" style="font-family:sans-serif;">';
$mailBody .='<tr><td style="padding:10px;">Here are your white papers.</td></tr>';
$mailBody .='<tr><td style="padding:10px;">Please get in touch if you require more information: info@thermal-economics.co.uk, 01582 450814 </td><tr>';
$mailBody .='</table>';
$mailBody .='</body></html>';

$headers_with_attachment = "From: $from";
$semi_rand = md5(time()); // boundary 
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

// headers for attachment 
$headers_with_attachment .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

// multipart boundary 
$message_to_user = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $mailBody . "\n\n"; 
$message_to_user .= "--{$mime_boundary}\n";

// preparing attachments
for($x=0;$x<count($files);$x++){
	$file = fopen($files[$x],"rb");
	$data = fread($file,filesize($files[$x]));
	fclose($file);
	$data = chunk_split(base64_encode($data));
	$message_to_user .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$files[$x]\"\n" . 
	"Content-Disposition: attachment;\n" . " filename=\"$files[$x]\"\n" . 
	"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
	$message_to_user .= "--{$mime_boundary}\n";
}

// send

$ok = @mail($emailaddress_of_user, $subject_for_user, $message_to_user, $headers_with_attachment); 
if ($ok) { 
	echo "<p>mail 2 sent to $emailaddress_of_user</p> <p>message $message_to_user</p>"; 
} else { 
	echo "<p>mail could not be sent!</p>"; 
}

?>