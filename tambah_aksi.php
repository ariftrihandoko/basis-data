<?php 
// koneksi database
include 'koneksi.php';
 

$nama = $_POST['nama'];
$no_punggung = $_POST['no_punggung'];
 if (!empty($nama) || !empty($no_punggung)) {
// menginput data ke database
mysqli_query($koneksi,"insert into pemain_bola values('','$nama','$no_punggung',)");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>