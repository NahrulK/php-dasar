<?php

// Menampilkan Array dengan pengulangan

// for dan foreach

$angka = ["satu","dua","tiga","empat","lima"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
</head>
<style>

    .kotak {
        width : 100px;
        height: 100px;
        text-align: center;
        line-height: 100px;
        color: white;
        border-radius: 5px;
        box-shadow: 0 0 2px 3px black;
        margin: 3px;
        background-color: rgb(170,10,10); 
        float: left;
    }

    .clear {clear: both;}

</style>
<body>
    
   <?php for($i = 0; $i < count($angka); $i++) : ?>

   <div class="kotak">
   <?php echo $angka[$i]; ?>
   </div>

   <?php endfor ?>

   <div class="clear"></div>

   <?php foreach($angka as $satuAngka) : ?>

    <div class="kotak"><?php echo $satuAngka ?></div>

   <?php endforeach;?>
</html>