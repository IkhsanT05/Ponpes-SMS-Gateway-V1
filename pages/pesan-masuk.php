<?php 

$per_hal=10;
$jumlah_record=mysql_query("SELECT COUNT(*) from inbox");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;

?>

<div class="widget-header"> <i class="icon-dashboard"></i>
  <h3>Pesan Masuk</h3>                   
</div>
<!-- /widget-header -->
<div class="widget-content">
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th width=5%> <center> No </center> </th>
        <th width=15%><center> Tanggal Dan Waktu </center></th>
        <th width=15%><center> No Handphone </center></th>
        <th width=20%><center> Isi Pesan </center></th>
        <th width=10%><center> Hapus </center></th>
      </tr>
    </thead>

    <tbody>
      <?php
      $no = $start + 1;
      $a = mysql_query("SELECT * FROM inbox ORDER BY ReceivingDateTime DESC limit $start, $per_hal");
      while ($b = mysql_fetch_array($a)) {
      ?>
      <tr>
        <td><center> <?php echo $no;?> </center></td>
        <td> <?php echo $b['ReceivingDateTime']; ?></td>
        <td> <?php echo $b['SenderNumber']; ?></td>
        <td> <?php echo $b['TextDecoded']; ?></td>
        <td class="td-actions">
          <center>
            <a onclick="return confirm('Yakin ingin menghapus pesan ini?')" href="proses/hapus-sms.php?ID=<?php echo $b['ID']; ?>" class="btn btn-danger btn-small">
              <i class="btn-icon-only icon-remove"> </i>
            </a>
          </center>
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
            for($x=1;$x<=$halaman;$x++){
          ?>
          <li><a href="?hal=pesan-masuk&page=<?php echo $x ?>"><?php echo $x ?></a></li>
          <?php } ?>
  </ul>
</div>
