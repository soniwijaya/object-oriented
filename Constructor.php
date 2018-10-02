<?php
/**
 * Created by PhpStorm.
 * User: soni
 * Date: 02/10/18
 * Time: 16.33
 */

class Constructor
{
    public  $judul = 'judul', // make default property
        $penulis = 'penulis',
        $penerbit = 'penerbit',
        $harga = 0;

    public function __construct( $judul, $penulis, $penerbit, $harga )
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

$produk3 = new Constructor('Harry potter', "Jin Ellen", 'Kimimoto', 30000);  // set new instance

echo '<hr>';

$produk4 = new Constructor('Monster Hunter', "Kellen", 'De Rian De', 50000);

echo "Komik : " . $produk3->getLabel(); // set method
echo "<br>";
echo "Game : " . $produk4->getLabel();

var_dump($produk3);