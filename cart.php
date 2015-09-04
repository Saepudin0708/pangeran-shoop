<?php
    include "src/Koneksi.php";
    include "src/produk.php";
    
    $produk = new Produk($dbh);
    
    if (isset($_GET['id_produk'])) {
        $id_produk = $_GET['id_produk'];
        extract($produk->getIDProduk($id_produk));
    }
    
    print_r($_GET['id_produk']);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="asset/img/250.png">
    <title>Pangeran Shoop</title>

    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <br>
    <form action="" method="POST">
        Nama Produk <br>
        <input type="text" name="nama" value='<?=$nama;?>'><br>
        Harga <br>
        <input type="text" name="harga" value='<?=$harga;?>'>

        <button name="submit" value="1">Simpan</button>
    </form>
</body>
</html>