<?php
class Novel{
    public $judul,
           $namapengarang,
           $tahunterbit,
           $isi,
           $harga;
    public function __construct($cjudul, $cnamapengarang, $ctahunterbit, $cisi, $charga){
        $this->judul = $cjudul;
        $this->namapengarang = $cnamapengarang;
        $this->tahunterbit = $ctahunterbit;
        $this->isi = $cisi;
        $this->harga = $charga;
    }
}

$novel1 = new Novel("judul-novel1 | ", "namapengarang-novel1 | ", "tahunterbit-novel1 | ", "isi-novel1 | ", "harga-novel1 |");
echo $novel1->judul;
echo $novel1->namapengarang;
echo $novel1->tahunterbit;
echo $novel1->isi;
echo $novel1->harga;
echo"<br>";
echo"<br>";

$novel2 = new Novel("judul-novel2 | ", "namapengarang-novel2 | ", "tahunterbit-novel2 | ", "isi-novel2 | ", "harga-novel2 |");
echo $novel2->judul;
echo $novel2->namapengarang;
echo $novel2->tahunterbit;
echo $novel2->isi;
echo $novel2->harga;
echo"<br>";
echo"<br>";

$novel3 = new Novel("judul-novel3 | ", "namapengarang-novel3 | ", "tahunterbit-novel3 | ", "isi-novel3 | ", "harga-novel3 |");
echo $novel3->judul;
echo $novel3->namapengarang;
echo $novel3->tahunterbit;
echo $novel3->isi;
echo $novel3->harga;
echo"<br>";
echo"<br>";
?>


