<?php
class Komik extends Produk implements InfoProduk
{
    public $jmlHalaman;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }
    // turunan abstrak yang dipanggil
    public function getInfo()
    {
        // Komik : Naruto | Masashi Kishimoto,Shonen Jump (Rp. 30000) - 100 Halaman
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
    public function getInfoProduk()
    {
        // overriding - parent : mengambil data getInfoProduk dari luar
        // :: (methode static)
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}
