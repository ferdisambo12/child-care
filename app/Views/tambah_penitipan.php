<div class="card card-info">
  <div class="card-header">
    <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_penitipan')?>" method="post" enctype="multipart/form-data">
      <h1></h1>
        <div class="item form-group">
          <label class="control-label col-12">Nama Anak<span class="required"></span>
          </label>
          <div class="col-12">
            <select  name="id_anak" class="form-control text-capitalize" id="id_anak" required>
              <option>Pilih Nama</option>

              <?php 
              foreach ($apa as $barang_nama) {
              ?>
              
              <option value="<?php echo $barang_nama->id_anak?>"><?php echo $barang_nama->nama ?></option>
              <?php } ?>
            </select>
          </div>
        </div> 
      <h1></h1>
      <div class="item form-group">
        <label class="control-label col-12" >Ruang<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="ruang" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="ruang" required="required" placeholder="Ruang">
        </div>
      </div>
      <h1></h1>
      <div class="item form-group">
        <label class="control-label col-12" >Tanggal<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="datetime-local" id="tanggal" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="tanggal" required="required" placeholder="Tanggal">
        </div>
      </div>
      <h1></h1>
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
          <a href="/home/penitipan" type="submit" class="btn btn-primary">Cancel</a></button>
          <button id="send" type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </form>
  </div>