<?php
/**
 * Created by PhpStorm.
 * User: soni
 * Date: 02/10/18
 * Time: 17.09
 */

class Inheritance
{
    public
        $judul, // make default property
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain,
        $tipe;


    public function __construct( $judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0,
    $jmlHalaman = 0, $waktuMain = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    // method
    public function getLabel(){
        return "$this->penulis, $this->penerbit"; // get value of property
    }

    // Problem Inheritance
    public function getInfoLengkap ( ){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} Rp. {$this->harga} ";

        if ($this->tipe == "Komik"){
            $str .= " - {$this->jmlHalaman} Halaman.";
        }else if ($this->tipe == "Game"){
            $str .= " ~ {$this->waktuMain} Jam.";
        }

        return $str;
    }

}
// Object Type
class CetakInfoProduk {

    // special just type data from class ObjectType
    public function cetak ( Inheritance $produk ){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }

}

$produk3 = new Inheritance('Harry potter', "Jin Ellen", 'Kimimoto', 30000, 100, 0, "Komik");  // set new instance
$produk4 = new Inheritance('Monster Hunter', "Kellen", 'De Rian De', 50000, 0, 50, "Game");


// Question when we have much Produk and Many Type. Until now we have just two type "Jumlah Halaman" and "Waktu Main"
echo $produk3->getInfoLengkap();
echo "<br>";
echo $produk4->getInfoLengkap();
