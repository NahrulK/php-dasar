<?php

// Ini Komentar satu baris

/*

ini Komentar yang banyak baris

*/

// Pertemuan 2 - Sintaks PHP dan standart output
// echo, print

// print_r
// var_dump

// Contoh

echo "Nahrul Khayattullah";
echo "<br>";
var_dump("Nahrul Khayattullah");
echo "<br>";
echo "jum'at";
echo "<br>";
echo 'jum\'at';
echo "<br>";

// penulisan PHP

// 1. PHP didalam HTML
// 2. HTML didalam PHP

// Variable dan tipe data

$nama = "Nahrul";

// penggabungan /Concatenation

$nama_belakang = "Khayattullah";

echo $nama . " " . $nama_belakang;
// atau 

$nama .= " ";
$nama .= "Khayattullah";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penulisan HTML</title>
</head>
<body>

<h1>Hallo, Selamat datang <?php echo $nama?></h1>
<p><?php echo "Ini adalah php"?></p>

<!-- atau -->

<?php echo "<h1>Ini adalah html di dalam PHP</h1>"?>
    
</body>
</html>

<!-- ini adalah komentar dalam HTML -->