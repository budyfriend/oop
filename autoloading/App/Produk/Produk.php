<?php
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
