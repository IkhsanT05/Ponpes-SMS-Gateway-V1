<?php 
include 'config.php';
$simpan = "INSERT INTO kontak SET nama = '$_POST[nama]',
									nohp = '$_POST[nohp]',
									kategori = '$_POST[kategori]'";
if (mysql_query($simpan)) {
	echo "<script>window.location.assign('../main.php?hal=input')</script>";
} else {
	echo "sangsot";
}

 ?>