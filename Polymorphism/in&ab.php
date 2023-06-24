<?php
// membuat interface Tanah
interface Tanah
{
    public function hitungLuas();
}

// membuat abstract class Bibit
abstract class Bibit
{
    abstract public function ditanami();
}

// extends Bibit dan implements Tanah
class Lingkaran extends Bibit implements Tanah
{
    private $jariJari;
    private $pi = 3.14;

    public function __construct($jariJari) {
        $this->jariJari = $jariJari;
    }

    // menghitung luas tanah berbentuk lingkaran
    // implements method dari interface tanah
    public function hitungLuas() {
        return $this->jariJari * $this->jariJari * $this->pi;
    }

    // tanah ditanami Kopi
    // extneds method dari abstract class Bibit
    public function ditanami() {
        return "ditanami Kopi";
    }
}

class PersegiPanjang extends Bibit implements Tanah {
    private $panjang;
    private $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    // menghitung luas tanah berbentuk persegi panjang
    // implements method dari interface tanah
    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }

    // tanah ditanami Padi
    // extneds method dari abstract class Bibit
    public function ditanami() {
        return "ditanami Padi";
    }
}

$tanahAgus = new Lingkaran(3);
$tanahChandra = new PersegiPanjang(3,4);

echo "Tanah Agus seluas " . $tanahAgus->hitungLuas() . " m2 \n";
echo $tanahAgus->ditanami() . "\n \n";

echo "Tanah Chandra seluas " . $tanahChandra->hitungLuas() . " m2 \n";
echo $tanahChandra->ditanami() . "\n";