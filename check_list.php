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
//print_r($_SESSION);   

$todo = $_REQUEST["q"];
$id = $_SESSION['id'];

$sql = "SELECT * FROM mydb.list
    WHERE id = '$id' ";

$result = $conn->query($sql);

if($result->num_rows < 20){
    echo "display";
    $sql2 = "INSERT INTO mydb.list(id,todo)
    VALUES('$id','$todo')";
    $conn->query($sql2);           
}
$conn->close();
?>
