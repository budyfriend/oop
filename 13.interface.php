<?php

interface InfoProduk
{
    public function getInfoProduk();
}

abstract class Produk
{
    protected $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon = 0;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0)
    {
        // parent
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    // menggunakan setter dan getter untuk validasi
    // setter
    public function setJudul($judul)
    {
        return $this->judul = $judul;
    }
    // getter
    public function getJudul()
    {
        return $this->judul;
    }
    public function setPenulis($penulis)
    {
        return $this->penulis = $penulis;
    }
    public function getPenulis()
    {
        return $this->penulis;
    }
    public function setPenerbit($penerbit)
    {
        return $this->penerbit = $penerbit;
    }
    public function getPenerbit()
    {
        return $this->penerbit;
    }
    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }
    public function getDiskon()
    {
        $this->diskon;
    }
    public function setHarga($harga)
    {
        return $this->harga = $harga;
    }
    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
    // abstrak getInfo
    abstract public function getInfo();
}

// Child Class
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

class Game extends Produk implements InfoProduk
{
    public $waktuMain;
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
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
        $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class cetakInfoProduk
{
    public $daftarProduk = array();
    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }
    public function cetak()
    {
        $str = "DAFTAR PRODUK : <br>";
        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}


$produk1 = new Komik(
    "Naruto",
    "Masashi Kishimoto",
    "Shonen Jump",
    30000,
    100
);

$produk2 = new Game(
    "Uncharted",
    "Neil Druckmann",
    "Sony Computer",
    250000,
    50
);

$cetakProduk = new cetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
