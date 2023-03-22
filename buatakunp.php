<?php  
include "koneksi.php";
$useranggota =$_POST['useranggota'];
$passanggota =$_POST['passanggota'];
$email =$_POST['email'];
$simpan = "INSERT INTO anggotalogin (useranggota,passanggota,email) 
VALUES ('$useranggota','$passanggota','$email')";

if ($simpan){
	mysqli_query($koneksi, $simpan);
	echo"<script language='JavaScript'>
	 alert ('Data Berhasil Disimpan');
	 document.location ='berhasil.php'
	 </script>";

} else {
echo"gagal upload".mysqli_error($koneksi);
}
