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
        <a class=" btn btn-warning " href="home.php">Kembali</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
<div class="table-responsive">
<a class="button btn btn-primary" href="tambahbarang.php">Tambah Barang</a>
	<h4>DATA BARANG TERSEDIA</h4>
	<table class="table table-bordered table-striped table-hover">

		<thead>
	
			<tr>
				<th>No</th>
				<th>ID Barang</th>
				<th>Nama Barang</th>
				<th>Jenis Barang </th>
				<th>Harga Barang</th>
				<th>Stok Barang</th>
				<th>Tools</th>
			</tr>
		</thead>
		<?php
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
				<td>
					<a href="ubah.php?kode=<?php echo $santri['kode'];?>" type="button" class="btn btn-warning btn-sm">EDIT</a>
					<a href="hapus.php?kode=<?php echo $santri['kode'];?>" type="button" class="btn btn-danger btn-sm" onclick="return confirm('yakin mau di hapus?')">HAPUS</a>
				</td>
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