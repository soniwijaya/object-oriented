<?php
/**
 * Created by PhpStorm.
 * User: soni
 * Date: 02/10/18
 * Time: 16.54
 */

class ObjectType
{
    public  $judul = 'judul', // make default property
        $penulis = 'penulis',
        $penerbit = 'penerbit',
        $harga = 0;

    public function __construct( $judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 'harga' )
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // method
    public function getLabel(){
        return "$this->penulis, $this->penerbit"; // get value of property
    }
}
// Object Type
class CetakInfoProduk {
    // special just type data from class ObjectType
    public function cetak ( ObjectType $produk3 ){
        $str = "{$produk3->judul} | {$produk3->getLabel()} (Rp. {$produk3->harga})";
        return $str;
    }
}

$produk3 = new ObjectType('Harry potter', "Jin Ellen", 'Kimimoto', 30000);  // set new instance

echo '<hr>';

$produk4 = new ObjectType('Monster Hunter', "Kellen", 'De Rian De', 50000);

echo "Komik : " . $produk3->getLabel(); // set method
echo "<br>";
echo "Game : " . $produk4->getLabel();
echo "<br>";
$infoProduk = new CetakInfoProduk(); // instance object Type
echo $infoProduk->cetak($produk3); // print Object Type