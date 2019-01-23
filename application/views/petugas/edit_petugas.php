<div class="card">
  <h5 class="card-header"><i class="fa fa-edit"></i></h5>
  <div class="card-body">
    <form action="<?php echo base_url('petugas/edit_petugas')?>" method="post">
      <div class="form-group">
        <label class="col-form-label">Nama Lengkap</label>
        <input type="hidden" name="id_petugas" id="id_petugas" class="form-control">
        <input name="nama_lengkap" id="nama_lengkap" type="text" class="form-control">
      </div>
      <div class="form-group">
        <label class="col-form-label">Pendidikan</label>
        <input name="pend" id="pend" type="text" class="form-control">
      </div>
      <div class="form-group">
        <label class="col-form-label">Tahun</label>
        <input name="tahun" id="tahun" type="text" class="form-control">
      </div>
      <div class="form-group">
        <label class="col-form-label">Uraian Tugas</label>
        <select name="id_uraian" id="id_uraian" class="form-control">
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
        <select class="form-control" name="id_tempat" id="id_tempat">
          <option value="">-- Pilih --</option>
						<?php
						foreach($tempat as $temp => $value)
						{?>
						<option value="<?php echo $value->id_tempat;?>"><?php echo $value->nama_tempat; ?></option>
						<?php
						}?>
        </select>
        <input type="hidden" name="act" id="act" class="form-control">
        <br/>
        <input type="submit" class="btn btn-outline-primary" value="Simpan">
      </div>
    </form>
  </div>
</div>

<script type="text/javascript">
  function edit(id_petugas,nama_lengkap,pend,tahun,id_uraian,id_tempat){
    $('#id_petugas').val(id_petugas);
    $('#nama_lengkap').val(nama_lengkap);
    $('#pend').val(pend);
    $('#tahun').val(tahun);
    $('#id_uraian').val(id_uraian);
    $('#id_tempat').val(id_tempat);
    $('#act').val('edit');
  }

</script>
