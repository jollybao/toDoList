<?php
    
$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = '86561911';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
if(! $conn ) { 
	die(/*'Could not connect: ' .*/ mysqli_error());
	}
   
/*echo 'Connected successfully'.'<br>';*/

session_name("Login");
session_start();
?>
