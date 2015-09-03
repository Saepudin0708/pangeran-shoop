<?php

    class Produk
    {
        private $db;
        public function __construct($database)
        {
            $this->db = $database;
        }

        public function getproduk()
        {
            $query = "select * from produk";
            $result = $this->db->prepare($query);
            $result->execute();
            return $result->fetchAll();
        }
    }
?>