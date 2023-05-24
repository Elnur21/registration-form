<?php

$servername = "localhost";
$username = "Elnur";
$password = "elnur.nomre1";
$dbname = "registration";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connect error:" . $conn->connect_error);
}

$id = $_GET["identity"];
$sql = "DELETE FROM users WHERE identity='$id';";
if($conn->query($sql) === TRUE){
    header("location:delete.php");
}else{
    echo "error";
}

$conn->close();
?>