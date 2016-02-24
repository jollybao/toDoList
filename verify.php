<?php
    

$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = '86561911';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
if(! $conn ) { 
	die(/*'Could not connect: ' .*/ mysqli_error());
	}
   
/*echo 'Connected successfully'.'<br>';*/

if($_SERVER["REQUEST_METHOD"] == "GET"){
    $q = $_REQUEST["q"];
    $p = $_REQUEST["p"];
}
if($p == 'username'){
    $sql = "SELECT * FROM mydb.member
    WHERE name = '$q'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        echo "* User name already exist!";
    }
    else{
        echo "";
    }
}
else{
    $sql = "SELECT * FROM mydb.member
    WHERE email = '$q'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        echo "* Email already exist!";
    }
    else{
        echo "";
    }

}

?>
