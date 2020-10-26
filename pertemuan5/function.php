<!-- User Defined function -->

<?php

$sandi = "Sandi Alam";
$galang = "Galang Akikazu";
$rule = "Nahrul K";

$pagi = "PAGI";
$siang = "SIANG";
$malam = "MALAM";

function sebuahSalam() {
    return "Beberapa Ucapan Selamat datang";
}

function selamatDatang($nama="admin",$waktu="Tengah malam"){
    return "Hai ". $nama . "  Selamat ".$waktu." ya..";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>

<h1><?php echo sebuahSalam();?></h1>
<ul>
    <li><h2><?php
    
    echo selamatDatang();

    ?></h2></li>
</ul>
    
</body>
</html>