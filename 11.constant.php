<?php
// disimpan diluar class
// define('NAMA', 'Budiono');
// echo NAMA;
// echo "<br>";
// disimpan didalam class
// const UMUR = 22;
// echo UMUR;

// class Coba
// {
//     const nama = "Budiono";
// }
// echo Coba::nama;

echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;
echo "<br>";
function coba()
{
    return __FUNCTION__;
}
echo coba();
echo "<br>";
class coba
{
    public $kelas = __CLASS__;
}
$obj = new coba;
echo $obj->kelas;
echo "<br>";
echo __TRAIT__;
echo "<br>";
echo __METHOD__;
echo "<br>";
echo __NAMESPACE__;
