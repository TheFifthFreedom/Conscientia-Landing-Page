<?php
//--------------------------Set these paramaters--------------------------

// Subject of email sent to you.
$subject = 'Results from Contact form'; 

// Your email address. This is where the form information will be sent. 
$emailadd = 'nanaryuu@gmail.com'; 

// Where to redirect after form is processed. 
// $url = 'http://www.columbia.edu/~lm2773/confirmation.html';

// --------------------------Do not edit below this line--------------------------
$space = ' ';
$email = $HTTP_POST_VARS['email'];
$text = "New subscriber:$space{$email}";
mail($emailadd, $subject, $text, 'From: Conscientia');
?>