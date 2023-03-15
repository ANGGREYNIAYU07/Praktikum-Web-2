<?php
if(isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $prodi = $_POST['prodi'];
    $skills = $_POST['skill'];
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];

    function skor_skill($skills)
    {
       // Array Skills
        $skills_lists = [
            'HTML' => 10, 
            'CSS' => 10,
            'JavaScript' => 20,
            'RWD Bootstrap' => 20,
            'PHP' => 30,
            'Python' => 30,
            'Java' => 50
        ];
        $result = 0;

    foreach ($skills as $skill) {
        $result = $result + $skill_lists[$skills];
    }
        return $result;
    }

    // Tugas

    <?php

if(isset($_POST['submit'])){
    $Nim = $_POST['nim'];
    $Nama = $_POST['nama'];
    $Jenis_Kelamin = $_POST['gender'];
    $Prodi = $_POST['prodi'];

    if (!empty($_POST['skill'])) {
        $skills = $_POST['skill'];
    }

    $Domisili = $_POST['domisili'];
    $Email = $_POST['email'];

    echo "NIM: $Nim";
    echo "<br> Nama: $Nama";
    echo "<br> Jenis Kelamin: $Jenis_Kelamin";
    echo "<br> Program Studi: $Prodi";
    echo "<br> Skill Programming: ";

    $listNilai = [];

    if (!empty($_POST['skill'])) {
        foreach($skills as $skill){

            if ($skill == 'HTML'){
                array_push($listNilai, 10);
            } else if ($skill == 'CSS') {
                array_push($listNilai, 10);
            } else if ($skill == 'JavaScript'){
                array_push($listNilai, 20);
            } else if ($skill == 'RWD Boostrap'){
                array_push($listNilai, 20);
            } else if ($skill == 'PHP'){
                array_push($listNilai, 30);
            } else if($skill == 'Python'){
                array_push($listNilai, 30);
            } else {
                array_push($listNilai, 50);
            }
    
            echo $skill. ", ";
        }
    }

    $nilai = array_sum($listNilai); 

    echo "<br> Domisili: $Domisili";
    echo "<br> Email: $Email";
    echo "<br> Total Nilai: $nilai";

    if ($nilai == 0){
        echo "<br> Predikat: Tidak Memadai";
    } else if ($nilai > 0 AND $nilai <= 40)  {
        echo "<br> Predikat : Kurang";
    } else if ($nilai > 40 AND $nilai <= 60) {
        echo "<br> Predikat : Cukup";
    } else if ($nilai > 60 AND $nilai <= 100 ) {
        echo "<br> Predikat : Baik";
    } else {
        echo "<br> Predikat : Sangat Baik";
    }
}
?>

    echo "NIM: $nim";
    echo "<br> Nama: $nama";
    echo "<br> Jenis Kelamin: $gender";
    echo "<br> Program Studi: $prodi";
    echo "<br> Skill Programming: ";

    foreach ($skills as $skill) {
        echo $skill . ", ";
    }

    echo "<br> Skor Skill:" . skor_skill();
    echo "<br> Kategori Skill: $kategori ";
    echo "<br> Domisili: $domisili";
    echo "<br> Email: $email";
}

