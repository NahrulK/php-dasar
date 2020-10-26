<?php

// Cek apakah tidak ada data di $_GET

    if (
        !isset($_GET["nama"])||
        !isset($_GET["npm"])||
        !isset($_GET["jurusan"])||
        !isset($_GET["email"])||
        !isset($_GET["gambar"])
    ){
        // redirect
        header("Location: getAndpost.php");

        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>


<style>

  li img {
      width: 150px;
      height: 150px;
  }

  ul {
      width: 200px;
      height: 300px;
      background: khaki;
      
  }

  ul li {
      display: flex;
      align-items: center;
      justify-content: space-between;
  }

</style>

</head>
<body>

 <ul>
 <li><img src="../pertemuan5/img/<?php echo $_GET["gambar"]?>"></li>
 <li>Nama : <?php echo $_GET["nama"]; ?></li>
 <li>NIM : <?php echo $_GET["npm"]?></li>
 <li>Prodi: <?php echo $_GET["jurusan"]?></li>
 <li>Email: <?php echo $_GET["email"]?></li>
 </ul>

 <a href="getAndpost.php">Kembali ke daftar</a>
    
</body>
</html>