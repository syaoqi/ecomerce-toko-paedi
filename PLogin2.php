<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$email = $_POST['email'];
$passanggota = $_POST['passanggota'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from anggotalogin where email='$email' and passanggota='$passanggota'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
	header("location:home2.php");
}else{
	?>
	<script>
		alert('Gagal Login');
		document.location = "loginanggota.php";
	</script>
	<?php
}
?>
