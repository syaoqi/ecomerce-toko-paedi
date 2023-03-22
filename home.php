<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
  <link rel="stylesheet" type="text/css" href="css/stylehome.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand btn bg-info" href="#"><b>TOKO PAEDI</b></a>
  <a class="navbar-brand"href="home.php"><b>MENJUAL BERBAGAI MACAM BARANG ELEKTRONIK</b></a>
  <a class=" btn btn-outline-success ml-5" href="databarang.php">Tambah Barang</a>
  <a class=" btn btn-outline-success ml-3" href="profiltoko.php">profil toko</a>
  <a class=" btn btn-outline-success ml-3" href="dataakun.php">data akun anggota</a>




  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
	  <li class="nav-item">
        <a class=" btn btn-danger ml-auto" href="index.php"onclick="return confirm('yakin Ingin Keluar?')">Keluar</a>
      </li>
    </ul>
  </div>
</nav>

</body>
</html>