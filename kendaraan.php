<?php
abstract class Kendaraan {
    private Jenis;
    private Bentuk;
    protected Harga;

    public function _construct($Jenis, $Bentuk, $Harga) {
        $this->Jenis = Jenis;
        $this->Bentuk = Bentuk;
        $this->Harga = Harga;
    }

    public function getJenis() {
        return $this->Jenis;
    }

    public function setJenis($Jenis) {
    }

    public function getBentuk() {
        return $this->Bentuk;
    }

    public function setBentuk($Bentuk) {
        return $this->$Bentuk;
    }
    public function getHarga() {
        return $this->Harga;
    }

    abstract public function hitungHarga();
}

class KendaraanKU extends Kendaraan {
    private $Promo;
    public function _construct($Jenis, $Bentuk, $Harga, $Promo) {
        parent ::_construct($Jenis, $Bentuk, $Harga);
        $this->Promo = $Promo;
    }

    public function setPromo($Promo) {
        $this->Promo =$Promo
    }

    public function hitungHarga() {
        return $this->Harga + $this->Promo
    }

    public function getInfo() {
        return "Jenis: " . $this->getJenis() . ",Bentuk: " . $this->getBentuk() . ", Harga: " . $this->getHarga();
     }
}

class Mobil extends Kendaraan {
    private $Promo;

    public function _construct($Jenis, $Bentuk, $Harga, $Promo) {
        parent::_construct($Jenis, $Bentuk, $Harga);
        $this->Promo = $Promo;
    }

    public function getPromo(){
        return $this->Promo;
    }

    public function setPromo($Promo) {
        $this->Promo = $Promo;
    }

    public function hitungHarga() {
        return $this->Harga + $this->Promo;
    }

    public function getInfo() {
        return "Jenis: " . $this->getJenis() .",Bentuk: " . $this->getBentuk() . ",Harga: " . $this->getHarga();
    }
    
}
?>