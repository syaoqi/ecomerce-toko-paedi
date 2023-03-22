<?php

include "koneksi.php";

$sql = $koneksi->query("DELETE FROM anggotalogin WHERE id=".$_GET['id']);
?>

<script>
	document.location = 'dataakun.php'
</script>
