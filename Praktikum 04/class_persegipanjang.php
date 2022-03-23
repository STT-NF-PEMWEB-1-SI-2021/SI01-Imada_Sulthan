<?php
class persegipanjang {
    public $panjang;
    public $lebar;

    function __construct($panjang, $lebar){
        $this -> panjang = $panjang;
        $this -> lebar = $lebar;}

    function hitung_luas(){
        return $this-> panjang * $this -> lebar;}

    function hitung_keliling(){
        return 2 * ($this -> panjang + $this -> lebar);}
}
    $persegi_1 = new persegipanjang ( 23, 7);
    $persegi_2 = new persegipanjang (23, 13);

    echo "<br>Luas Persegi Panjang I ".$persegi_1->hitung_luas();
    echo "<br>Luas Persegi Panjang II ".$persegi_2->hitung_luas();

    echo "<br>Keliling Persegi Panjang I ".$persegi_1->hitung_keliling();
    echo "<br>Keliling Persegi Panjang II ".$persegi_2->hitung_keliling();


?>