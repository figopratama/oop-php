<!-- DERET PERTAMA -->
<?php
class Satuderet{
    public $deret1;
    public function __construct($cderet1){
        $this->deret1 = $cderet1;
    }    
}

$deret = new Satuderet(2);
echo $deret->deret1;
echo"<br>";
echo"<br>";
?>


<!-- DERET KEDUA -->
<?php
class Duaderet{
    public $deret1,
           $deret2;
    public function __construct($cderet1, $cderet2){
        $this->deret1 = $cderet1;
        $this->deret2 = $cderet2;
    }    
}

$deret = new Duaderet(2, 5);
echo $deret->deret1;
echo $deret->deret2;
echo"<br>";
echo"<br>";
?>

<!-- DERET KETIGA -->
<?php
class Tigaderet{
    public $deret1,
           $deret2,
           $deret3;
    public function __construct($cderet1, $cderet2, $cderet3){
        $this->deret1 = $cderet1;
        $this->deret2 = $cderet2;
        $this->deret3 = $cderet3;
    }
}

$deret = new Tigaderet(2, 5, 8);
echo $deret->deret1;
echo $deret->deret2;
echo $deret->deret3;
echo"<br>";
echo"<br>";
?>

<!-- DERET KEEMPAT -->
<?php
class Empatderet{
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

$deret = new Empatderet(2, 5, 8, 11);
echo $deret->deret1;
echo $deret->deret2;
echo $deret->deret3;
echo $deret->deret4;
echo"<br>";
echo"<br>";
?>


