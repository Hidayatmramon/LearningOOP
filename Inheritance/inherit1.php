<?php
class Orang{
	protected $nama;
	function __construct($nama){
		$this->nama=$nama;
	}
	function UcapSalam(){
		echo "Hallo. Nama Saya adalah ".$this->nama."<br>";
	}
}