<?php

/* PARENT CLASS: ORANG */
class Orang {
    
    public function __call(string $method_name, array $arguments)
    {
        $methodArray = array('Dosen1','Dosen2', 'Dosen3');
        
        if (in_array($method_name, $methodArray) === false)
        {
            die("\n Method does not exist");
        }

    // If there is only one argument
        if (count($arguments) === 1)
        {
            $this->Orang1($arguments[0]);
        }

    // If two argument
        elseif (count($arguments) === 2)
        {
            $this->Orang2($arguments[0], $arguments[1]);
        }
        
    // If no argument
        else
        {
            echo "\n unknown method";
            return false;
        }
    }

    // function Orang1
    function Orang1(string $nama)
    {
        echo "$nama";
    }

    // function Orang2
    function Orang2(string $nama, int $umur)
    {
        echo "$nama, $umur";
    }
}



/* CHILD CLASS: DOSEN */
class Dosen extends Orang {
    
    public function __call(string $method_name, array $arguments)
    {
        $methodArray = array('Dosen1','Dosen2', 'Dosen3');
        
        if (in_array($method_name,$methodArray) === false)
        {
            die("\n Method does not exist");
        }

    // If there is only one argument
        if (count($arguments) === 1)
        {
            $this->Dosen1($arguments[0]);
        }

    // If two argument
        elseif (count($arguments) === 2)
        {
            $this->Dosen2($arguments[0], $arguments[1]);
        }

    // If three argument
        elseif (count($arguments) === 3)
        {
            $this->Dosen3($arguments[0], $arguments[1], $arguments[2]);
        }
        
    // If no argument
        else
        {
            echo "\n unknown method";
            return false;
        }
    }

    // function Dosen1
    function Dosen1(string $nama)
    {
        echo "$nama";
    }

    // function Dosen2
    function Dosen2(string $nama, int $nip)
    {
        echo "$nama, $nip";
    }

    // function Dosen3
    function Dosen3(string $nama, int $nip, int $umur)
    {
        echo "$nama, $nip, $umur";
    }

    function info()
    {

    }
}



?>
