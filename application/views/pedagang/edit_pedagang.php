<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="page-header">
      <h2 class="pageheader-title">Pedagang </h2>
      <div class="page-breadcrumb">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Edit</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit / Update Data Pedagang Pasar</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
      <h5 class="card-header"><i class="fa fa-plus-circle"></i> Edit Data Pedagang</h5>
      <div class="card-body">
        <form method="post" action="<?php echo current_url(); ?>">
          <div class="form-group">
          <?php if($this->session->flashdata('message')) : ?>
              <div class="col-sm-8 col-md-offset-2">
                  <div class="form-group">
                      <div class="alert alert-success">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <?php echo $this->session->flashdata('message'); ?>
                      </div>
                  </div>
              </div>
          <?php endif; ?>
      </div>
          <div class="form-group row">
            <label class="col-3 col-lg-2 col-form-label text-right"> Nama</label>
            <div class="col-9 col-lg-10">
              <input type="text" name="nama_pedagang" required="true" value="<?php echo $pedagang->nama_pedagang ?>" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-lg-2 col-form-label text-right"> Posisi</label>
            <div class="col-9 col-lg-10">
              <input type="text" name="block" required="true" value="<?php echo $pedagang->block ?>" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-lg-2 col-form-label text-right"> No Kios</label>
            <div class="col-9 col-lg-10">
              <input type="text" name="no_kios" required="true" value="<?php echo $pedagang->no_kios ?>" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-lg-2 col-form-label text-right"> Status Bangunan</label>
            <div class="col-9 col-lg-10">
              <input type="text" name="status_bangunan" required="true" value="<?php echo $pedagang->status_bangunan ?>" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-lg-2 col-form-label text-right"> Loss</label>
            <div class="col-9 col-lg-10">
              <input type="text" name="loss" required="true" value="<?php echo $pedagang->loss ?>" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-lg-2 col-form-label text-right"> Jenis Dagangan</label>
            <div class="col-9 col-lg-10">
              <input type="text" name="jenis_dagangan" required="true" value="<?php echo $pedagang->jenis_dagangan ?>" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-lg-2 col-form-label text-right"> No Kontak</label>
            <div class="col-9 col-lg-10">
              <input type="text" name="no_kontak" required="true" value="<?php echo $pedagang->no_kontak ?>" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-lg-2 col-form-label text-right"> Keterangan</label>
            <div class="col-9 col-lg-10">
              <textarea name="keterangan" rows="5" class="form-control" cols="60"><?php echo $pedagang->keterangan ?></textarea>
              <hr/>
              <input type="submit" class="btn btn-outline-primary" value="Simpan">
              <a href="<?php echo base_url()?>Pedagang" class="btn btn-outline-danger">Batal</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
