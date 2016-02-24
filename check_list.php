<?php
    

$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = '86561911';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
if(! $conn ) { 
	die(/*'Could not connect: ' .*/ mysqli_error());
	}
   
/*echo 'Connected successfully'.'<br>';*/
/*
$todo = $_REQUEST["q"];
$due = $_REQUEST["p"];
$id = $_SESSION['id'];
$date = date('Y-m-d');
$exp = strtotime($date."+ '$due' days");
*/
$todo = "dsadsa";
$due = 1;
$date = '+'+$due;
$id = 1;
echo $due;
//echo $_SESSION['id'];
echo $date;
$exp = date('Y-m-d',strtotime($date.'days'));
echo $exp;
$sql = "SELECT * FROM mydb.list
    WHERE id = '$id' AND dueday = '$due' AND list = '$todo'";

$result = $conn->query($sql);

if($result->num_rows == 0){
    echo "display";
    $sql = "INSERT INTO mydb.list (id,list,dueday,ExpDay)
    VALUES ('$id','$todo','$due','$exp')";
    if($conn->query($sql) ===TRUE){
    echo "sucessfully added";
    }
}
?>
