<?php

/* PARENT CLASS: ORANG */
class Katak {
    
    public function __call(string $method_name, array $arguments)
    {
        $methodArray = array('Katak');
        
        if (in_array($method_name, $methodArray) === false)
        {
            die("\n Method does not exist");
        }

    // If there is only one argument
        if (count($arguments) === 2)
        {
            $this->Katak($arguments[0], $arguments[1]);
        }
        
    // If not two argument
        else
        {
            echo "\n unknown method";
            return false;
        }
    }

    // function Katak
    function Katak(int $umur, string $nama)
    {
        echo "<b> Nama:</b> $nama";
        echo "<br><b> Umur:</b> $umur";
    }
    
    // function caraBergerak
    function caraBergerak(string $cara)
    {
        echo "<br><b> Cara Bergerak:</b> $cara";
    }
}



/* CHILD CLASS: DOSEN */
class Kecebong extends Katak {
    
    public function __call(string $method_name, array $arguments)
    {
        $methodArray = array('Kecebong');
        
        if (in_array($method_name,$methodArray) === false)
        {
            die("\n Method does not exist");
        }

    // If there is only one argument
        if (count($arguments) === 3)
        {
            $this->Kecebong($arguments[0], $arguments[1], $arguments[2]);
        }

    // If no argument
        else
        {
            echo "\n unknown method";
            return false;
        }
    }

    // function Kecebong
    function Kecebong(int $umur, string $nama, float $panjangEkor)
    {
        echo "<b> Nama:</b> $nama";
        echo "<br><b> Umur:</b> $umur";
        echo "<br><b> Panjang Ekor:</b> $panjangEkor";
    }
}

$O1 = new Katak;
echo "<br>";
    $O1->Katak(5, "Froggy") . PHP_EOL;
    $O1->caraBergerak("Melompat") . PHP_EOL;

$O2 = new Kecebong;
echo "<br><br><br>";
    $O2->Kecebong(2, "Junior Frog", 10) . PHP_EOL;
    $O1->caraBergerak("Berenang") . PHP_EOL;



?>
