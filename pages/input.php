<?php 

$per_hal=20;
$jumlah_record=mysql_query("SELECT COUNT(*) from kontak");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>

<div class="widget-header"> <i class="icon-long-arrow-down"></i>
<h3>Input Pelanggan</h3>
	
	<div class="widget-content">
		
		<form action="proses/proses-input.php" method="post">		
			
			<div class="login-fields">

				<div class="field"><center>	
					<input type="text" id="nama" name="nama"   placeholder="Nama" class="login" />
					</center>
				</div> <!-- /field -->

				<div class="field"><center>	
					<input type="text" id="nohp" name="nohp"   placeholder="No Hand Phone" class="login" />
					</center>
				</div> <!-- /field -->

				<div class="field"><center>
					<select name="kategori">
            		<?php 
            		$a = mysql_query("SELECT * FROM kategori");
                 	while ($b = mysql_fetch_array($a)) {
            		 ?>
            		<option value="<?php echo $b['id']; ?>"><?php echo $b['kategori']; ?></option>
            		<?php } ?>
          			</select>
					</center>
				</div> <!-- /field -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
					<center>			
				<button class="button btn btn-primary btn-large" value="submit" type="submit" name="submit" id="submit">Selesai</button>
				</center>
			</div> <!-- .actions -->
			
		</form>

	</div>

	<div class="widget-content">
		<!--Isi kontak yang terlah di inputkan-->
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th width=5%><center> No </center></th>
                <th width=15%> Nama </th>
                <th width=15%> No Handphone</th>
                <th width=15%> Kategori </th>
                <th class="td-actions" width=15%><center> Ubah | Hapus </center></th>
              </tr>
            </thead>

            <tbody>
              <?php
              $no = $start + 1;
              $a = mysql_query("SELECT * FROM kontak ORDER BY id ASC limit $start, $per_hal");
              while ($b = mysql_fetch_array($a)) {
              ?>
              <tr>
                <td><center> <?php echo $no;?> </center></td>
                <td> <?php echo $b['nama']; ?></td>
                <td> <?php echo $b['nohp']; ?></td>
                <td> 
                  <?php 
                    $ik=$b['kategori'];
                    $c = mysql_query("SELECT * FROM kategori WHERE id = '$ik'");
                    $d = mysql_fetch_array($c);
                    echo $d['kategori'];
                 ?>
               	</td>
               	<td class="td-actions"><center>
                      <a href="main.php?hal=ubah&id=<?php echo $b['id']; ?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-ok"> </i></a>  
                      <a onclick="return confirm('Yakin ingin menghapus konak ini?')" href="proses/hapus.php?id=<?php echo $b['id']; ?>" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></center>
                </td>
              </tr>
              <?php
              $no++;
              } 
              ?>
            </tbody>

          </table>
      
        <ul class="pagination">
                <?php 
                  for($page=1;$page<=$halaman;$page++){
                ?>
                <li><a href="?hal=input&page=<?php echo $page ?>"><?php echo $page ?></a></li>
                <?php } ?>
          </ul>
	
	</div> <!-- /content -->
</dev>