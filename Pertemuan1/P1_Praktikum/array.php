<?php

// Array Index
$animals = ['Macan', 'Kucing', 'Beruang', 'Ayam'];

// Menambahakan data array
array_push ($anaimals, "Kambing");

// Mengakses Array Index
var_dump ($animals);

// Array Assosiatif
$animal = [
    'nama' => $animals[2],
    'jenis' => 'Karnivora',
    'usia' => "4 bulan"
];

// Mengakses Array Assosiatif
echo $animal['jenis'];

