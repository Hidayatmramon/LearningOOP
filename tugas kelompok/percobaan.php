<?php
class Nilai {
    private $nilai      ;

    public function __construct($nilai = "nilai") { 
        $this->nilai = $nilai;
    }

    public function SetNilai($nilai) {
        $this->nilai = $nilai;
    }

    public function GetNilai() {
        $angka = $this->nilai;

        if ($this->nilai >= 10 && $this->nilai < 75) {
            return "Tidak Kompeten";
        } else if ($this->nilai >= 75 && $this->nilai < 79) {
            return "Pas KKM";
        } else if ($this->nilai == 80) {
            return "bagus";
        }else {
            return"sangat bagus";
        }

        return $angka;
    }
}

    $nilait = 60;
    $nilaiATS = 75;
    $nilaiUTS = 80;

    $nilai = new Nilai();
        echo "Nilai Tugas:$nilait";
        echo "<br>";
        echo "Nilai ATS:$nilaiATS";
        echo "<br>";
        echo "Nilai UTS:$nilaiUTS";
        echo "<br>";
        echo "<hr>";
    $nilai->SetNilai($nilait);
        echo "Nilai Tugas Anda: " . $nilai->GetNilai();
        echo "<br>";
        echo "<hr>";
    $nilai->SetNilai($nilaiATS);
        echo "Nilai ATS Anda: " . $nilai->GetNilai();
        echo "<br>";
        echo "<hr>";
    $nilai->SetNilai($nilaiUTS);
        echo "Nilai UTS Anda: " . $nilai->GetNilai();
        echo "<br>";
        echo "<hr>";
        echo "Nilai Tertinggi Anda: " . max($nilait, $nilaiATS, $nilaiUTS);
        echo "<br>";
        echo "Nilai Terendah Anda: " . min($nilait, $nilaiATS, $nilaiUTS);
        echo "<br>";
        echo "<hr>";

    $rata_rata = ($nilait + $nilaiATS + $nilaiUTS) / 3;

        echo "Nilai Rata-Rata Anda = ($nilait + $nilaiATS + $nilaiUTS) / 3 = " . $rata_rata;



?>