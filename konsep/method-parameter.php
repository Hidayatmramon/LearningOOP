<?php
class Manusia{
    // method declaration
    public function membawa($var) {
        echo 'membawa barang dengan tangan '.$var;
    }
}
$Eliff 	= new Manusia;
?>

<p>Saya Elif, Saya <?php echo $Eliff->membawa('kanan') ?>.</p>
<p>Namun, terkadang saya juga <?php echo $Eliff->membawa('kiri') ?>.</p>