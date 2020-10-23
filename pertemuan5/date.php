<?php

    // echo(date("l"));

    echo date("l, d-M,Y");

    echo "<br>";
    $t = time();

    // Time Stamp

    // Detik yang sudah berlalu sejak 1 januari 1970
    // echo time();

    echo date("d M Y", $t + 3600);
    echo date("D-M-Y", time()-60*60*24*100);

    // mktime
    // mktime (jam,menit,detik,bulan,tanggal,tahun)
    echo "<br>";
    echo mktime(0,0,0,8,7,2000);
    echo "<br>";
    echo date("D, d-M Y", mktime(0,0,0,8,7,2000));

    // strtotime

    echo strtotime("7 aug 2000");

    // Semua yang diatas ini adalah Build-in-function

    // User-defined-function

    

?>

