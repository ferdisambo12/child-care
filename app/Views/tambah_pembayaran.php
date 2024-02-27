<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Tambah Nasabah</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_pembayaran')?>" method="post">
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
          <label class="control-label col-12" >Bulan<span class="required"></span>
          </label>
          <div class="col-12">
            <select id="bulan" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="bulan" required="required">
              <option>Pilih Bulan</option>
              <option value="Januari">Januari</option>
              <option value="Februari">Februari</option>
              <option value="Maret">Maret</option>
              <option value="April">April</option>
              <option value="Mei">Mei</option>
              <option value="Juni">Juni</option>
              <option value="Juli">Juli</option>
              <option value="Agustus">Agustus</option>
              <option value="September">September</option>
              <option value="Oktober">Oktober</option>
              <option value="November">November</option>
              <option value="Desember">Desember</option>
            </select>
          </div>
        </div>
        <h1></h1>
        <div class="item form-group">
          <label class="control-label col-12" >Harga<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="harga" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="harga" required="required" placeholder="Harga">
          </div>
        </div>
        <h1></h1>
        <div class="item form-group">
          <label class="control-label col-12" >Tanggal <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="datetime-local" id="tanggal_bayar" name="tanggal_bayar" placeholder="Tanggal " required="required" class="form-control col-12">
          </div>
        </div>
        <h1></h1>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/pembayaran" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
            </div>