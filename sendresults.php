<?php
//--------------------------Set these paramaters--------------------------

function debug_to_console( $data ) {

    if ( is_array( $data ) )
        $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
    else
        $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

    echo $output;
}

// Subject of email sent to you.
$subject = 'Results from Contact form'; 

// Your email address. This is where the form information will be sent. 
$emailadd = 'nanaryuu@gmail.com'; 

// Where to redirect after form is processed. 
// $url = 'http://www.columbia.edu/~lm2773/confirmation.html';

// --------------------------Do not edit below this line--------------------------
$space = ' ';
$email = $HTTP_POST_VARS['email'];
debug_to_console($email)
$text = "New subscriber:$space{$email}";
if (mail($emailadd, $subject, $text, 'From: Conscientia'))
{debug_to_console("success")};
?>