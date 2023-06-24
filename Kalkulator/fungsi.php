<?php
class kalkulator{
    private $x;
    private $y;

    public function setTambah ($x, $y){
        $this->x = $x;
        $this->x = $x;
        $hasil = $this-> x + $this->y;
        return $hasil;
        
    }
    public function setKali ($x, $y){
        $this->x = $x;
        $this->x = $x;
        $hasil = $this->x * $this->y;
        return $hasil;
        
    }
    public function setKurang ($x, $y){
        $this->x = $x;
        $this->x = $x;
        $hasil = $this->x - $this->y;
        return $hasil;
        
    }
    public function setBagi ($x, $y){
        $this->x = $x;
        $this->x = $x;
        $hasil = $this->x / $this->y;
        return $hasil;
        
    }

}
?>