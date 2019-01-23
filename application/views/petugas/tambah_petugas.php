<div class="card">
  <h5 class="card-header"><i class="fa fa-plus-circle"></i></h5>
  <div class="card-body">
    <form action="<?php echo base_url('petugas/tambah_petugas')?>" method="post">
      <div class="form-group">
        <label class="col-form-label">Nama</label>
        <input name="nama_lengkap" type="text" class="form-control">
      </div>
      <div class="form-group">
        <label class="col-form-label">Pendidikan</label>
        <input name="pend" type="text" class="form-control">
      </div>
      <div class="form-group">
        <label class="col-form-label">Tahun</label>
        <input name="tahun" type="text" class="form-control">
      </div>
      <div class="form-group">
        <label class="col-form-label">Uraian Tugas</label>
        <select name="id_uraian" class="form-control">
          <option value="">-- Pilih --</option>
						<?php
						foreach($uraian as $sta => $val)
						{?>
						<option value="<?php echo $val->id_uraian;?>"><?php echo $val->uraian_tugas; ?></option>
						<?php
						}?>
        </select>
      </div>
      <div class="form-group">
        <label class="col-form-label">Tempat Tugas</label>
        <select class="form-control" name="id_tempat">
          <option value="">-- Pilih --</option>
						<?php
						foreach($tempat as $temp => $value)
						{?>
						<option value="<?php echo $value->id_tempat;?>"><?php echo $value->nama_tempat; ?></option>
						<?php
						}?>
        </select>
        <br/>
        <input type="submit" class="btn btn-outline-primary" value="Simpan">
      </div>
    </form>
  </div>
</div>
