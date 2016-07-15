<?php 
  session_start();
  if(empty($_SESSION['username'])){
  header("location:login.php");
}
  else {
  	header("location:main.php?hal=pesan-masuk");
  } 
 ?>