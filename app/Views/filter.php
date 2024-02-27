<div class="col-12">
  <div class="row">
  <div class="x_panel">
    <div class="x_title">
      <h2>
        <?php if ($kunci=='view_pembayaran') {
        }else{
        }
        ?>
      </h2>
      <!--  -->
      <div class="clearfix"></div>
    </div>
    <div class="card-body">
    <div class="x_content">
      <form class="form-horizontal form-label-left" novalidate

      action="
      <?php if ($kunci=='view_pembayaran') {
        echo base_url('home/cari_pembayaran');
        }else{
          echo base_url('');
        }
        ?>" method="post">

        <div class="item form-group">
          <label class="control-label col-12">Tanggal awal 
          </label>
          <div class="col-12">
            <input id="name" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="awal" placeholder="" required="required" type="date">
          </div>
        </div>
        <h1></h1>
        <div class="item form-group">
          <label class="control-label col-12">Tanggal akhir
          </label>
          <div class="col-12">
            <input type="date" id="kode" name="akhir" required="required" placeholder="" class="form-control col-12">
          </div>
        </div>
        <h1></h1>
        <div class="form-group">
          <div class="col-12">
            <button id="send" type="submit" class="btn btn-warning"><i class="fa fa-print"></i> Print</button>
            <h1></h1>
          </div>
        </div>
      </form>

      <div class="ln_solid"></div>

      <form class="form-horizontal form-label-left" novalidate

      action="
      <?php if ($kunci=='view_pembayaran') {
        echo base_url('home/pdf_pembayaran');
        }else{
        echo base_url('');
          }
        ?>" method="post" target="_blank">

        <div class="item form-group">
          <label class="control-label col-12">Tanggal awal 
          </label>
          <div class="col-12">
            <input id="name" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="awal" placeholder="" required="required" type="date">
          </div>
        </div>
                    <h1></h1>

        <div class="item form-group">
          <label class="control-label col-12">Tanggal akhir
          </label>
          <div class="col-12">
            <input type="date" id="kode" name="akhir" required="required" placeholder="" class="form-control col-12">
          </div>
        </div>
                    <h1></h1>

        <div class="form-group">
          <div class="col-12">
            <button type="submit" class="btn btn-danger"><i class="fa fa-print"></i> PDF</button>
                        <h1></h1>

          </div>
        </div>
      </form>

      <div class="ln_solid"></div>

      <form class="form-horizontal form-label-left" novalidate

      action="
      <?php if ($kunci=='view_pembayaran') {
        echo base_url('home/excel_pembayaran');
          }else{
            echo base_url('');
          }
        ?>" method="post">

        <div class="item form-group">
          <label class="control-label col-12">Tanggal awal 
          </label>
          <div class="col-12">
            <input id="name" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="awal" placeholder="" required="required" type="date">
          </div>
        </div>
                    <h1></h1>

        <div class="item form-group">
          <label class="control-label col-12">Tanggal akhir
          </label>
          <div class="col-12">
            <input type="date" id="kode" name="akhir" required="required" placeholder="" class="form-control col-12">
          </div>
        </div>
                    <h1></h1>

        <div class="form-group">
          <div class="col-12">
            <button type="submit" class="btn btn-success"><i class="fa fa-print"></i> Excel</button>
                        <h1></h1>

          </div>
        </div>
      </form>
      <div class="ln_solid"></div>
      <form class="form-horizontal form-label-left" novalidate
      action="
      <?php if ($kunci=='view_pembayaran') {
        echo base_url('home/pembayaran');
        }else{
          echo base_url('');
        }
        ?>" method="post">
      </div>
    </div>
  </div>
  </div>