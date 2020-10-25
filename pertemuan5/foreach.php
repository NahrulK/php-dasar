<?php

$angka = [[1,2,3],[4,5,6],[7,8,9]];





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Assosiative</title>
    <style>
    
    .kotak {
        width: 100px;
        height: 100px;
        background: teal;
        transition: 1s ease;
        float: left;
        margin: 10px;
        text-align: center;
        line-height: 100px;
        /* color: white; */
    }

    .kotak:hover {
        transform : rotate(360deg);
        border-radius: 50%;
    }

    .clear {
        clear: both;
    }

    </style>
</head>
<body>
    
   <?php foreach($angka as $a) :?>

        <?php foreach($a as $b): ?>

            <div class="kotak"><?php echo "$b"?></div>

        <?php endforeach ?>
        <div class="clear"></div>

   <?php endforeach ?>

</body>
</html>