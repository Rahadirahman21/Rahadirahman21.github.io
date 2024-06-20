<?php
class Produk{
  private $judul,
         $penulis,
         $penerbit,
         $harga,
         $diskon;
  
  public function __construct($judul,$penulis,$penerbit,$harga){
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;

  }
  
  
  public function getproduk(){
    return "$this->judul,$this->penulis,$this->penerbit,$this->harga";
  }
  public function setJudul($judul){
    $this->judul=$judul;
  }
  public function getJudul($judul){
    return $this->judul;
  }
  public function setPenulis($penulis){
    $this->penulis=$penulis;
  }
  public function getPenulis($penulis){
    return $this->penulis;
  }
  public function setPenerbit($penerbit){
    $this->penerbit=$penerbit;
  }
  public function getPenerbit($penerbit){
    return $this->penerbit;
  }
  public function setDiskon($diskon){
    $this->diskon = $diskon;
  }
  public function getDiskon($diskon){
    return $this->diskon;
  }
  public function setHarga($harga){
    $this->harga=$harga;
  }
  public function getHarga(){
    return $this->harga - ($this->harga * $this->diskon / 100);
  }

  public function getInfoProduk(){
    $str = $this->getproduk();
    return $str;
  }
}


class Komik extends Produk{
  public $hal;
  public function __construct($judul,$penulis,$penerbit,$harga,$hal){
    parent::__construct($judul,$penulis,$penerbit,$harga);
    $this->hal= $hal;
  }
  
  public function getInfoProduk(){
    $str = "komik : " .parent::getInfoProduk() . " - {$this->hal} halaman.";
    return $str;
  }
}

class Game extends Produk{
  public $jam;
  public function __construct($judul,$penulis,$penerbit,$harga,$jam){
    parent::__construct($judul,$penulis,$penerbit,$harga);
    $this->jam= $jam;
  }

  public function getInfoProduk(){
    $str = "Game : "  .parent::getInfoProduk() . " ~ {$this->jam} jam.";
    return $str;
  }
}

class cetakProduk{
  public function cetak(Produk $produk){
    $str1 = $produk->getproduk();
    return $str1;
  }
}
$produk1 = new Komik("cerpen","rahadi","rpl",888,99,);
$produk2 = new Game("ff","garena","rpl",888,9);
// echo $produk1->getproduk();
// echo "<br>";
// echo $produk2->getproduk();
// $infoproduk1 = new cetakProduk();
// echo "<br>";
// echo $infoproduk1->cetak($produk1);
$produk1->setDiskon(50);
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo $produk1->getHarga();
?>


