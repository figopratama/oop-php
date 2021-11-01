<?php

class Tabungan {

    public $saldo = 5000;

    public function __construct($saldo, $jumlah)
    {
        $this->saldo = $saldo;
        $this->jumlah   = $jumlah;
    }

}

class PengambilanUang extends Tabungan {
    
    private $proteksi = 1000;

    public function __construct($saldo, $jumlah)
    {
        parent::__construct($saldo, $jumlah);
    }

    private function setProteksi($proteksi)
    {
        $this->proteksi = $proteksi;
    }
    public function getProteksi(): int
    {
        return $this->proteksi;
    }

    public function PengambilanUang(int $jumlah)
    {
        if ($jumlah < 4000) {
            $this->saldo -= $jumlah;
        } else{

        }

        return $this;
    }

    public function getSaldo(): int
    {
        return $this->saldo;
    }
    
    public function ambilUang(int $jumlah) 
    {
        $this->jumlah = $jumlah;
        return $this->jumlah . "<br>";
    }

}




$tariktunai1 = new PengambilanUang(5000, 4500);
$tariktunai2 = new PengambilanUang(5000, 3000);

echo "Uang yang ditabung : " . $tariktunai1->getSaldo() . "<br>";
echo "Uang yang diproteksi : " . $tariktunai1->getProteksi() . "<br>";


echo "-----------------". "<br>"; 
/* Tarik Tunai Gagal */
echo "Uang yang diambil : " . $tariktunai1->ambilUang(4500);
$tariktunai1->PengambilanUang(4500);
echo "Saldo Sekarang : " .  $tariktunai1->getSaldo() . "<br>";

echo "-----------------". "<br>";
/* Tarik Tunai Berhasil */
echo "Uang yang diambil : " . $tariktunai2->ambilUang(3000);
$tariktunai2->PengambilanUang(3000);
echo "Saldo Sekarang : " .  $tariktunai2->getSaldo() . "<br>";



?>
