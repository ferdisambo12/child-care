<div class="card card-info">
              <div class="card-header">
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_pembayaran')?>" method="post">
        <input type="hidden" name="id" value="<?= $ferdi->id_pembayaran?>">

        <div class="item form-group">
          <label class="control-label col-12">Nama Anak <span class="required"></span>
          </label>
          <div class="col-12">
            <select id="id_anak" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="id_anak" required="required">
              <?php foreach ($apa as $gas){ ?>
                <option value="<?= $gas->id_anak; ?>"><?= $gas->id_anak; ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Bulan<span class="required"></span>
          </label>
          <div class="col-12">
            <select id="bulan" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="bulan" required="required">
              <option value="<?= $ferdi->bulan?>"><?= $ferdi->bulan; ?></option>
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
        <div class="item form-group">
          <label class="control-label col-12" >Harga<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="harga" class="form-control col-12 "name="harga" required="required" placeholder="Harga" value="<?= $ferdi->harga?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Tanggal <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="datetime-local" id="tanggal_bayar" name="tanggal_bayar" placeholder="Tanggal " required="required" class="form-control col-12 " value="<?= $ferdi->tanggal_bayar?>">
          </div>
        </div>
        <h1></h1>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/pembayaran" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
            </div>