<?php

// Subject of email sent to you.
$subject = 'Results from Contact form'; 

// Your email address. This is where the form information will be sent. 
$emailadd = 'nanaryuu@gmail.com'; 

$space = ' ';
$email = $HTTP_POST_VARS['email'];
debug_to_console( $email );
$text = "New subscriber:$space{$email}";
if (mail($emailadd, $subject, $text)) {
	debug_to_console("Success");
} else {
	debug_to_console("FAIL");
}

?>

<?php
/**
 * Send debug code to the Javascript console
 */ 
function debug_to_console($data) {
    if(is_array($data) || is_object($data))
	{
		echo("<script>console.log('PHP: ".json_encode($data)."');</script>");
	} else {
		echo("<script>console.log('PHP: ".$data."');</script>");
	}
}
?>