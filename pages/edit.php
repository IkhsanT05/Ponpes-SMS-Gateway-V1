<?php
$id=$_GET['id'];
$query=mysql_query("SELECT * FROM kontak WHERE id='$id'");
$c=mysql_fetch_array($query);
?>

<div class="widget-header"> <i class="icon-long-arrow-down"></i>
<h3>Ubah Kontak</h3>
	
	<div class="content clearfix">
		
		<form action="proses/proses-edit.php" method="post">		
			<input type="hidden" name="id" value="<?php echo $c['id']; ?>">
			<div class="login-fields">
				
				<div class="field"><center>	
					<input type="text" id="nama" name="nama" value="<?php echo $c['nama']; ?>"  placeholder="Nama" class="login" />
					</center>
				</div> <!-- /field -->

				<div class="field"><center>	
					<input type="text" id="nohp" name="nohp" value="<?php echo $c['nohp']; ?>"  placeholder="No Hand Phone" class="login" />
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
		
	</div> <!-- /content -->

</body>
</html>