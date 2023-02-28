<?php 
$nama = $_GET['name'];
$matkul = $_GET['matkul'];
$UTS = $_GET['UTS'];
$UAS = $_GET['UAS'];
$Tugas = $_GET['tugas'];
$total_nilai = ($UAS + $UTS + $Tugas) / 3;

if($total_nilai > 75){
    $keterangan = "LULUS";

}else {
    $keterangan = "Tidak LULUS";
}







?>