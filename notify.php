<?php

$dbhost = 'localhost:3306';
$dbuser = 'laurent';
$dbpass = 'meteora100';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

mysql_select_db('Conscientia');

if(isset($_POST['email'])){
	$email = mysql_real_escape_string($_POST['email']);

	$sql = 'INSERT INTO emails '.
       '(email) '.
       'VALUES ( "'.$email.'" )';
    
    $retval = mysql_query( $sql, $conn );
    if(! $retval )
    {
    	die('Could not enter data: ' . mysql_error());
    }
    echo "Entered data successfully\n";
	//mysql_close($conn);

    //mysql_query('INSERT INTO emails (email) VALUES ('.$email.');');
}

?>