<?php

include 'no-2.php';

echo "=======================================================<br><br>";

/* TRUK 1 */
    $truk1 = new Kendaraan;
    echo "Truk 1: ";
    $truk1->setJmlRoda(4);
    echo $truk1->getJmlRoda()  . ", " . PHP_EOL;
    $truk1->setWarna("Kuning");
    echo $truk1->getWarna() . PHP_EOL;
    echo "<br>";

    $truk1 = new Mobil;
    echo "Truk 1: ";
    $truk1->setBahanBakar("Solar");
    echo $truk1->getBahanBakar() . ", " . PHP_EOL;
    $truk1->setKapasitasMesin(1500);
    echo $truk1->getKapasitasMesin() . PHP_EOL;
    echo "<br>";

    $truk1 = new Truk;
    echo "Truk 1: ";
    $truk1->setMuatanMaks(1000);
    echo $truk1->getMuatanMaks() . PHP_EOL;
    echo "<br>";
    echo "<br>";

/* TRUK 2 */
    $truk2 = new Kendaraan;
    echo "Truk 2: ";
    $truk2->setJmlRoda(6);
    echo $truk2->getJmlRoda()  . ", " . PHP_EOL;
    $truk2->setWarna("Merah");
    echo $truk2->getWarna() . PHP_EOL;
    echo "<br>";

    $truk2 = new Mobil;
    echo "Truk 2: ";
    $truk2->setBahanBakar("Solar");
    echo $truk2->getBahanBakar() . ", " . PHP_EOL;
    $truk2->setKapasitasMesin(2000);
    echo $truk2->getKapasitasMesin() . PHP_EOL;
    echo "<br>";

    $truk2 = new Truk;
    echo "Truk 2: ";
    $truk2->setMuatanMaks(5000);
    echo $truk2->getMuatanMaks() . PHP_EOL;
    echo "<br>";
    echo "<br>";

    echo "=======================<br><br>";

/* TAKSI 1 */
    $taksi1 = new Kendaraan;
    echo "Taksi 1: ";
    $taksi1->setJmlRoda(4);
    echo $taksi1->getJmlRoda()  . ", " . PHP_EOL;
    $taksi1->setWarna("Oranye");
    echo $taksi1->getWarna() . PHP_EOL;
    echo "<br>";

    $taksi1 = new Mobil;
    echo "Taksi 1: ";
    $taksi1->setBahanBakar("Bensin");
    echo $taksi1->getBahanBakar() . ", " . PHP_EOL;
    $taksi1->setKapasitasMesin(1500);
    echo $taksi1->getKapasitasMesin() . PHP_EOL;
    echo "<br>";

    $taksi1 = new Taksi;
    echo "Taksi 1: ";
    $taksi1->setTarifAwal(10000);
    echo $taksi1->getTarifAwal() . ", " . PHP_EOL;
    $taksi1->setTarifPerKm(5000);
    echo $taksi1->getTarifPerKm() . PHP_EOL;
    echo "<br>";
    echo "<br>";

/* TAKSI 2 */
    $taksi2 = new Kendaraan;
    echo "Taksi 2: ";
    $taksi2->setJmlRoda(4);
    echo $taksi2->getJmlRoda()  . ", " . PHP_EOL;
    $taksi2->setWarna("Biru");
    echo $taksi2->getWarna() . PHP_EOL;
    echo "<br>";

    $taksi2 = new Mobil;
    echo "Taksi 2: ";
    $taksi2->setBahanBakar("Bensin");
    echo $taksi2->getBahanBakar() . ", " . PHP_EOL;
    $taksi2->setKapasitasMesin(1300);
    echo $taksi2->getKapasitasMesin() . PHP_EOL;
    echo "<br>";

    $taksi2 = new Taksi;
    echo "Taksi 2: ";
    $taksi2->setTarifAwal(7000);
    echo $taksi2->getTarifAwal() . ", " . PHP_EOL;
    $taksi2->setTarifPerKm(3500);
    echo $taksi2->getTarifPerKm() . PHP_EOL;
    echo "<br>";
    echo "<br>";


    echo "=======================<br><br>";

/* SEPEDA 1 */
    $sepeda1 = new Kendaraan;
    echo "Sepeda 1: ";
    $sepeda1->setJmlRoda(3);
    echo $sepeda1->getJmlRoda()  . ", " . PHP_EOL;
    $sepeda1->setWarna("Hitam");
    echo $sepeda1->getWarna() . PHP_EOL;
    echo "<br>";

    $sepeda1 = new Sepeda;
    echo "Sepeda 1: ";
    $sepeda1->setJmlSadel(1);
    echo $sepeda1->getJmlSadel() . ", " . PHP_EOL;
    $sepeda1->setJmlGir(2);
    echo $sepeda1->getJmlGir() . PHP_EOL;
    echo "<br>";
    echo "<br>";

/* SEPEDA 2 */
    $sepeda2 = new Kendaraan;
    echo "Sepeda 2: ";
    $sepeda2->setJmlRoda(2);
    echo $sepeda2->getJmlRoda()  . ", " . PHP_EOL;
    $sepeda2->setWarna("Putih");
    echo $sepeda2->getWarna() . PHP_EOL;
    echo "<br>";

    $sepeda2 = new Sepeda;
    echo "Sepeda 2: ";
    $sepeda2->setJmlSadel(2);
    echo $sepeda2->getJmlSadel() . ", " . PHP_EOL;
    $sepeda2->setJmlGir(5);
    echo $sepeda2->getJmlGir() . PHP_EOL;
    echo "<br>";
    echo "<br>";


echo "=======================================================<br><br>";



?>
