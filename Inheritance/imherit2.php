    <?php
    include("inherit1.php");
    // Pewarisan tanpa perubahan
    class OrangSunda extends Orang{
    }
    // Pewarisan dengan meng-override function UcapSalam
    // dan Penambahan Method
    class OrangInggris extends Orang{
        protected $asal="England"; // penambahan properti baru
        function UcapSalam(){
            echo "Hello. My name is ".$this->nama."<br>";
        }
        function UcapNegara(){ // penambahan method baru
            echo "I'm from ".$this->asal."<br>";
        }
    }
    $kabayan=new OrangSunda("Kabayan");
    $kabayan->UcapSalam();
    $william=new OrangInggris("Prince William");
    $william->UcapSalam();
    $william->UcapNegara();