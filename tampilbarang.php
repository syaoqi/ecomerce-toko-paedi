<!DOCTYPE html>
<html>
<head>
    <title>Data Barang</title>
    <link rel="stylesheet" type="text/css" href="css/styletampil.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
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
        <a class=" btn btn-warning " href="home2.php">Kembali</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
<div class="table-responsive">
	<h4>DAFTAR BARANG TERSEDIA</h4>
	<table class="table table-bordered table-striped table-hover">

		<thead>
	
			<tr>
				<th>No</th>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Jenis Barang </th>
				<th>Harga Barang</th>
				<th>Stok Barang</th>
				
			</tr>
		</thead>
		<?php
		include
			include "koneksi.php";
			$tampil = "SELECT * FROM databarang ";
			$str = mysqli_query($koneksi, $tampil);
			$no = 1;
			foreach ($str as $santri){
			?>
			<tr>
			<td><?php echo $no ?></td>
				<td><?php echo $santri['kode']; ?></td>
				<td><?php echo $santri['nama']; ?></td>
				<td><?php echo $santri['jenis']; ?></td>
				<td><?php echo $santri['harga']; ?></td>
				<td><?php echo $santri['stok']; ?></td>
				
			</tr>
	<?php
			$no++;
			
		}
		?>

	</table>
	</div>
</div>
</body>
</html>