<div class="card card-info">
  <div class="card-header">
    <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_anak')?>" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $ferdi->id_anak?>">
      <div class="item form-group">
        <label class="control-label col-12" >Nama Anak<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="nama" class="form-control col-12 "name="nama" required="required" placeholder="Nama Anak" value="<?= $ferdi->nama?>">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-12" >Umur<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="umur" class="form-control col-12 "name="umur" required="required" placeholder="Umur" value="<?= $ferdi->umur?>">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-12" >Nama Ortu<span class="required"></span>
        </label>
        <div class="col-12">
          <input type="text" id="nama_ortu" name="nama_ortu" placeholder="Nama Ortu" required="required" class="form-control col-12 " value="<?= $ferdi->nama_ortu?>">
        </div>
      </div>
      <h1></h1>
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
          <a href="/home/anak" type="submit" class="btn btn-primary">Cancel</a></button>
          <button id="send" type="submit" class="btn btn-success">Update</button>
        </div>
      </div>
    </form>
  </div>