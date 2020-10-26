<?php 

$mahasiswa = [
    [ 
    "gambar" => "nahrul.jpg",
    "nama" => "Nahrul Khayattullah",
    "npm" => "180202113",
    "jurusan" => "Teknik Informatika",
    "email" => "khayattullah73@gmail.com"
] ,
[ 
    "gambar" => "ading.jpg",
    "nama" => "Sayid Abdul qadir jaelani",
    "npm" => "180202107",
    "jurusan" => "Teknik Informatika",
    "email" => "AdingWoe@gmail.com"
] ,
[ 
    "gambar" => "hisbul.jpg",
    "nama" => "Hisbul Wathoni",
    "npm" => "180202101",
    "jurusan" => "Teknik Informatika",
    "email" => "TwentyTen@gmail.com"
] ,
[ 
    "gambar" => "jaka.jpg",
    "nama" => "jaka Sakti Wara",
    "npm" => "180202108",
    "jurusan" => "Teknik Informatika",
    "email" => "JakaImout@gmail.com"
] ,
[ 
    "gambar" => "korti.jpg",
    "nama" => "M. Tomy Syahrial Putra",
    "npm" => "180202112",
    "jurusan" => "Teknik Informatika",
    "email" => "TommyPutra@gmail.com"
] ,
[ 
    "gambar" => "guruh.jpg",
    "nama" => "Muhammad Guruh Arafah",
    "npm" => "180202103",
    "jurusan" => "Teknik Informatika",
    "email" => "ArgusArafah@gmail.com"
] ,     

];

$angka = [1,2,3,4,5,6,8,9];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET dan POST</title>
</head>
<body>
<ul>
<?php foreach ($mahasiswa as $mhs) :?> 
    <li>--> <a href="detail.php?nama=<?php echo $mhs["nama"]?>&npm=<?php echo $mhs["npm"]?>&jurusan=<?php echo $mhs["jurusan"]?>&email=<?php echo $mhs["email"]?>&gambar=<?php echo $mhs["gambar"]?>">

    <?php echo $mhs["nama"]?>
    
    </a></li>
<?php endforeach?>
</ul>
</body>
</html>