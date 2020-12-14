<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas UTS</title>

    <style>
        body{
            padding: 0;
            margin: 0;
            background: #34495e;
            font-family: sans-serif;
            color: white;
        }

        .gua {
            width: 350px;
            padding: 40px;
            position: absolute;
            top: 50%;
            left: 40%;
            transform: translate(-50%, -50%);
            background: #191919;
            /* text-align: center; */
        }

        .hmm {
            text-align : center;
        }

        .hasil {
            width: 300px;
            padding: 40px;
            position: absolute;
            top: 50%;
            left: 70%;
            transform: translate(-50%, -50%);
            background: #171717;
        }

        .hasil table tr td{
            padding: 5px;
        }

        .hasil table {
            font-size: 14px;
        }

        h1, h2 {
            color: white;
            text-transform: uppercase;
            font-weight: 500;
            text-align: center;
        }

        h2 {
            font-weight {
                font-weight: 300;
            }
        }

       .identitas {
            color: white;
            text-transform: uppercase;
            font-weight: 100;
            }

       /* .uang-barang {
           width: 400px;
           height: 200px;
           background-color: #ddd;
       } */


       .uang-barang {
           font-size : 20px;
       }

       .uang-barang input[type = "text"]{
        border: 0;
        background: none;
        display: block;
        margin: 5px auto;
        text-align: center;
        border: 2px solid #3498db;
        padding: 8px 5px;
        width: 200px;
        outline: none;
        border-radius: 24px;
        transition: 0.25s;
        color: white;
       }

        .uang-barang input[type = "text"]:focus{
        width: 202px;
        border-color: #2ecc71;
    }

        .uang-barang input[type = "submit"] {
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #2ecc71;
        padding: 14px 40px;
        outline: none;
        border-radius: 24px;
        transition: 0.25s;
        cursor: pointer;
        color: white;
    }

        .uang-barang input[type = "submit"]:hover {
        background: #2ecc71;
        /* margin-left: 50%; */
        
        }

    
    </style>

</head>
<body>


    <?php


        $uang = $barang1 = $barang2 = $pph = $bayar = $totalBayar = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $uang = test_input($_POST["uang"]);
            $barang1 = test_input($_POST["barang1"]);
            $barang2 = test_input($_POST["barang2"]);
            $pph = isset($_POST["pph"])?$POST["pph"]:"";
            $bayar = isset($_POST["bayar"])?$POST["bayar"]:"";
            $totalBayar = isset($_POST["totalBayar"])?$POST["totalBayar"]:"";
        }

        $bayaran = floatval($barang1) + floatval($barang2);
        $pph = floatval($bayaran)*floatval(0.10);
        $totalBayar = floatval($bayaran)+floatval($pph);
        $sisa = floatval($uang) - floatval($totalBayar);

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

    //    if ($totalBayar > 0) {
    //         echo "<p>Kembalian annda sekian</p>";
    //     } else {
    //         echo "<p> uang anda kurang</p>";
    //     }


    ?>
    
    <div class="gua">
    <h1>MENU</h1>
    <table class="identitas">
        <tr>
            <td>Nama</td>
            <td>: NAHRUL KHAYATTULLAH </td>
        </tr>
        <tr>
            <td>No Absen</td>
            <td>: 18</td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>: 1802020113 </td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>: TID </td>
        </tr>
    </table>
    <table class="uang-barang">
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    <tr>
            <td>Uang</td>
            <!-- <td></td> -->
            <td><input type="text" name="uang" placeholder="Berapa uang anda"></td>
    </tr>
    <tr>
            <td>Barang1</td>
            <!-- <td></td> -->
            <td><input type="text" name="barang1" placeholder="Harga barang pertama"></td>
     </tr>
        <tr>
            <td>Barang2</td>
            <!-- <td></td> -->
            <td><input type="text" name="barang2" placeholder="Harga barang kedua"> </td>
     </tr>
     <tr>
         <td><input type="submit" value=" HITUNG!!" ></td>
     </tr>

    </form>
    </table>
    </div>
    <div class="hasil">
        <H2>HASIL!</H2>
        <table>
            <th>
                <td>UANG ANDA</td>
                <td>: Rp.<?php echo $uang;?>,00</td>
            </th>
            <tr>
                <td>Menu 1</td>
                <td>: Rp.<?php echo $barang1;?>,00</td>
            </tr>
            <tr>
                <td>Menu 2</td>
                <td>: Rp.<?php echo $barang2?>,00</td>
            </tr>
            <tr>
                <td>BAYAR</td>
                <td>: Rp.<?php echo $bayaran;?>,00</td>
            </tr>
            <tr>
                <td>PPH</td>
                <td>: Rp.<?php echo $pph?>,00</td>
            </tr>
    <tr style=" font-weight: bold">
                <td>Total Bayar</td>
                <td>: Rp.<?php echo $totalBayar?>,00</td>
            </tr>
        </table>
        <div class="hmm">

        <?php if ($sisa > 0): ?>

            <p>Uang Anda lebih</p>
            <p style="font-weight: bold">Rp.<?php echo $sisa?>,00</p>
        <?php else : ?>

            <p>Uang Anda kurang</p>
            <p style="font-weight: bold">Rp.<?php echo $sisa?>,00</p>

        <?php endif ?>


        
        
        </div>
        

    </div>
</body>
</html>