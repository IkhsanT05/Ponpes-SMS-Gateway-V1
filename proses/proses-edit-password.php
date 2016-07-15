<?php 
include 'config.php';
$simpan = "UPDATE user SET pass = '$_POST[pass]'
									 WHERE id_user='$_POST[id_user]'
									 ";
if (mysql_query($simpan)) {
	echo "<script>window.location.assign('../main.php?hal=pesan-masuk')</script>";
} else {
	echo "sangsot";
}

?>