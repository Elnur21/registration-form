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
$sql = "SELECT * FROM users WHERE identity='$id;'";
$results = $conn->query($sql);
if($results->num_rows > 0){
    while($row = $results->fetch_assoc()){
        $fname = $row["fname"];
        $lname = $row["lname");
        $fathername = $row["fathername"];
        $email = $row["email"];
        $id = $row["identity"];
        $working_place = $row["working_place"];
        $speciality = $row["speciality"];
        $phone_number = $row["phone_number"];
        $password1 = $row["password1"];
        $password2 = $row["password2"];
    }
}else{
    echo "0 results";
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
    <table>
    <form action="updateuser.php" method="post">
    <tr>
        <td><h1>Header</h1></td>
        <td></td>
    </tr>
    <tr>
        <td>Şəxsiyyət vəsiqəsinin seriya və nömrəsi:</td>
        <td><input type="number" name="identity" value = "<?php echo $id ?>"></td>
    </tr>
    <tr>
        <td>Ad:</td>
        <td><input type="text" name="fname" value = "<?php echo $fname ?>"></td>
    </tr>
    <tr>
        <td>Soyad:</td>
        <td><input type="text" name="lname" value = "<?php echo $lname ?>"></td>
    </tr>
    <tr>
        <td>Elektron poçt ünvanı:</td>
        <td><input type="email" name="email" value = "<?php echo $email ?>"></td>
    </tr>
    <tr>
        <td>Ata adı:</td>
        <td><input type="text" name="fathername" value = "<?php echo $fathername ?>"></td>
    </tr>
    <tr>
        <td>İş yeri:</td>
        <td><input type="text" name="working_place" value = "<?php echo $working_place ?>"></td>
    </tr>
    <tr>
        <td>Vəzifə:</td>
        <td><input type="text" name="speciality" value = "<?php echo $speciality ?>"></td>
    </tr>
    <tr>
        <td>Əlaqə nömrəsi:</td>
        <td><input type="number" name="phone_number" value = "<?php echo $phone_number ?>"></td>
    </tr>
    <tr>
        <td>Qeydiyyat şifrəsi:</td>
        <td><input type="text" name="password1" value = "<?php echo $password1 ?>"></td>
    </tr>
    <tr>
        <td></td>
        <td><button type="submit">Təsdiqlə</button></td>
    </tr>
    </form>
    </table>
</body>
</html>