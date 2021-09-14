<?php
class Bilangan{
    public $deret1,
           $deret2,
           $deret3,
           $deret4;
    public function __construct($cderet1, $cderet2, $cderet3, $cderet4){
        $this->deret1 = $cderet1;
        $this->deret2 = $cderet2;
        $this->deret3 = $cderet3;
        $this->deret4 = $cderet4;
    }
}

$positifgenap = new Bilangan(2, 4, 6, 8);
echo "Positif Genap =" . " " .$positifgenap->deret1;
echo " " .$positifgenap->deret2;
echo " " .$positifgenap->deret3;
echo " " .$positifgenap->deret4;
echo "<br>";
echo "<br>";

$positifganjil = new Bilangan(1, 3, 5, 7);
echo "Positif Ganjil =" . " " .$positifganjil->deret1;
echo " " .$positifganjil->deret2;
echo " " .$positifganjil->deret3;
echo " " .$positifganjil->deret4;
echo "<br>";
echo "<br>";

$negatifgenap = new Bilangan(-2, -4, -6, -8);
echo "Negatif Genap =" . " " .$negatifgenap->deret1;
echo " " .$negatifgenap->deret2;
echo " " .$negatifgenap->deret3;
echo " " .$negatifgenap->deret4;
echo "<br>";
echo "<br>";

$negatifganjil = new Bilangan(-1, -3, -5, -7);
echo "Negatif Ganjil =" . " " .$negatifganjil->deret1;
echo " " .$negatifganjil->deret2;
echo " " .$negatifganjil->deret3;
echo " " .$negatifganjil->deret4;
echo "<br>";
echo "<br>";
?>


