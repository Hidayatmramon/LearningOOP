<?php
class Manusia{

    // method declaration
    public function berjalan() {
        echo 'berjalan';
    }
}
$Eliff = new Manusia;
?>

<p>Saya Eliff, Saya dapat <?php echo $Eliff->berjalan() ?>.</p>