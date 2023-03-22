<?php  
include "koneksi.php";

$kode =$_POST['kode'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$update = "UPDATE databarang SET kode='$kode',nama='$nama',jenis='$jenis',harga='$harga',stok='$stok' where kode='$kode'";
mysqli_query($koneksi, $update);
if (mysqli_query($koneksi, $update)) {
	header("location:databarang.php");
}else{
	echo "eror gayn,". mysqli_error($koneksi);
}