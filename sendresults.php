<?php
//--------------------------Set these paramaters--------------------------

// Subject of email sent to you.
$subject = 'Results from Contact form'; 

// Your email address. This is where the form information will be sent. 
$emailadd = 'nanaryuu@gmail.com'; 

// Where to redirect after form is processed. 
// $url = 'http://www.columbia.edu/~lm2773/confirmation.html';

// --------------------------Do not edit below this line--------------------------
$text = "Results from form:\n\n"; 
$space = ' ';
$email = $HTTP_POST_VARS['email'];
$j = strlen($key);
if ($j >= 50)
{echo "Name of form element $key cannot be longer than 50 characters";die;}
$j = 50 - $j;
for ($i = 1; $i <= $j; $i++)
{$space .= ' ';}
$conc = "New subscriber:$space{$email}";
$text .= $conc;
$space = ' ';
mail($emailadd, $subject, $text, 'From: '.$emailadd.'');
?>