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

$todo = $_REQUEST["q"];
$id = $_SESSION['id'];
echo $todo;
$sql = "Delete FROM mydb.list
    WHERE id = '$id' AND todo = '$todo'";

$conn->query($sql);
$conn->close();
?>