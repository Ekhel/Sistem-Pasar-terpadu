<link rel="stylesheet" href="<?php echo base_url()?>assets/libs/css/chossen.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.6/chosen.jquery.min.js"></script>

<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="page-header">
      <h2 class="pageheader-title">Pedagang</h2>
      <div class="page-breadcrumb">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Kwitansi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah / Input Kwitansi</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
      <h5 class="card-header"><i class="fa fa-plus-circle"></i> Tambah Kwitansi</h5>
      <div class="card-body">
        <form method="post" action="<?php echo base_url()?>Pedagang/tambah_kwitansi_proses">
          <div class="form-group row">
            <label class="col-3 col-lg-2 col-form-label text-right"> Nama Pedagang</label>
            <div class="col-9 col-lg-10">
              <select name="id_kios" data-placeholder="-- Pilih --" class="form-control form-control-chosen" tabindex="2">
                <option value="">-- Pilih --</option>
                  <?php
                  foreach($kios as $p => $val)
                  {?>
                  <option value="<?php echo $val->id_kios;?>"><?php echo $val->nama_pedagang; ?></option>
                  <?php
                  }?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-lg-2 col-form-label text-right"> Nama Petugas</label>
            <div class="col-9 col-lg-10">
              <input type="text" name="nama_petugas" readonly="true" value="<?php echo $this->session->userdata('nama') ?>" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-lg-2 col-form-label text-right"> jumlah</label>
            <div class="col-9 col-lg-10">
              <input type="text" name="jumlah" required="true" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-lg-2 col-form-label text-right"> Keterangan</label>
            <div class="col-9 col-lg-10">
              <input type="text" name="keterangan" required="true" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-lg-2 col-form-label text-right"> Tanggal</label>
            <div class="col-9 col-lg-10">
              <input type="date" name="tanggal" value="<?php echo date("Y-m-d") ?>" readonly="true" class="form-control">
              <hr/>
              <input type="submit" class="btn btn-outline-primary" value="Simpan">
              <a href="<?php echo base_url()?>Pedagang/kwitansi" class="btn btn-outline-danger">Batal</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    $('.form-control-chosen').chosen({
	  });
</script>
