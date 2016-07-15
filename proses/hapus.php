<?php
include 'config.php';
mysql_query("DELETE from kontak WHERE id='$_GET[id]'");
echo '<script>window.location.assign("../main.php?hal=input")</script>';
?>