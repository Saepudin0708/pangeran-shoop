<?php
include "src/Koneksi.php";
include "src/produk.php";

$produk = NEW Produk($dbh);
$hasil = $produk->getProduk();

if (isset($_GET['delete'])) {
    $produk_hapus = new Produk($dbh);
    $produk_hapus->deleteProduk($_GET['delete']);
    echo "
        <script>
            window.location = 'admin-produk.php';
        </script>
    "; 
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
        <title>Pangeran Shoop | Admin Produk</title>

        <link href="asset/css/bootstrap.min.css" rel="stylesheet">
        <link href="asset/css/style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12"></div>
                <h1>Pangeran Shoop</h1><br>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <a class="btn btn-default" href="insert-produk.php" role="button">+ Tambahkan Produk</a></div>
                        <div class="col-lg-3">

                            <div class="form-group">

                                <div class="input-group">

                                    <input type="text" class="form-control search" id="exampleInputAmount" placeholder="cari produk">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped">
                        <tr>
                            <th>Gambar</th>
                            <th>Nama Barang</th>
                            <th>Kuantitas</th>
                            <th>Harga</th>
                            <th>Stock</th>
                            <th>Action</th>
                        </tr>
                            <?php foreach($hasil as $row) : ?>                                         
                          <tr>
                            <td><?=$row['gambar']?></td>
                            <td><?=$row['nama']?></td>
                            <td><?=$row['qty']?></td>
                            <td><?=$row['harga']?></td>
                            <td><?=$row['stock']?></td>
                            <td align="center">
                            <a href="update-produk.php?id_edit=<?=$row['id_produk']; ?>"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="admin-produk.php?delete=<?=$row['id_produk']; ?>"><i class="glyphicon glyphicon-remove-circle"></i></a>
                            </td>
                         </tr>
                        <?php endforeach; ?>
                  </table>
                    <nav>
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
    </body>
</html>