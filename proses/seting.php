<?php
        if($_GET) 
          {
            switch($_GET['hal']) 
              {
                case 'dashboard' :
                  if(!file_exists("pages/dashboard.php")) 
                    die ("Halaman tidak tersedia");
              ?>
               
                <?php include "pages/dashboard.php" ?>
                
              <?php 
                break;
                case 'input':
                  if(!file_exists("pages/input.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/input.php" ?>

              <?php 
                break;
                case 'pesan':
                  if(!file_exists("pages/pesan.php")) 
                    die ("<center><h1>Pesan Telah Terkirim</h1></center>");
              ?>
                <?php include "pages/pesan.php" ?>

              <?php 
                break;
                case 'ubah':
                  if(!file_exists("pages/edit.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/edit.php" ?>

              <?php 
                break;
                case 'hasil':
                  if(!file_exists("pages/hasil.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/hasil.php" ?>

              <?php 
                break;
                case 'pesan-masuk':
                  if(!file_exists("pages/pesan-masuk.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/pesan-masuk.php" ?>

                <?php 
                break;
                case 'edit':
                  if(!file_exists("pages/edit-pass.php")) 
                    die ("Halaman tidak tersedia");
              ?>
                <?php include "pages/edit-pass.php" ?>

              <?php 
                break;
              }
          }
?>