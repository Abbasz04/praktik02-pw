<?php

class Balok {
    //Membuat Property
    public $panjang;
    public $lebar;
    public $tinggi;

    //Membuat Method
    public function __construct($p, $l, $t){
        $this->panjang = $p;
        $this->lebar = $l;
        $this->tinggi = $t;
    }
    //luas
    public function luas(){
        return 2 * ( $this->panjang * $this->lebar ) + ( $this->panjang * $this->tinggi ) + ( $this->lebar * $this->tinggi );
    }
    //keliling
    public function keliling(){
        return 4 * ($this->panjang + $this->lebar + $this->tinggi);
    }
    //volume
    public function volume(){
        return  $this->panjang * $this->lebar * $this->lebar;
    }


}

//membuat objek / Instance
$balok1 = new balok(10, 5, 15);
echo "luas Balok 1 =" . $balok1->luas();
echo "<br>";
echo "keliling Balok 1=" . $balok1->keliling();
echo "<br>";
echo "volume Balok 1=" . $balok1->volume();
echo "<br>";
echo "<br>";
echo "<hr>";
echo "<br>";
$balok2 = new balok(9, 2, 150);
echo "luas Balok 2 = " . $balok2->luas();
echo "<br>";
echo "keliling Balok 2= " . $balok2->keliling();
echo "<br>";
echo "volume Balok 2= " . $balok2->volume();