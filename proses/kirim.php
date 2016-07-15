<?php
include "config.php";
$isipesan = $_POST['isipesan'];
$kategori = $_POST['kategori'];


$kontak = mysql_query("SELECT * FROM kontak WHERE kategori ='$kategori'");
	while ($data = mysql_fetch_array($kontak)) {
			$nohp = $data['nohp'];
			$kirim = "INSERT INTO outbox (DestinationNumber, TextDecoded) values('$nohp', '$isipesan')";
			if (mysql_query($kirim)) {
					header("location:../main.php?hal=hasil");
			} 
			else {
					echo "sangsot";
			}
	}
?>