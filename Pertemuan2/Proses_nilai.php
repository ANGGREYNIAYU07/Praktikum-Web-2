<?php
if (isset($_GET['submit'])) {
    $Nama = $_GET['Nama'];
    $Matkul = $_GET['matkul'];
    $UTS = $_GET['UTS'];
    $UAS = $_GET['UAS'];
    $Praktikum = $_GET['Praktikum'];
    $average = ($UTS + $UAS + $Praktikum)/3;

    echo "Nama: $Nama <br>";
    echo "Mata Kuliah: $Matkul <br>";
    echo "NIlai UTS: $UTS <br>";
    echo "Nilai UAS: $UAS <br>";
    echo "Nilai Praktikum: $Praktikum <br>";

    echo "<br><br>";

    echo "Nilai Rata-rata:" .round($average, 2). "<br>";
    echo "Grade Nilai : ";
    if ($average < 36) {
        echo "E";
    } elseif ($average < 56) {
        echo "D";
    } elseif ($average < 70) {
        echo "C";
    } elseif ($average < 85) {
        echo "B";
    } elseif ($average < 101) {
        echo "A";
    } else {
        echo "I";
    }
} else {
    echo "Tidak Ada Data!";
}
?>
