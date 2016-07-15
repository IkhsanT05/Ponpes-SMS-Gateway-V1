<?php 
include 'config.php';
$simpan = "UPDATE kontak SET id = '$_POST[id]',
							nama = '$_POST[nama]',
							nohp = '$_POST[nohp]',
							kategori = '$_POST[kategori]'
							WHERE id='$_POST[id]'";
if (mysql_query($simpan)) {
	echo "<script>window.location.assign('../main.php?hal=input')</script>";
} else {
	echo "sangsot";
}

?>