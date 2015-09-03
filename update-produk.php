<?php 
include "src/Koneksi.php";
include "src/produk.php";

$produk = new Produk($dbh);

if (isset($_POST['submit'])) {
    $id_produk = $_GET['id_edit'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $qty = $_POST['qty'];
    $harga = $_POST['harga'];
    $gambar = $_POST['gambar'];
    $stock = $_POST['stock'];

    $produk->updateDataProduk($id_produk, $nama, $deskripsi, $qty, $harga, $gambar, $stock);

    echo "
        <script>
            window.location = 'admin-produk.php';
        </script>
    ";
}

if (isset($_GET['id_edit'])) {
    $id_produk = $_GET['id_edit'];
    extract($produk->getIDProduk($id_produk));
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="asset/img/250.png">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Pangeran Shoop Update Produk</title>

        <link href="asset/css/bootstrap.min.css" rel="stylesheet">
        <link href="asset/css/style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
<div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-6 form-sign-up"></div>
                <div class="col-lg-6 col-md-6 col-xs-6 form-sign-up">
                    <h3 class="daftar-header">Input Produk</h3>
                    <br>
                    <?php if(!empty($error)) : ?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <?=$error?>
                      <?=$msg?>
                    </div>
                    <?php endif; ?>
                    <form  method="POST">
                        <div class="form-group">
                            <label for="InputName">Nama Produk</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?=$nama;?>">
                        </div>
                       <div class="form-group">
                            <label for="InputDeskripsi">Deskripsi</label>
                            <textarea class="form-control" rows="3" placeholder="Deskripsi Produk" name="deskripsi" value="<?=$deskripsi;?>"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="InputQty">qty</label>
                            <input type="text" class="form-control" id="qty" name="qty" placeholder="Qty" value="<?=$qty;?>">
                        </div>
                        <div class="form-group">
                            <label for="InputHarga">Harga</label>
                            <input type="harga" class="form-control" id="harga" name="harga" placeholder="harga" value="<?=$harga;?>">
                        </div>
                        <div class="form-group">
                            <label for="InputStok">Stok</label>
                            <input type="text" class="form-control" id="stok" placeholder="Masukkan Stock" name="stock" value="<?=$stock;?>">
                        </div>
                        <div class="form-group">
                            <label for="UploadGambar">Upload Gambar</label>
                            <input type="text" class="form-control" id="gambar" name="gambar" value="<?=$gambar;?>">
                        </div>
                        <button type="submit" class="btn btn-danger" name="submit">Simpan</button>
                        <button type="submit" class="btn btn-danger" name="cancle">Cancel</button>
                        <a href="admin-produk.php">kembali ke data produk</a>
                    </form>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-6 form-login"></div>
            </div>
        </div>
        

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="asset/js/bootstrap.min.js"></script>
    </body>
</html>