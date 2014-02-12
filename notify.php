<?php

// // $con=mysqli_connect("example.com","peter","abc123","my_db");
// // Check connection
// if (mysqli_connect_errno())
//   {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   }

// $sql="INSERT INTO Emails (email)
// VALUES
// ('$_POST[email]')";

// if (!mysqli_query($con,$sql))
//   {
//   die('Error: ' . mysqli_error($con));
//   }
// echo "1 record added";

// mysqli_close($con);

$dbhost = "localhost";
$dbuser = "TheSixthLiberty";
$dbpass = "orfpWNasYWCP4FcLEFRkfvv4qANqui";
$dbname = "Conscientia";
$c = @mysql_pconnect($dbhost,$dbuser,$dbpass) or die();
@mysql_select_db($dbname,$c) or die();

//It isn't secure in this state: validation needed as it is an email?
if(isset($_POST['email'])){
    $email = mysql_real_escape_string($_POST['email']);
    mysql_query('INSERT INTO emails (email) VALUES ('.$email.');');
}

?>