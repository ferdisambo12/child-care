<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Edit Departement</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_pengguna')?>" method="post">
        <input type="hidden" name="id" value="<?= $duar->id_user?>">
        <h1></h1> 
        <div class="item form-group">
          <label class="control-label col-12" >Nama <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama" name="nama" placeholder="Nama " required="required" class="form-control col-12 " value="<?= $duar->nama?>">
          </div>
        </div>
        <h1></h1>
        <div class="item form-group">
          <label class="control-label col-12" >NIK<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nik" class="form-control col-12 "name="nik" required="required" placeholder="NIK" value="<?= $duar->nik?>">
          </div>
        </div>
        <h1></h1>
        <div class="item form-group">
          <label class="control-label col-12" >Tempat Tanggal Lahir <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="ttl" name="ttl" placeholder="Tempat Tanggal Lahir " required="required" class="form-control col-12 " value="<?= $duar->ttl?>">
          </div>
        </div>
        <h1></h1>
        <div class="item form-group">
          <label class="control-label col-12" >Jenis Kelamin <span class="required"></span>
          </label>
          <div class="col-12">
            <select id="jk" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="jk" required="required">
              <option value="<?= $duar->jk?>"><?= $duar->jk; ?></option>
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Alamat <span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="alamat" name="alamat" placeholder="Alamat " required="required" class="form-control col-12 " value="<?= $duar->alamat?>">
          </div>
        </div>
        <h1></h1>
        <div class="item form-group">
          <label class="control-label col-12" >Username<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="username" name="username" placeholder="Username" required="required" class="form-control col-12" value="<?= $duar->username?>">
          </div>
        </div>
        <h1></h1>
       <div class="item form-group">
          <label class="control-label col-12" >Level <span class="required"></span>
          </label>
          <div class="col-12">
            <select id="level" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="level" required="required">
              <option value="<?= $duar->level?>"><?= $duar->level; ?></option>
              <option value="1">Admin</option>
              <option value="2">Kasir</option>
              <option value="3">Customer</option>
            </select>
          </div>
        </div>
        <h1></h1>
          <div class="col-12">
        <h1></h1>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/Pengguna" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
            </div>