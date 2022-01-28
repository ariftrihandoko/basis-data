<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$no_punggung = $_POST['no_punggung'];

 
// update data ke database
mysqli_query($koneksi,"update pemain_bola set nama='$nama', no_punggung='$no_punggung', where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>