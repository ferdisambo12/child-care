<div class="card card-info">
  <div class="card-header">
    <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_anak')?>" method="post" enctype="multipart/form-data">
      <h1></h1>
      <div class="item form-group">
        <label class="control-label col-12" >Nama Anak<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="nama" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="nama" required="required" placeholder="Nama Anak">
        </div>
      </div>
      <h1></h1>
      <div class="item form-group">
        <label class="control-label col-12" >Umur<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="umur" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="umur" required="required" placeholder="Umur">
        </div>
      </div>
      <h1></h1>
      <div class="item form-group">
        <label class="control-label col-12" >Nama Ortu<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="nama_ortu" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="nama_ortu" required="required" placeholder="Nama Ortu">
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
          <a href="/home/anak" type="submit" class="btn btn-primary">Cancel</a></button>
          <button id="send" type="submit" class="btn btn-success">Submit</button>
        </div>
      </div>
    </form>
  </div>