<?php

include "koneksi.php";

$sql = $koneksi->query("DELETE FROM databarang WHERE kode=".$_GET['kode']);
?>

<script>
	document.location = 'databarang.php'
</script>
