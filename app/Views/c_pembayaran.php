<div align="center">
<div>
  <br>
  <br>
</div>

 <table id="datatable-buttons" align="center" border="1" align="center" width="100%" class="table table-striped table-bordered">
  <thead>
    <tr>
    <th>No</th>
    <th>Nama Anak</th>
    <th>Bulan</th>
    <th>Harga</th> 
    <th>Tanggal</th>
    </tr>
  </thead>

  <tbody>
    <?php
    $no=1;
    foreach ($ferdi as $gas){
      ?>
      
      <th><?php echo $no++ ?></th>  
      <th><?php echo $gas->id_anak?></th>
      <th><?php echo $gas->bulan?></th>
      <th><?php echo $gas->harga?></th>
      <th><?php echo $gas->tanggal_bayar?></th>

    <?php }?>
  </tbody>
</table>
</div>
