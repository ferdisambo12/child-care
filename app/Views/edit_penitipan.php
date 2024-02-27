<div class="card card-info">
  <div class="card-header">
    <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_penitipan')?>" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $ferdi->id_penitipan?>">
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
      <h1></h1>
      <div class="item form-group">
        <label class="control-label col-12" >Ruang<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="ruang" class="form-control col-12 "name="ruang" required="required" placeholder="Ruang" value="<?= $ferdi->ruang?>">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-12" >Tanggal<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="datetime-local" id="tanggal" name="tanggal" placeholder="Tanggal" required="required" class="form-control col-12 " value="<?= $ferdi->tanggal?>">
        </div>
      </div>
      <h1></h1>
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
          <a href="/home/penitipan" type="submit" class="btn btn-primary">Cancel</a></button>
          <button id="send" type="submit" class="btn btn-success">Update</button>
        </div>
      </div>
    </form>
  </div>