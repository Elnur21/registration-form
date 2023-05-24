<?php
$servername = "localhost";
$username = "Elnur";
$password = "elnur.nomre1";
$dbname = "registration";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connect error:" . $conn->connect_error);
}
if(isset($_GET["message"])){
    if(($_GET["message"]) == "delete"){
        echo "record deleted";
    }
}
$sql = "SELECT fname, lname, father_name, identitiy, working_place, speciality, email, phone_number, password1 FROM users";
$results = $conn->query($sql);


?>

<table width ="300px" border="1" cellpadding = "1" cellspacing ="1">
    <?php
        if($results->num_rows > 0){
            while($row = $results->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $row["identity"]; ?></td>
        <td><a href="deluser.php?id= <?php echo $row["identity"]; ?>">Silmək</a><br>
             <a href="update.php?id= <?php echo $row["identity"]; ?>">Yeniləmək</a>   
        </td>
    </tr>
    <tr>
        <td><?php echo $row["fname"]; ?></td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><?php echo $row["lname"]; ?></td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><?php echo $row["father_name"]; ?></td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><?php echo $row["working_place"]; ?></td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><?php echo $row["speciality"]; ?></td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><?php echo $row["email"]; ?></td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><?php echo $row["phone_number"]; ?></td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><?php echo $row["password1"]; ?></td>
        <td>&nbsp;</td>
    </tr>
    <?php
            }
        }
    ?>
</table>