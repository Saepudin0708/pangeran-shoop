<?php
    class Produk
    {
        private $db;

        public function __construct($database)
        {
            $this->db = $database;
        }

        public function insertDataProduk($nama, $deskripsi, $qty, $harga, $gambar, $stock)
        {
            $query = "INSERT INTO produk (nama, deskripsi, qty, harga, gambar, stock)
                        VALUES (:nama, :deskripsi, :qty, :harga, :gambar, :stock)";
            $result = $this->db->prepare($query);
            $result->bindParam(':nama', $nama);
            $result->bindParam(':deskripsi', $deskripsi);
            $result->bindParam(':qty', $qty);
            $result->bindParam(':harga', $harga);
            $result->bindParam(':gambar', $gambar);
            $result->bindParam(':stock', $stock);
            $result->execute();
        }

        public function updateDataProduk($id_produk, $nama, $deskripsi, $qty, $harga, $gambar, $stock)
        {
            $query = ("UPDATE produk SET nama=:nama,
                                        deskripsi=:deskripsi,
                                        qty=:qty,
                                        harga=:harga,
                                        gambar=:gambar,
                                        stock=:stock
                                        WHERE id_produk=:id_produk");
            $result = $this->db->prepare($query);
            $result->bindParam(':nama', $nama);
            $result->bindParam(':deskripsi', $deskripsi);
            $result->bindParam(':qty', $qty);
            $result->bindParam(':harga', $harga);
            $result->bindParam(':gambar', $gambar);
            $result->bindParam(':stock', $stock);
            $result->bindParam(':id_produk', $id_produk);
            $result->execute();
        }

        public function getProduk()
        {
            $query = "SELECT * FROM produk";
            $result = $this->db->prepare($query);
            $result->execute();
            return $result->fetchAll();
        }

        public function getIDProduk($id_produk)
        {
            $result = $this->db->prepare("SELECT * FROM produk WHERE id_produk=:id_produk");
            $result->execute(array(":id_produk"=>$id_produk));
            $editRow=$result->fetch(PDO::FETCH_ASSOC);
            return $editRow;
        }

        public function deleteProduk($id_produk)
        {
            $query = ("DELETE FROM produk WHERE id_produk=:id_produk");
            $result = $this->db->prepare($query);
            $result->bindParam(':id_produk', $id_produk);
            $result->execute();
        }

    }
