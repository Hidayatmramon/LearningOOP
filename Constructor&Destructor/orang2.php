<?php
class Orang{
	private $nama;
	function __construct($nama){ //pembuatan constructor
		$this->nama=$nama;
		echo "Contructor: $this->nama dilahirkan<br>";
	}
	function UcapSalam(){
		echo "Hallo. Nama Saya adalah ".$this->nama."<br>";
	}
	function __destruct(){ //pembuatan destructor
		echo "Destructor: $this->nama meninggal dunia<br>";
	}
}
