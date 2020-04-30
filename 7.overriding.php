<?php
// Jual Produk
// Komik
// Game
class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    // metode khusus yang aka dijalankan otomatis stiap membuat instance dari sebuah kelas
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0)
    {
        // parent
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        // Komik : Naruto | Masashi Kishimoto,Shonen Jump (Rp. 30000) - 100 Halaman
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

// Child Class
class Komik extends Produk
{
    public $jmlHalaman;

    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        // overriding - parent : mengambil data getInfoProduk dari luar
        // :: (methode static)
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public $waktuMain;
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }
    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class cetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
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

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

// Komik : Masashi Kishimoto,Shonen Jump
// Game : Neil Druckmann,Sony Computer
// Naruto | Masashi Kishimoto,Shonen Jump (Rp. 30000)

// kurang lebih : ~
// Komik : Naruto | Masashi Kishimoto,Shonen Jump (Rp. 30000) - 100 Halaman
// Game : UNcharted | Neil Druckmann, Sony Computer (Rp. 250.000) ~ 50 Jam.
