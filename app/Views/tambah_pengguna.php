<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Tambah Nasabah</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_pengguna')?>" method="post">
                <h1></h1>
         <div class="item form-group">
          <label class="control-label col-md-12 col-sm-12 col-xs-12">Nama<span class="required"></span>
          </label>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <input type="text" id="nama" name="nama" placeholder="Nama" required="required" class="form-control col-md-12 col-xs-12">
          </div>
        </div>   
        <h1></h1>
        <div class="item form-group">
          <label class="control-label col-md-12 col-sm-12 col-xs-12">NIK<span class="required"></span>
          </label>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <input type="text" id="nik" name="nik" placeholder="NIK" required="required" class="form-control col-md-12 col-xs-12">
          </div>
        </div>
        <h1></h1>
        <div class="item form-group">
          <label class="control-label col-md-12 col-sm-12 col-xs-12">Tempat Tanggal Lahir<span class="required"></span>
          </label>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <input type="text" id="ttl" name="ttl" placeholder="Tempat Tanggal Lahir" required="required" class="form-control col-md-12 col-xs-12 ">
          </div>
        </div>
        
        <h1></h1>
        <div class="item form-group">
          <label class="control-label col-12" >Jenis Kelamin <span class="required"></span>
          </label>
          <div class="col-12">
            <select id="jk" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="jk" required="required">
              <option>Jenis Kelamin</option>
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
        </div>
        <h1></h1>
        <div class="item form-group">
          <label class="control-label col-md-12 col-sm-12 col-xs-12">Alamat<span class="required"></span>
          </label>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <input type="text" id="alamat" name="alamat" placeholder="Alamat" required="required" class="form-control col-md-12 col-xs-12">
          </div>
        </div>
       <h1></h1>

        <div class="item form-group">
          <label class="control-label col-12" >Username<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="username" name="username" placeholder="Username" required="required" class="form-control col-12 text-capitalize">
          </div>
        </div>
        <h1></h1>
        <div class="item form-group">
          <label class="control-label col-12" >Password<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="password" name="password" placeholder="Password" required="required" class="form-control col-12">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Level <span class="required"></span>
          </label>
          <div class="col-12">
            <select id="level" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="level" required="required">
              <option>Pilih Level</option>
              <option value="1">Admin</option>
              <option value="2">Kasir</option>
              <option value="3">Customer</option>
            </select>
          </div>
        </div>
        <h1></h1>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/pengguna" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
            </div>