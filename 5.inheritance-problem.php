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
        $waktuMain,
        $tipe;

    // metode khusus yang aka dijalankan otomatis stiap membuat instance dari sebuah kelas
    public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap()
    {
        // Komik : Naruto | Masashi Kishimoto,Shonen Jump (Rp. 30000) - 100 Halaman
        // Game : UNcharted | Neil Druckmann, Sony Computer (Rp. 250.000) ~ 50 Jam
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if ($this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if ($this->tipe == "Game") {
            $str .= " ~ {$this->waktuMain} Jam.";
        }
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


$produk1 = new Produk(
    "Naruto",
    "Masashi Kishimoto",
    "Shonen Jump",
    30000,
    100,
    null,
    "Komik"
);

$produk2 = new Produk(
    "Uncharted",
    "Neil Druckmann",
    "Sony Computer",
    250000,
    null,
    50,
    "Game"
);

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

// Komik : Masashi Kishimoto,Shonen Jump
// Game : Neil Druckmann,Sony Computer
// Naruto | Masashi Kishimoto,Shonen Jump (Rp. 30000)

// kurang lebih : ~
// Komik : Naruto | Masashi Kishimoto,Shonen Jump (Rp. 30000) - 100 Halaman
// Game : UNcharted | Neil Druckmann, Sony Computer (Rp. 250.000) ~ 50 Jam.
