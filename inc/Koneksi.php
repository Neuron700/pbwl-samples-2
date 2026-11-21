<?php

class Koneksi
{

    protected object $koneksi;

    public function __construct()
    {
        try {
            $this->koneksi = new PDO("mysql:host=127.0.0.1;port=3307;dbname=pbwl_samples_2", "root", "");
        } catch (PDOException $e) {
            echo "Koneksi gagal: " . $e->getMessage();
        }
    }
}
