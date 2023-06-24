<?php
class Nilai{
	private $tugas=0,$uts=0, $uas=0;
	function settugas($nilai){
		if(($nilai<=100)&&($nilai>=0))
			$this->tugas=$nilai;
		}
	function setuts($nilai){
		if(($nilai<=100)&&($nilai>=0))
			$this->uts=$nilai;
	}
	function setuas($nilai){
		if(($nilai<=100)&&($nilai>=0))
			$this->uas=$nilai;
	}
	function gettugas(){
		return $this->tugas;
	}
	function getuts(){
		return $this->uts;
	}
	function getuas(){
		return $this->uas;
	}
	function getNA(){
		$nilaiakhir=0.2*$this->tugas+0.3*$this->uts+0.5*$this->uas;
		return $nilaiakhir;
	}
	function tampil(){
		echo "Nilai Tugas : ".$this->tugas." Nilai UTS : ".$this->uts.
		" Nilai UAS : ".$this->uas." Nilai akhir : ".$this->getNA()."<br>";
		}
} // End of Class Nilai

// Contoh penggunaan class Nilai
$nilai=new Nilai();
$nilai->settugas(80); // Nilai berubah
echo "Nilai Tugas sekarang adalah : ".$nilai->gettugas()."<br>";
$nilai->setuts(60); // Nilai berubah
$nilai->setuas(90); // Nilai berubah
$nilai->tampil();
$nilai->setuas(110); // Nilai uas tidak berubah, Nilai baru tidak valid
$nilai->tampil();
echo "Nilai akhir adalah : ".$nilai->getNA();
?>