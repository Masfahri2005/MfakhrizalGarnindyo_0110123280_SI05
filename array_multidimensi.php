<?php
$nama ="Anies" ;
$prodi = "Sistem Informasi";
$semester = "2";

$nama ="Prabowo" ;
$prodi = "Sistem Informasi";
$semester = "2";

$nama ="Ganjar" ;
$prodi = "Sistem Informasi";
$semester = "2";

$mahasiswa = 
[["Anies","SI","8"],
["Prabowo","SI","8"],
["Ganjar","SI","8"]];

foreach($mahasiswa as $mahasiswa){
    echo "nama : " ,$mahasiswa[0] ,"<br>";
    echo "prodi : " ,$mahasiswa[1] ,"<br>";
    echo "semester : " ,$mahasiswa[2] ,"<br>";
    echo "<br>";
}



