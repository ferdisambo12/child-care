<div class="col-12">
  <div class="scroll-out">
    <div class="scroll-by-count" data-count="6">
      <div class="card mb-2" data-title="Product Card" data-intro="Here is a product card with buttons!" data-step="2">
        <?php
        $no=1;
        foreach ($ferdi as $gas){
          ?>
          <div class="row g-0 sh-12">
            <div class="col-auto">
                <img src="<?= base_url('assets/img/menu/' . $gas->foto_menu)?>" alt="user" class="card-img card-img-horizontal sw-13 sw-lg-15" />
            </div>
            <div class="col">
              <div class="card-body pt-0 pb-0 h-100">
                <div class="row g-0 h-100 align-content-center">
                  <div class="col-12 col-md-7 d-flex flex-column mb-2 mb-md-0 position-static">
                    <h4><?php echo $gas->nama_menu?> (Rp. <?php echo $gas->harga_menu?>)</h4>
                    <div class="text-muted text-truncate"><?php echo $gas->deskripsi_menu?></div>
                  </div>
                  <div class="col-12 col-md-5 d-flex align-items-center justify-content-md-end">
                    <a href="<?= base_url('/home/edit_menu/'.$gas->id_menu)?>"><button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                      <i data-cs-icon="edit-square" data-cs-size="15"></i>
                      <span class="d-none d-xxl-inline-block">Edit</span>
                    </button></a>
                    <button class="btn btn-sm btn-icon btn-icon-start btn-outline-primary ms-1" type="button">
                      <i data-cs-icon="bin" data-cs-size="15"></i>
                      <span class="d-none d-xxl-inline-block">Delete</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
    </div>
  </div>
</div>