<?php
$fname = val($_POST["fname"]);
$lname = val($_POST["lname"]);
$fathername = val($_POST["fathername"]);
$email = val($_POST["email"]);
$id = val($_POST["identity"]);
$company = val($_POST["company"]);
$speciality = val($_POST["speciality"]);
$number = val($_POST["number"]);
$fpassword = val($_POST["fpassword"]);
$lpassword = val($_POST["lpassword"]);
function val($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$servername = "localhost";
$username = "root1";
$password = "test1";
$dbname = "mywebsite";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connect error:" . $conn->connect_error);
}
$sql = "UPDATE users SET fname = '$fname', lname = '$lname', father_name = '$fathername', working_place = '$company', speciality = '$speciality', email = '$email', phone_number = '$number', password1 = '$fpassword' WHERE identity = '$id';";
if($conn->query($sql) === TRUE){    
    header("location:delete.php?message=" . $id);
} else{
    echo "Error" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>