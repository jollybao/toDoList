<?php
$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = '86561911';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
if(! $conn ) { 
	die('Could not connect: ' . mysqli_error());
	}   
echo 'Connected successfully'.'<br>';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_POST["username"])){
        $name = htmlspecialchars($_POST["username"]);   
        }
     if(!empty($_POST["eml"])){
         $email = htmlspecialchars($_POST["eml"]);
     }
     if(!empty($_POST["psw"])){
         $psw = htmlspecialchars($_POST["psw"]);
     }
}

$sql = "SELECT * FROM mydb.member
WHERE name = '$name' AND email = '$email'";
$result = $conn->query($sql);
if($result->num_rows > 0){
    echo "User already registered";
}
else{
    $sql = "INSERT INTO mydb.member(name,email,password)
    VALUES('$name','$email','$psw')";

    if ($conn->query($sql) === TRUE) {
        echo "New records created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$con->close();

?>

