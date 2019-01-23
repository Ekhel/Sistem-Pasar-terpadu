<div class="card">
  <h5 class="card-header"><i class="fa fa-edit"></i></h5>
  <div class="card-body">
    <form action="<?php echo base_url('admin/edit_pegawai_proses')?>" method="post">
      <div class="form-group">
        <label class="col-form-label">Nama Lengkap</label>
        <input type="hidden" name="id_pegawai" id="id_pegawai" class="form-control">
        <input name="nama_lengkap" id="nama_lengkap" type="text" class="form-control">
      </div>
      <div class="form-group">
        <label class="col-form-label">Nama Panggilan</label>
        <input name="nama_panggilan" id="nama_panggilan" type="text" class="form-control">
      </div>
      <div class="form-group">
        <label class="col-form-label">Status</label>
        <select name="id_status" id="id_status" class="form-control">
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
        <select class="form-control" id="id_bidang" name="id_bidang">
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
        <input type="hidden" name="act" id="act" class="form-control">
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


  function edit(id_pegawai,nama_lengkap,nama_panggilan,id_status,id_bidang,id_jabatan){
    $('#id_pegawai').val(id_pegawai);
    $('#nama_lengkap').val(nama_lengkap);
    $('#nama_panggilan').val(nama_panggilan);
    $('#id_status').val(id_status);
    $('#id_bidang').val(id_bidang);
    $('#id_jabatan').val(id_jabatan);
    $('#act').val('edit');
  }

</script>
