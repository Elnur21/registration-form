<?php
// $servername = "localhost";
// $username = "Elnur";
// $password = "elnur.nomre1";
// $dbname = "registration";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

// $sql = "INSERT INTO users (fname, lname, father_name, identitiy, working_place, speciality, email, phone_number, password1, password2)
// VALUES ('John', 'Doe', '')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body onload="Captcha();">
    <div class="main bg-white shadow rounded">
        <header class="px-5 py-3">
            <div class="col-12 text-right language">
                <div class="dropdown">
                    <a href="index.html" class=" text-decoration-none" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="img/az.png" alt="" width="25px">AZ
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-3">
                    <a href="index.html"><img src="img/logo.png" alt="" width="150px"></a>
                </div>
                <div class="col-6">
                    <h2 class="text-danger text-center">
                        Azərbaycan Kardiologiya Cəmiyyətinin <br>
                        IX Milli Konqresi
                    </h2>
                    <p class="h4 additional-color text-center">
                        19-20 dekabr 2020
                    </p>
                </div>
                <div class="col-3">
                    <p class="additional-color h6 text-center">Baş sponsor</p>
                    <img src="img/logo_servier.png" alt="" width="200px">
                </div>
            </div>
        </header>
        <p class="bg-green text-white h5 p-3 text-center">
            Azərbaycan Kardiologiya Cəmiyyətinin IX Milli Konqresinə göstərdiyiniz maraq üçün təşəkkür edirik <br>
Konqresdə iştirak etmək üçün qeydiyyatdan keçin
        </p>
        <form action="register.php" method="post" class="align-center">
            <p class="my-5"><strong><em><u><span class="text-danger">*</span> işarəsi ilə doldurulması vacib olan sahələr qeyd olunub</u></em></strong></p>
            <div class="form-group">
                <label for="fname"><strong><span class="text-danger">*</span> Ad:</strong></label><br>
                <input type="text" name="fname" class="form-control" required value="">
            </div>
            <div class="form-group">
                <label for="lname"><strong><span class="text-danger">*</span> Soyad:</strong></label><br>
                <input type="text" name="lname" class="form-control" required value="" >
            </div>
            <div class="form-group">
                <label for="fathername"><strong><span class="text-danger">*</span> Ata adı:</strong></label><br>
                <input type="text" name="fathername" class="form-control" required value="">
            </div>
            <div class="form-group">
                <label for="identity"><strong><span class="text-danger">*</span> Şəxsiyyət vəsiqəsinin seriya və nömrəsi:</strong></label><br>
                <input type="text" name="identity" class="form-control" required value="">
            </div>
            <div class="form-group">
                <label for="company"><strong> İş yeri:</strong></label><br>
                <input type="text" name="company" class="form-control">
            </div>
            <div class="form-group">
                <label for="speciality"><strong> Vəzifə:</strong></label><br>
                <input type="text" name="speciality" class="form-control">
            </div>
            <div class="form-group">
                <label for="email"><strong><span class="text-danger">*</span> Elektron poçt ünvanı:</strong></label><br>
                <input type="email" name="email" class="form-control" required value="">
            </div>
            <div class="form-group">
                <label for="number"><strong><span class="text-danger">*</span> Əlaqə nömrəsi:</strong></label><br>
                <input type="number" name="number" class="form-control" required value="">
            </div>
            <div class="form-group">
                <label for="fpassword"><strong><span class="text-danger">*</span> Qeydiyyat şifrəsi:</strong></label><br>
                <input type="password" name="fpassword" class="form-control" required value="">
            </div>
            <div class="form-group">
                <label for="lpassword"><strong><span class="text-danger">*</span> Qeydiyyat şifrəsi (təkrar daxil edin):</strong></label><br>
                <input type="password" name="lpassword" class="form-control" required value="">
            </div>
            
            <div class="form-group"> 
                <div>
                    <h2 type="text" id="mainCaptcha" class="float-left text-success"></h2><img src="img/ref-btn.png" width="27px" class="m-2 pt-4 mt-3" id="refresh" onclick="Captcha();"/>
                </div>
                <br>   
                <input type="text" id="txtInput" class="form-control" placeholder="Şəkildəki kodu daxil edin"/>
                <input id="Button1" type="button" value="Check" onclick="ValidCaptcha()"/>
            </div>
            <center><button type="submit" class="btn btn-success px-5">Göndər</button></center>
        </form>
    </div>

    <script src="js/main.js"></script>
</body>
</html>