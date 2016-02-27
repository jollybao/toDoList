<?php
require("connect.php"); 

$id = $_SESSION['id'];

$sql = "SELECT todo FROM mydb.list
WHERE id= '$id' ORDER BY date";

$result = $conn->query($sql);
$json = array();
while($row = $result->fetch_assoc()){
    $text = htmlspecialchars_decode($row['todo'], ENT_QUOTES);
    $json[]= array(  
       'key' => $text
    );
}

$jsonstring = json_encode($json);
echo $jsonstring;
$conn->close();
?>

