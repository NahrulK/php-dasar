<?php
$mahasiswa = ["Nahrul Khayattullah","180202113","Teknik Informatika","Khayattullah73@gmail.com"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
 <?php foreach($mahasiswa as $mhs) : ?>

   <li><?php echo $mhs?></li>

  <?php endforeach ?>
 </ul>
</body>
</html>