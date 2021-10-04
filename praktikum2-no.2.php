<?php

//CLASS
class Pecahan{

    //PROPERTY
    use tambah;
    public $pembilang;
    public $penyebut;

    //CONSTRUCT FUNCTION
    public function __construct($pembilang, $penyebut){
        $this->pembilang = $pembilang;
        $this->penyebut = $penyebut;
    }

    //GET FUNCTION
    public function getpembilang(){
        return $this->pembilang;
    }
    
    public function getpenyebut(){
        return $this->penyebut;
    }
}

//TAMBAH TRAIT
trait tambah{
    private $pembilang2 = 5;
    public function tambahpembilang(){
        $this->pembilang += $this->pembilang2;
    }
    private $penyebut2 = 6;
    public function tambahpenyebut(){
        $this->penyebut *= $this->penyebut2;
    }
}

//OBJECT
$pecahan1 = new Pecahan(3, 2);
$pecahan2 = new Pecahan(5, 6);

//METHOD
echo $pecahan1->getpembilang()."/".$pecahan1->getpenyebut();
echo "<br>";
echo $pecahan2->getpembilang()."/".$pecahan2->getpenyebut();
echo "<br>";
echo $pecahan1->tambahpembilang();
echo $pecahan1->tambahpenyebut();
echo "<br>";
echo $pecahan1->getpembilang()."/".$pecahan1->getpenyebut();
?>