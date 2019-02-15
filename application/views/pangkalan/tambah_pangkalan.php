<div class="card">
  <h5 class="card-header"><i class="fa fa-plus-circle"></i> Tambah Data Pangkalan Minyak Tanah</h5>
  <div class="card-body">
    <form class="form-horizontal" action="<?php echo current_url(); ?>" method="post" enctype="multipart/form-data">
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
      <div class="form-group">
        <label class="col-form-label">Nama</label>
        <input name="nama" type="text" class="form-control">
      </div>
      <div class="form-group">
        <label class="col-form-label">Pemilik</label>
        <input name="pemilik" type="text" class="form-control">
      </div>
      <div class="form-group">
        <label class="col-form-label">Distrik</label>
        <select name="id_distrik" id="id_distrik" class="form-control">
          <option value="">-- Pilih --</option>
						<?php
						foreach($distrik as $dis => $val)
						{?>
						<option value="<?php echo $val->id_distrik;?>"><?php echo $val->nama_distrik; ?></option>
						<?php
						}?>
        </select>
      </div>
      <div class="form-group">
        <label class="col-form-label">Kampung</label>
        <select name="id_kampung" id="id_kampung" class="form-control">

        </select>
      </div>
      <div class="form-group">
        <label class="col-form-label">No Reg</label>
        <input name="no" type="text" class="form-control">
      </div>
      <div class="form-group">
        <label class="col-form-label">Alamat</label>
        <input name="alamat" type="text" class="form-control">
      </div>
      <div class="form-group">
        <label class="col-form-label">Koordinat</label>
        <div class="col-lg-3">
          <input name="latitude" type="text" value="<?php echo set_value('latitude') ?>" placeholder="Latitude" class="form-control">
        </div>
        <div class="col-lg-3">
          <input name="longitude" type="text" value="<?php echo set_value('longitude') ?>" placeholder="Longitude" class="form-control">
        </div>
        <hr/>
        <div class="col-sm-8 col-md-offset-2">
          <div style="min-height: 300px; min-width:900px;"><?php echo $map['html'] ?></div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-form-label">Penyedia</label>
        <input name="penyedia" type="text" class="form-control">
      </div>
      <div class="form-group">
        <label class="col-form-label">Tanggal Operasi</label>
        <input name="tanggal_mulai_operasi" type="text" class="form-control">
      </div>
      <div class="form-group">
        <label class="col-form-label">Status</label>
        <select name="status" class="form-control">
          <option value="aktif">Aktif</option>
          <option value="nonaktif">Tidak Aktif</option>
        </select>
      </div>
      <div class="form-group">
        <label class="col-form-label">Keterangan</label>
        <input name="keterangan" type="text" class="form-control">
      </div>
      <div class="form-group">
        <label class="col-form-label">Foto</label>
        <input type="file" name="gambar" class="form-control">
        <hr/>
        <input type="submit" class="btn btn-outline-primary" value="Simpan">
      </div>
    </form>
  </div>
</div>

<script type="text/javascript">
  $('select[name="id_distrik"]').on('change', function(e) {
      var id_distrik = $(this).val();
      if(id_distrik) {
          $.ajax({
              url: '<?php echo base_url("Pangkalan_minyak/getkampung/") ?>'+id_distrik,
              type: "GET",
              dataType: "json",
              success:function(data) {
                  $('select[name="id_kampung"]').empty();
                  $.each(data, function(key, value) {
                      $('select[name="id_kampung"]').append('<option value="'+ value.id_kampung +'">'+ value.nama_kampung+'</option>');

                  });
              }
          });
      }else{
          $('select[name="id_kampung"]').empty();
      }
  });

  function setMapToForm(latitude, longitude)
  {
    $('input[name="latitude"]').val(latitude);
    $('input[name="longitude"]').val(longitude);
        }
</script>
