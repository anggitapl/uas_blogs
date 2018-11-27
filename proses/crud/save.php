<?php 
include '../../conf.php'; 
include '../../conn.php';
$Judul = post('Judul'); 
$Konten = post('Konten'); 
$Penulis = post('Penulis'); 
$simpan = $koneksi->prepare("INSERT INTO artikel (`Judul`,`Konten`,`Penulis`) 
	VALUES ('".$Judul."','".$Konten."','".$Penulis."')"); $simpan->execute();
header("location:../../index.php?p=sekolah");
?>