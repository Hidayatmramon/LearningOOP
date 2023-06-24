<?php 
  class Mobil {
    //profery
      public $merk;
      public $nama;
      public $warna;
      public $kecepatan;
    
      public function inputDataMobil($merk, $nama, $warna, $kecepatan) {
        $this->merk = $merk;
        $this->nama = $nama;
        $this->warna = $warna;
        $this->kecepatan = $kecepatan;
      }
      public function getKondisiMobil() {
        echo "Kondisi mobil ";
        if ($this->kecepatan > 0) {
          echo "maju";
        }
        else {
          echo "mundur";
        }
      }
    
      public function getCetak() {
        echo "<br>Merk Mobil: ".$this->merk;
        echo "<br>Nama Mobil: ".$this->nama;
        echo "<br>Warna Mobil: ".$this->warna;
        echo "<br>Kecepatan Mobil: ".$this->kecepatan;
      }
      
    }   
  $mobil1 = new Mobil();
  $mobil1->inputDataMobil("Toyota", "Fortuner", "Hitam", 250);
  $mobil1->getKondisiMobil("");
  $mobil1->getCetak();
  echo "<br><br>";
  
  $mobil2 = new Mobil();
  $mobil2->inputDataMobil("Honda", "Brio", "Hijau", -100);
  $mobil2->getKondisiMobil("<p style='color:green;'>Hijau</p>");
 // $mobil2->inputDataMobil("Honda", "Brio", "<p style='color:green;'>Hijau</p>", -100);
  $mobil2->getCetak();
  
?>