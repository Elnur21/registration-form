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
$username = "Elnur";
$password = "elnur.nomre1";
$dbname = "registration";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connect error:" . $conn->connect_error);
}
$sql = "INSERT INTO users (fname, lname, father_name, identitiy, working_place, speciality, email, phone_number, password1, password2)
VALUES ('$fname', '$lname', '$fathername', '$id', '$company', '$speciality', '$email', '$number', '$fpassword', '$lpassword')";

if($conn->query($sql) === TRUE){
    $last_id = $conn->insert_id;
    echo "New record created successfully " . $last_id;
} else{
    echo "Error" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Qeydiyyat bitdi.
    </h1>
    <p>
    <?php echo $_POST["fname"]; ?> <?php echo $_POST["lname"]; ?> <?php echo $_POST["fathername"]; ?> təbriklər siz uğurla qeydiyyatdan keçdiniz! 
    </p>
</body>
</html>