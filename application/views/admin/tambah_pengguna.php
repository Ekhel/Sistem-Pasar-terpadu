<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
  <div class="card">
    <h5 class="card-header"><i class="fa fa-plus-circle"></i> Tambah Pengguna</h5>
    <div class="card-body">
      <form method="post" action="<?php echo base_url()?>Admin/tambah_pengguna_proses">
        <div class="form-group row">
          <label class="col-3 col-lg-2 col-form-label text-right"> Username</label>
          <div class="col-9 col-lg-10">
            <input type="text" name="nama" required="true" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-3 col-lg-2 col-form-label text-right"> Sandi</label>
          <div class="col-9 col-lg-10">
            <input type="password" name="sandi" required="true" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-3 col-lg-2 col-form-label text-right"> Level</label>
          <div class="col-9 col-lg-10">
            <select name="level" class="form-control">
              <option value="">-- Pilih --</option>
                <?php
                foreach($level->result() as $lev => $val)
                {?>
                <option value="<?php echo $val->id_level;?>"><?php echo $val->level; ?></option>
                <?php
                }?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-3 col-lg-2 col-form-label text-right"> Email</label>
          <div class="col-9 col-lg-10">
            <input type="email" name="email" required="true" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-3 col-lg-2 col-form-label text-right"> Nama</label>
          <div class="col-9 col-lg-10">
            <input type="text" name="nama_lengkap" required="true" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-3 col-lg-2 col-form-label text-right"> Status</label>
          <div class="col-9 col-lg-10">
            <select name="status" class="form-control">
              <option value="">--- Pilih ---</option>
              <option value="aktif">Aktif</option>
              <option value="blok">Blok</option>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-3 col-lg-2 col-form-label text-right"> Kontak</label>
          <div class="col-9 col-lg-10">
            <input type="text" name="kontak" required="true" class="form-control">
            <hr/>
            <input type="submit" class="btn btn-outline-primary" value="Simpan">
            <a href="<?php echo base_url()?>Pedagang" class="btn btn-outline-danger">Batal</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
