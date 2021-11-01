<?php

class Kendaraan
{
    public $jmlRoda;
    public $warna;

    public function setJmlRoda(int $jmlRoda)
    {
        $this->jmlRoda = $jmlRoda;
    }
    public function getJmlRoda(): int
    {
        return $this->jmlRoda;
    }

    public function setWarna(string $warna)
    {
        $this->warna = $warna;
    }
    public function getWarna(): string
    {
        return $this->warna;
    }
}

class Mobil extends Kendaraan
{
    public $bahanBakar;
    public $kapasitasMesin;

    public function setBahanBakar(string $bahanBakar)
    {
        $this->bahanBakar = $bahanBakar;
    }
    public function getBahanBakar(): string
    {
        return $this->bahanBakar;
    }

    public function setKapasitasMesin(int $kapasitasMesin)
    {
        $this->kapasitasMesin = $kapasitasMesin;
    }
    public function getKapasitasMesin(): int
    {
        return $this->kapasitasMesin;
    }
}

class Sepeda extends Kendaraan
{
    public $jmlSadel;
    public $jmlGir;

    public function setJmlSadel(string $jmlSadel)
    {
        $this->jmlSadel = $jmlSadel;
    }
    public function getJmlSadel(): string
    {
        return $this->jmlSadel;
    }

    public function setJmlGir(int $jmlGir)
    {
        $this->jmlGir = $jmlGir;
    }
    public function getJmlGir(): int
    {
        return $this->jmlGir;
    }
}

class Truk extends Mobil
{
    public $muatanMaks;

    public function setMuatanMaks(string $muatanMaks)
    {
        $this->muatanMaks = $muatanMaks;
    }
    public function getMuatanMaks(): string
    {
        return $this->muatanMaks;
    }
}

class Taksi extends Mobil
{
    public $tarifAwal;
    public $tarifPerKm;

    public function setTarifAwal(int $tarifAwal)
    {
        $this->tarifAwal = $tarifAwal;
    }
    public function getTarifAwal(): int
    {
        return $this->tarifAwal;
    }

    public function setTarifPerKm(int $tarifPerKm)
    {
        $this->tarifPerKm = $tarifPerKm;
    }
    public function getTarifPerKm(): int
    {
        return $this->tarifPerKm;
    }
}



?>
