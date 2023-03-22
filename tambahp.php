<?php  
include "koneksi.php";
$kode =$_POST['kode'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$simpan = "INSERT INTO databarang (kode,nama,jenis,harga,stok) 
VALUES ('$kode','$nama','$jenis','$harga','$stok')";

if ($simpan){
	mysqli_query($koneksi, $simpan);
	echo"<script language='JavaScript'>
	 alert ('Data Berhasil Disimpan');
	 document.location ='databarang.php'
	 </script>";

} else {
echo"gagal upload".mysqli_error($koneksi);
}
