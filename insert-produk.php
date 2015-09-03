<?php 
include "src/Koneksi.php";
include "src/produk.php";

$error ="";
$produk = NEW Produk($dbh);


if (isset($_POST['submit'])) {
    
    if(empty($_POST['nama'])) {
        $error .= "<br>nama produk belum diisi</br>";
    }
    if(empty($_POST['deskripsi'])){
       $error .= "<br>deskripsi produk harus diisi</br>";
    }
    if(empty($_POST['qty'])) {
       $error .= "<br>qty belum diisi</br>";
    }
    if(empty($_POST['harga'])) {
       $error .= "<br>harga belum diisi</br>";
    }
    if(empty($_POST['stok'])) {
       $error .= "<br>stok belum diisi</br>";
    }
    if(empty($error)) {
    $produk->insertDataProduk($_POST['nama'], 
                            $_POST['deskripsi'],
                            $_POST['qty'],
                            $_POST['harga'],
                            $_POST['gambar'],
                            $_POST['stok']
                            );
    echo "
        <script>
            window.location = 'admin-produk.php';
        </script>
    ";
   }

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
        <title>Pangeran Shoop Input Produk</title>

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
                    <?php if(empty($error)) : ?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <?=$error?>
                      <?=$msg?>
        			</div>
                    <?php endif; ?>
                    <?php endif; ?>
                    <form action="insert-produk.php" method="POST">
                        <div class="form-group">
                            <label for="InputName">Nama Produk</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                        </div>
                       <div class="form-group">
                            <label for="InputDeskripsi">Deskripsi</label>
                            <textarea class="form-control" rows="3" placeholder="Deskripsi Produk" name="deskripsi"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="InputQty">qty</label>
                            <input type="text" class="form-control" id="qty" name="qty" placeholder="Qty">
                        </div>
                        <div class="form-group">
                            <label for="InputHarga">Harga</label>
                            <input type="harga" class="form-control" id="harga" name="harga" placeholder="harga">
                        </div>
                        <div class="form-group">
                            <label for="InputStok">Stok</label>
                            <input type="text" class="form-control" id="stok" placeholder="Masukkan Stock" name="stok">
                        </div>
                        <div class="form-group">
                            <label for="UploadGambar">Upload Gambar</label>
                            <input type="file" calass="form-control" id="gambar" name="gambar">
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