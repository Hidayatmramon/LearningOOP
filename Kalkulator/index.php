<?php
include "fungsi.php";
$kalku = new kalkulator();

echo '<H1>Latihan membuat program dengan OOP PHP</H1>';
echo '<form method="post">';
echo '<input type="text" name="x" size="3">&nbsp;';
echo '<select name="operasi">
      <option value="tambah">+</option>
      <option value="kali">*</option>
      <option value="kurang">-</option>
      <option value="bagi">/</option>
      </select>&nbsp;';
echo '<input type="text" name="y" size="3">&nbsp;';
echo '<input type="submit" value="Hitung">';
echo '</form>';

if ($_POST) {
    $x = $_POST['x'];
    $y = $_POST['y'];
    if ($_POST['operasi'] == "tambah") {
        echo "Hasil: ".$x." + ".$y." = ".$kalku->setTambah($x, $y)."<br /><br />";
    }
    elseif ($_POST['operasi'] == "kali") {
        echo "Hasil: ".$x." x ".$y." = ".$kalku->setKali($x, $y)."<br /><br />";
    }
    elseif ($_POST['operasi'] == "kurang") {
        echo "Hasil: ".$x." - ".$y." = ".$kalku->setKurang($x, $y)."<br /><br />";
    }
    elseif ($_POST['operasi'] == "bagi") {
        echo "Hasil: ".$x." / ".$y." = ".$kalku->setBagi($x, $y)."<br /><br />";
    }
}
?>
