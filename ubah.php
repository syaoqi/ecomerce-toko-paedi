<!DOCTYPE html>
<html>
<head>
	<title>Ubah Barang</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/ubah.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand btn bg-info" href="" ><b>TOKO PAEDI</b></a>
	<a class="navbar-brand"href=""><b>MENJUAL BERBAGAI MACAM BARANG ELEKTRONIK</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
	<li class="nav-item">
        <a class=" btn btn-warning " href="databarang.php">Kembali</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
    <div class="jumbotron">
    <h4> <b>UBAH BARANG</b></h4>
      <div class="col-sm-6">
        <?php
        include "koneksi.php";
        //menampilkan data tertentu dari sql dalam bentuk objek
        $sql = $koneksi->query("SELECT * FROM databarang WHERE kode=".$_GET['kode']);
        //konversi data yang terdapat di dalam variabel $sql menjadi bentuk array
        $s = mysqli_fetch_array($sql);
        // var_dump($s)
        ?>
        <form action="ubahp.php" method="POST">
          <div class="row">
            <div class="col-sm-6">
              <label>Kode Barang</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="kode" class="form-control" maxlength="9" value="<?php echo $s['kode']?>" readonly>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <label>Nama Barang</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="nama" class="form-control" value="<?php echo $s['nama']?>">
            </div>
          </div>
           <div class="row">
            <div class="col-sm-6">
              <label>Jenis Barang</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="jenis" class="form-control"value="<?php echo $s['jenis']?>">
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label>Harga Barang</label>
            </div>
            <div class="col-sm-6">
            <input type="text" name="harga" class="form-control"value="<?php echo $s['harga']?>">
            </div>
          </div>
           
           
          <div class="row">
            <div class="col-sm-6">
              <label>Stok Barang</label>
            </div>
            <div class="col-sm-6">
            <input type="text" name="stok" class="form-control"value="<?php echo $s['stok']?>">
            </div>
        </div>
        <div class="row" >
            <div class="col-sm-4">
      <button  type="submit"class="btn btn-warning btn-block">Ubah</button>
             </div>
          </div>
    </form>
      </div>
</div>
</body>
</html>