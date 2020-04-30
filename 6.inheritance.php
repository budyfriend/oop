<?php
// Jual Produk
// Komik
// Game
class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain;

    // metode khusus yang aka dijalankan otomatis stiap membuat instance dari sebuah kelas
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
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
    public function getInfoProduk()
    {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
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
    100,
    null
);

$produk2 = new Game(
    "Uncharted",
    "Neil Druckmann",
    "Sony Computer",
    250000,
    null,
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
