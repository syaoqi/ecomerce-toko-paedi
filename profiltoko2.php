
<!DOCTYPE html>
<html>
<head>
	<title>SISKA UBG</title>
	<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/profil.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand " href="#"><b>TOKO PAEDI</b></a>
<a class="navbar-brand btn bg-info"href="home.php"><b>MENJUAL BERBAGAI MACAM BARANG ELEKTRONIK</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
	<li class="nav-item">
        <a class="btn btn-warning" href="home2.php">Kembali</a>
      </li>
    </ul>
  </div>
</nav>    
<div class="container">
  <div class="jumbotron">
    <h1 class="display-4">  Selamat Datang Di Toko Paedi</h1>
    <!-- <p class="lead"> Tetang <p> -->

<div class="row">
 <div class="col-sm-6">
  <!-- <div class="card"> -->
    <img src="css/a.jpg" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">TOKO PAEDI</h5>
      <p class="card-text"> Tentang</p>
      <button id="read">
        read more...
      </button>
      <button id="unread" hidden="">
          Unread
        </button>  
      <p id="open" hidden>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
</div>
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function (){
      $('#read').click(function (){
        $('#open').prop('hidden', false);
        $('#unread').prop('hidden', false);
        $('#read').prop('hidden', true);
      })
      $('#unread').click(function (){
        $('#open').prop('hidden', true);
        $('#read').prop('hidden', false);
        $('#unread').prop('hidden', true);
})
})
</script>
</body>
</html>