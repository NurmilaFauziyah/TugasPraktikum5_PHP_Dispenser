<?php
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    function __construct($namaMinuman, $volume, $hargaSegelas){
        $this->namaMinuman = $namaMinuman;
        $this->volume = $volume;
        $this->hargaSegelas = $hargaSegelas;
    }

    public function volumeDispenser($vol){
        $this->volume = $vol;
    }
}

class Minuman extends Dispenser{
    public $uang;
    function __construct($namaMinuman, $volume, $hargaSegelas, $volumeGelas, $uang){
        parent::__construct($namaMinuman, $volume, $hargaSegelas);
        $this->volumeGelas = $volumeGelas;
        $this->uang = $uang; 
    }

    function sisaUang($uang){
        return $this->uang - $this->hargaSegelas;
    }

    function volumeSisa(){
        return $this->volume - $this->volumeGelas;
    }

    function cetak(){
        echo "Nama Minuman : " . $this->namaMinuman . "<br>";
        echo "Volume Dispenser : " . $this->volume . " ml <br>";
        echo "Harga Minuman : Rp " . number_format($this->hargaSegelas, 0, ".", ".") . ',- <br>';
        echo "Volume Gelas : " . $this->volumeGelas . " ml <br>";
        echo "Uang Saat Ini : Rp " . number_format($this->uang, 0, ".", ".") . ',- <br>';
        echo "Volume Sisa Dispenser : " . $this->volumeSisa() . " ml <br>"; 
        echo "Sisa Uang : Rp " . number_format($this->sisaUang($this->uang), 0, ".", ".") . ',-';
        echo "<hr>";
    }
}

echo "<h2>DISPENSER MINUMAN</h2>";
$minuman1 = new Minuman("Fanta", 5000, 2950, 250, 10000);
$minuman1->sisaUang($minuman1->uang);
$minuman1->volumeDispenser(5000);
$minuman1->cetak();

echo "<hr>";
$minuman2 = new Minuman("Coca Cola", 3750, 3250, 250, 7050);
$minuman2->sisaUang($minuman2->uang);
$minuman2->volumeDispenser(3750);
$minuman2->cetak();

echo "<hr>";
$minuman3 = new Minuman("Sprite", 4000, 3500, 250, 3800);
$minuman3->sisaUang($minuman3->uang);
$minuman3->volumeDispenser(4000);
$minuman3->cetak();
?>