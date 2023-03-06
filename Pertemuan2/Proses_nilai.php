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
    if ($average < 35) {
        echo "E";
    } elseif ($average < 55) {
        echo "D";
    } elseif ($average < 69) {
        echo "C";
    } elseif ($average < 84) {
        echo "B";
    } elseif ($average < 100) {
        echo "D";
    } else {
        echo "I";
    }
} else {
    echo "Tidak Ada Data!";
}
?>
