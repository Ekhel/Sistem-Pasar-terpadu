<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
  <div class="card">
    <h5 class="card-header"><i class="fa fa-plus-circle"></i> Tambah Data Pedagang</h5>
    <div class="card-body">
      <form method="post" action="<?php echo base_url()?>Pedagang/tambah_pedagang_proses">
        <div class="form-group row">
          <label class="col-3 col-lg-2 col-form-label text-right"> Nama</label>
          <div class="col-9 col-lg-10">
            <input type="text" name="nama_pedagang" required="true" placeholder="Nama" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-3 col-lg-2 col-form-label text-right"> Posisi</label>
          <div class="col-9 col-lg-10">
            <input type="text" name="block" required="true" placeholder="Posisi Loss" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-3 col-lg-2 col-form-label text-right"> No Kios</label>
          <div class="col-9 col-lg-10">
            <input type="text" name="no_kios" required="true" placeholder="Nomor Loss" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-3 col-lg-2 col-form-label text-right"> Status Bangunan</label>
          <div class="col-9 col-lg-10">
            <input type="text" name="status_bangunan" required="true" placeholder="Status Bangunan" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-3 col-lg-2 col-form-label text-right"> Loss</label>
          <div class="col-9 col-lg-10">
            <input type="text" name="loss" required="true" placeholder="Los" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-3 col-lg-2 col-form-label text-right"> Jenis Dagangan</label>
          <div class="col-9 col-lg-10">
            <input type="text" name="jenis_dagangan" required="true" placeholder="Jenis Barang yang dijual" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-3 col-lg-2 col-form-label text-right"> No Kontak</label>
          <div class="col-9 col-lg-10">
            <input type="text" name="no_kontak" required="true" placeholder="Info No Kontak" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-3 col-lg-2 col-form-label text-right"> Keterangan</label>
          <div class="col-9 col-lg-10">
            <textarea name="keterangan" rows="8" class="form-control" cols="80"></textarea>
            <hr/>
            <input type="submit" class="btn btn-outline-primary" value="Simpan">
            <a href="<?php echo base_url()?>Pedagang" class="btn btn-outline-danger">Batal</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
