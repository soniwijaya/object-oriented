<?php
/**
 * Created by PhpStorm.
 * User: soni
 * Date: 30/09/18
 * Time: 17.08
 */

// learn Property and Method
// Visibilty Public

class Produk
{
    public  $judul = 'judul', // make default property
            $penulis = 'penulis',
            $penerbit = 'penerbit',
            $harga = 0;

    // method
    public function getLabel(){
        return "$this->penulis, $this->penerbit"; // get value of property
    }
}

//$produk1 = new Produk();
//$produk1->judul = 'naruto';
//
//$produk2 = new Produk();
//$produk2->judul = 'fortnite';
//$produk2->tambahProperty = 'property baru';
//
//var_dump($produk1);
//var_dump($produk2);

$produk3 = new Produk();  // set new instance
$produk3->judul = 'Harry potter'; // fill property with new value
$produk3->penulis = "Jin Ellen";
$produk3->penerbit = 'Kimimoto';
$produk3->harga = 30000;

//echo "Komik : $produk3->judul, $produk3->penulis ";
//echo "<br>";
//echo $produk3->getLabel();

echo '<hr>';

$produk4 = new Produk();
$produk4->judul = 'Monster Hunter';
$produk4->penerbit = "Kellen";
$produk4->penulis = 'De Rian De';
$produk4->harga = 50000;

echo "Komik : " . $produk3->getLabel(); // set method
echo "<br>";
echo "Game : " . $produk4->getLabel();