<?php
require("connect.php");

$todo = htmlspecialchars($_REQUEST["q"],ENT_QUOTES);
$id = $_SESSION['id'];
//echo $todo;
$sql = "Delete FROM mydb.list
    WHERE id = '$id' AND todo = '$todo'";

$conn->query($sql);
$conn->close();
?>