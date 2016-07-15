<div class="widget-header"> <i class="icon-envelope"></i>
  <h3>Kirim Pesan</h3>               
</div>

<!-- /widget-header -->
  <div class="widget-content">
    <form action="proses/kirim.php" method="POST">
      <div class="shortcuts">
          <label><h2>Tulis Pesan</h2></label>
          <textarea class="form-control" name="isipesan" rows="7"></textarea>
      </div>
      <div class="shortcuts">
          <label><h2>Kirim Ke</h2></label>
          <select name="kategori">
            <?php 
            $a = mysql_query("SELECT * FROM kategori");
              while ($b = mysql_fetch_array($a)) {
             ?>
            <option value="<?php echo $b['id']; ?>"><?php echo $b['kategori']; ?></option>
            <?php } ?>
          </select>
        <div class="shortcuts">
              <button onclick="return confirm('Yakin ingin mengirim pesan ini?')" type="submit" name="submit" value="submit" class="btn btn-primary">Kirim</button>
        </div> 
    </form>       
  </div>
</div>


