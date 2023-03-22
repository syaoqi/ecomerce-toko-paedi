<!DOCTYPE html>
  <html>
    <head>
    <title>Tambah Data Barang</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.css">
	    <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/styletambah.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
    <div class="jumbotron" >
    <h4> <b>TAMBAH BARANG</b></h4>
      <div  class="col-sm-6">
        <p><form action="tambahp.php" method="POST"></p>

          <div class="row">
            <div class="col-sm-6">
              <label>ID Barang</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="kode" class="form-control" maxlength="9">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <label>Nama Barang</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="nama" class="form-control">
            </div>
          </div>

           <div class="row">
            <div class="col-sm-6">
              <label>Jenis Barang</label>
            </div>
            <div class="col-sm-6">
              <input type="text" name="jenis" class="form-control">
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label>Harga Barang</label>
            </div>
            <div class="col-sm-6">
            <input type="text" name="harga" class="form-control">
            </div>
          </div>
           
           
          <div class="row">
            <div class="col-sm-6">
              <label>Stok Barang</label>
            </div>
            <div class="col-sm-6">
            <input type="text" name="stok" class="form-control">
            </div>
          </div>
    <div class="row" >
      <div class="col-sm-6">
     <button  type="submit" class="btn btn-primary btn-block">Tambahkan</button>
     <button  type="reset" class="btn btn-danger btn-block">reset</button>
          </div>
            </div>
        </div>
    </form>
      </div>

</div>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>