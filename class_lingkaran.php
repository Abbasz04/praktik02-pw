<?php 

class Lingkaran {
    // membuat peroje
    public $jari_jari;
    public const PHI = 3.14;

    // membuat method
    public function __construct($r){
        $this->jari_jari = $r;
    }
    // LUAS
    public function luas(){
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }
    // KELILING
    public function keliling(){
        return 2*self::PHI * $this->jari_jari;
    }


}


// membuat objek
$lingkaran1 = new Lingkaran(10);
echo "Luas Lingkaran = " . $lingkaran1->luas();
echo "<br>";
echo "Keliling Lingkaran = " . $lingkaran1->keliling();