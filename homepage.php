<?php
    include "src/Koneksi.php";
    include "src/produk.php";
    
    $produk = new Produk($dbh);
    $hasil = $produk->getProduk();

    include "index.html";
?>
