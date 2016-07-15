<?php
error_reporting (0);
$id=2;
$query=mysql_query("SELECT * FROM pelanggan WHERE id_user='$id'");
$c=mysql_fetch_array($query);
?>

<div class="widget-header"> <i class="icon-bolt"></i>
<h3>Ubah Password</h3>
	
	<div class="content clearfix">
		
		<form action="proses/proses-edit-password.php" method="post">		
			<input type="hidden" name="id_user" value="<?php echo $id; ?>">
			<div class="login-fields">

				<div class="field"><center>
					<input type="text" id="user" name="user" value="<?php echo $c['user']; ?>"  placeholder="Admin" class="login" disabled/>
					</center>
				</div> <!-- /field -->

				
				<div class="field"><center>	
					<input type="text" id="pass" name="pass" value="<?php echo $c['pass']; ?>"  placeholder="pass" class="login" />
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