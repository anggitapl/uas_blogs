<?php 
include '../../conf.php'; 
include '../../conn.php';

$id = post('id'); 
$Judul = post('Judul'); 
$Konten = post('Konten'); 
$Penulis = post('Penulis'); 

$simpan = $koneksi->prepare("UPDATE blogs_08 SET `Judul`='".$Judul."', `Konten`='".$Konten."'); $simpan->execute();
header("location:../../index.php?p=sekolah");
?>
