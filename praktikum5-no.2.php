<?php

interface Pegawai
{
    public function infoGaji();
}

class Manajer implements Pegawai
{
    var $nama, $gaji, $tunjangan;

    public function __construct(string $nama, int $gaji, int $tunjangan)
    {
        $this->nama = $nama;
        $this->gaji = $gaji;
        $this->tunjangan = $tunjangan;
    }

    public function infoTunjangan() : int
    {
        return $this->tunjangan;
    }

    public function infoGaji() : int
    {
        return $this->gaji + $this->tunjangan;
    }
}

class Programmer implements Pegawai
{
    var $nama, $gaji, $bonus;

    public function __construct(string $nama, int $gaji, int $bonus)
    {
        $this->nama = $nama;
        $this->gaji = $gaji;
        $this->bonus = $bonus;
    }

    public function infoBonus() : int
    {
        return $this->bonus;
    }

    public function infoGaji() : int
    {
        return $this->gaji + $this->bonus;
    }
}



?>
