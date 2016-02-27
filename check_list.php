<?php

//print_r($_SESSION);   
require('connect.php');

$todo = htmlspecialchars($_REQUEST["q"],ENT_QUOTES);
$id = $_SESSION['id'];

$sql = "SELECT * FROM mydb.list
    WHERE id = '$id' ";

$result = $conn->query($sql);

if($result->num_rows < 20){
    
    $date_time = date('Y-m-d H:i:s');
    $sql2 = "INSERT INTO mydb.list(id,todo,date)
    VALUES('$id','$todo','$date_time')";

    if($conn->query($sql2) === TRUE){
        echo "display";   
        //echo "seccuess"; 
    }   
            
}
$conn->close();
?>
