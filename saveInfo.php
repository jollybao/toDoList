<?php
$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = '86561911';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
if(! $conn ) { 
	die('Could not connect: ' . mysqli_error());
	}   
echo 'Connected successfully'.'<br>';



$name = htmlspecialchars($_POST["username"]);   
$email = htmlspecialchars($_POST["eml"]);
$psw = htmlspecialchars($_POST["psw"]);

$sql = "SELECT * FROM mydb.member
WHERE name = '$name' AND email = '$email'";
$result = $conn->query($sql);
if($result->num_rows > 0){
    echo "User already registered";
    header("Location: CreatAcount.php");
    exit;
}
else{
    $sql = "INSERT INTO mydb.member(name,email,password)
    VALUES('$name','$email','$psw')";

    if ($conn->query($sql) === TRUE) {
        echo "New records created successfully";
        header("Location: .\Welcome.php");
        echo "jump";
	    exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


header("Location: CreatAcount.php");
exist;
?>

