<?php
class Dispenser
{
    public $volume;
    public $hargasegelas;
    public $volumegelas;
    public $namaminuman;
    public const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function __construct($jari, $tinggi)
    {
        $this -> jari_jari = $jari;
        $this -> tinggi = $tinggi;
        echo "<br/>Jari-jari : " . $jari . " cm";
        echo "<br/>Tinggi : " . $tinggi . " cm";
    }
    public function VolumeWadah()
    {
        return self::PHI * $this -> jari_jari * $this -> jari_jari * $this -> tinggi;
    }
}

class Harga extends Dispenser{

    public function __construct($hargasegelas){
        $this -> hargasegelas = $hargasegelas;
        echo"<br>";
        echo "<br/> Diketahui : ";
        echo "<br/>Harga persatu gelas : " . $hargasegelas;
    }
    public function Harga(){
        return $this -> hargasegelas * 4 ;
    }
}
    
    echo "<br/>  PHI : " . Dispenser :: PHI;
    $volumeWadah = new Dispenser(20, 50);
    $harga = new Harga(500);
    echo "<br/> Volume Wadah : " . $volumeWadah -> VolumeWadah() . " cm3";
    echo "<br/> Harga 4 Gelas : " . $harga -> Harga();

?>