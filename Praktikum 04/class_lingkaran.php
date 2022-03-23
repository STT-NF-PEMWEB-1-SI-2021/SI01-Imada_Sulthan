<?php
 class lingkaran {
    private $jari;
     const phi =3.14;
     function __construct( $r )
    { 
        $this->jari = $r;}
    function getLuas()
    {
        return self::phi * $this->jari * $this->jari ;}
    function getKeliling()
    {
        return 2 * self::phi * $this->jari;}
} 
    echo "NILAI PHI " . Lingkaran::phi;
    $lingkar1 = new Lingkaran( 10 );
    $lingkar2 = new Lingkaran( 4 );

    echo "<br/>Luas Lingkaran I ".$lingkar1->getLuas();
    echo "<br>Luas Lingkaran II ".$lingkar2->getLuas();

    echo "Keliling Lingkaran I ".$lingkar1->getKeliling();
    echo "<br>Keliling Lingkaran II ".$lingkar2->getKeliling();
    
?>