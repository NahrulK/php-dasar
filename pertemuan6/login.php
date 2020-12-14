<?php

// Cek apakah button submit sudah ditekan atau belum
if (isset($_POST["Submit"])){
    // cek Username dan password
    if ($_POST["Username"] == "nahrul"  &&  $_POST["Password" == "rule"] ){
        // maka redirect ke halaman admiin
        header ("Location: admin.php");
        exit;
    }else {
        $error = true;
    };
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>

<h1>Masukan Usernama dan Password anda.</h1>

<?php if (isset($error)) :?>

    <p style="color: red; font-style: italic;">Password dan Username anda salah</p>

<?php endif ?>

<ul>

    <form action="" method="post">
    
    <li>
    <label for="Username">Username :</label>
    <input type="text" name="Username">
    </li>
    <li>
    <label for="Password">Password :</label>
    <input type="password" name="Password">
    </li>
    <li><button type="Submit" name="Submit">Submit</button></li>
    
    </form>

</ul>
    
</body>
</html>