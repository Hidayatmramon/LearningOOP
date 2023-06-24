<?php

class Produk {
    public $bakwan;
    public $bakso;
    public $jmlbakwan;
    public $jmlbakso;
    public $hargabakwan;
    public $hargabakso;
    public $totalseluruh;
    public $totalhargabakwan;
    public $totalhargabakso;
        
    public function __construct() {
        $this->hargabakwan = 2000;
        $this->hargabakso = 10000;
    }
}   

class Jumlah extends Produk {
    public function getJumlah($jmlbakwan, $jmlbakso){
        $this->jmlbakwan = $jmlbakwan;
        $this->jmlbakso = $jmlbakso;
    }

    public function setHarga() {
        $this->totalhargabakwan = $this->hargabakwan * $this->jmlbakwan;
        $this->totalhargabakso = $this->hargabakso * $this->jmlbakso;
        $this->totalseluruh = $this->totalhargabakwan + $this->totalhargabakso;
    }

    public function cetakStruk(){
        echo "******* <b> Kantin Wikrama </b> *******\n";
        echo "<br>";
        echo "Jumlah Bakwan: " . $this->jmlbakwan . "\n";
        echo "<br>";
        echo "Jumlah Bakso: " . $this->jmlbakso . "\n";
        echo "<br>";
        echo "Total Harga Bakwan: " . $this->totalhargabakwan . "\n";
        echo "<br>";
        echo "Total Harga Bakso: " . $this->totalhargabakso . "\n";
        echo "<br>";
        echo "Total Seluruh: " . $this->totalseluruh . "\n";
        echo "<br>";
        echo "*********************\n";
    }
}
