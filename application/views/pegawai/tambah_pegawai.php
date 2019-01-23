<div class="card">
  <h5 class="card-header"><i class="fa fa-plus-circle"></i></h5>
  <div class="card-body">
    <form action="<?php echo base_url('admin/tambah_pegawai_proses')?>" method="post">
      <div class="form-group">
        <label class="col-form-label">Nama Lengkap</label>
        <input name="nama_lengkap" type="text" class="form-control">
      </div>
      <div class="form-group">
        <label class="col-form-label">Nama Panggilan</label>
        <input name="nama_panggilan" type="text" class="form-control">
      </div>
      <div class="form-group">
        <label class="col-form-label">Status</label>
        <select name="id_status" class="form-control">
          <option value="">-- Pilih --</option>
						<?php
						foreach($status as $sta => $val)
						{?>
						<option value="<?php echo $val->id_status;?>"><?php echo $val->status; ?></option>
						<?php
						}?>
        </select>
      </div>
      <div class="form-group">
        <label class="col-form-label">Bidang</label>
        <select class="form-control" name="id_bidang">
          <option value="">-- Pilih --</option>
						<?php
						foreach($bidang as $bid => $value)
						{?>
						<option value="<?php echo $value->id_bidang;?>"><?php echo $value->bidang; ?></option>
						<?php
						}?>
        </select>
      </div>
      <div class="form-group">
        <label class="col-form-label">Bidang</label>
        <select name="id_jabatan" id="id_jabatan" class="form-control">

        </select>
        <br/>
        <input type="submit" class="btn btn-outline-primary" value="Simpan">
      </div>
    </form>
  </div>
</div>

<script type="text/javascript">
  $('select[name="id_bidang"]').on('change', function(e) {
      var id_bidang = $(this).val();
      if(id_bidang) {
          $.ajax({
              url: '<?php echo base_url("admin/getjabatan/") ?>'+id_bidang,
              type: "GET",
              dataType: "json",
              success:function(data) {
                  $('select[name="id_jabatan"]').empty();
                  $.each(data, function(key, value) {
                      $('select[name="id_jabatan"]').append('<option value="'+ value.id_jabatan +'">'+ value.jabatan+'</option>');

                  });
              }
          });
      }else{
          $('select[name="id_jabatan"]').empty();
      }
  });
</script>
