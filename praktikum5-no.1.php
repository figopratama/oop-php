<?php

interface Staff
{
    public function totalJamKerja();
}

class Manager implements Staff
{
    var $jamkerja, $jamcuti;

    public function __construct(int $jamkerja, int $jamcuti)
    {
        $this->jamkerja = $jamkerja;
        $this->jamcuti = $jamcuti;
    }

    public function infoJamCuti() : int
    {
        return $this->jamcuti;
    }

    public function totalJamKerja() : int
    {
        return $this->jamkerja - $this->jamcuti;
    }
}

class Courier implements Staff
{
    var $jamkerja, $jamlembur;

    public function __construct(int $jamkerja, int $jamlembur)
    {
        $this->jamkerja = $jamkerja;
        $this->jamlembur = $jamlembur;
    }

    public function infoJamLembur() : int
    {
        return $this->jamlembur;
    }

    public function totalJamKerja() : int
    {
        return $this->jamkerja + $this->jamlembur;
    }
}



?>
