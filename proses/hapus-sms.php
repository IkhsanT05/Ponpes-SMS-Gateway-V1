<?php
include 'config.php';
$ikhsan="DELETE from inbox WHERE ID='$_GET[ID]'";
mysql_query($ikhsan);
echo '<script>window.location.assign("../main.php?hal=pesan-masuk")</script>';
?>