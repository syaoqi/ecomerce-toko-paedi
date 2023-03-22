<?php
  $koneksi = mysqli_connect("localhost","root","","ecom");
  if (!$koneksi) {
  	echo " koneksi gagal : ".mysqli_connect_error;

  }
  