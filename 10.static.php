<?php

// class contohStatic
// {
//     public static $angka = 1;
//     public static function halo()
//     {
//         return "Hallo" . self::$angka++ . " kali.";
//     }
// }

// echo contohStatic::$angka;
// echo "<br>";
// echo contohStatic::halo();
// echo "<hr>";
// echo contohStatic::halo();

// OOP BIASA
class contoh
{
    public $angka = 1;
    public function halo()
    {
        return "Haloo " . $this->angka++ . " kali. <br>";
    }
}
$obj = new contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<hr>";
$obj2 = new contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

echo "<hr>";
echo "<hr>";

// OOP STATIC
class contoh2
{
    public static $angka = 1;
    public function halo()
    {
        return "Haloo " . self::$angka++ . " kali. <br>";
    }
}
$obj = new contoh2;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<hr>";
$obj2 = new contoh2;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
