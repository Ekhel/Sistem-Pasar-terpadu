<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="page-header">
      <h2 class="pageheader-title">Pangkalan Minyak</h2>
      <div class="page-breadcrumb">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Edit</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit / Update Pangkalan Minyak</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
      <h5 class="card-header"><i class="fa fa-plus-circle"></i> Edit Data Pangkalan Minyak Tanah</h5>
      <div class="card-body">
        <form action="<?php echo current_url(); ?>" method="post" enctype="multipart/form-data">
          <div class="form-group row">
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
            <label class="col-3 col-lg-2 col-form-label text-right">Nama</label>
            <div class="col-7 col-lg-7">
              <input name="nama" type="text" class="form-control" value="<?php echo $pangkalan->nama ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-lg-2 col-form-label text-right">Pemilik</label>
            <div class="col-7 col-lg-7">
              <input name="pemilik" type="text" class="form-control" value="<?php echo $pangkalan->pemilik ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-lg-2 col-form-label text-right">Distrik</label>
            <div class="col-5 col-lg-5">
              <select name="id_distrik" id="id_distrik" class="form-control" value="<?php echo $pangkalan->id_distrik ?>">
                <option value="">-- Pilih --</option>
      						<?php
      						foreach($distrik as $dis => $val)
      						{?>
      						<option value="<?php echo $val->id_distrik;?>"><?php echo $val->nama_distrik; ?></option>
      						<?php
      						}?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-lg-2 col-form-label text-right">Kampung</label>
            <div class="col-5 col-lg-5">
              <select name="id_kampung" id="id_kampung" class="form-control" value="<?php echo $pangkalan->id_kampung ?>">

              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-lg-2 col-form-label text-right">No Reg</label>
            <div class="col-4 col-lg-4">
              <input name="no" type="text" class="form-control" value="<?php echo $pangkalan->no ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-lg-2 col-form-label text-right">Alamat</label>
            <div class="col-9 col-lg-10">
              <input name="alamat" type="text" class="form-control" value="<?php echo $pangkalan->alamat ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-lg-2 col-form-label text-right">Koordinat</label>
            <div class="col-sm-6 col-lg-3 mb-3 mb-sm-0">
              <input name="latitude" type="text" value="<?php echo $pangkalan->latitude ?>" placeholder="Latitude" class="form-control">
            </div>
            <div class="col-sm-6 col-lg-3">
              <input name="longitude" type="text" value="<?php echo $pangkalan->longitude ?>" placeholder="Longitude" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-lg-2 col-form-label text-right">Maps</label>
            <div class="col-9 col-lg-10">
              <?php echo $map['html'] ?>
              <!--<div width="800px" height="300px"></div>!-->
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-lg-2 col-form-label text-right">Penyedia</label>
            <div class="col-5 col-lg-5">
              <select name="penyedia" class="form-control" value="<?php echo $pangkalan->penyedia ?>">
                <option value="">--- Pilih ---</option>
                <option value="PT Sejahtra Keluarga Papua">PT Sejahtra Keluarga Papua</option>
                <option value="PT Wira Sembada">PT Wira Sembada</option>
                <option value="PT Mutiara Cemerlang">PT Mutiara Cemerlang</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-lg-2 col-form-label text-right">Tanggal Operasi</label>
            <div class="col-4 col-lg-4">
              <input name="tanggal_mulai_operasi" type="text" class="form-control" value="<?php echo $pangkalan->tanggal_mulai_operasi ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-lg-2 col-form-label text-right">Status</label>
            <div class="col-4 col-lg-4">
              <select name="status" class="form-control" value="<?php echo $pangkalan->status ?>">
                <option value="aktif">Aktif</option>
                <option value="nonaktif">Tidak Aktif</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-lg-2 col-form-label text-right">Keterangan</label>
            <div class="col-9 col-lg-10">
              <textarea name="keterangan" rows="8" class="form-control" cols="80" value="<?php echo $pangkalan->keterangan ?>"></textarea>
              <!--<input name="keterangan" type="text" class="form-control">!-->
            </div>
          </div>
          <div class="form-group row">
            <label class="col-3 col-lg-2 col-form-label text-right">Foto</label>
            <div class="col-4 col-lg-10">
              <input type="file" name="gambar" class="form-control">
              <div class="col-5">
                <?php if($pangkalan->gambar != '') : ?>
                  <img src="<?php echo base_url("public/profile/{$pangkalan->gambar}") ?>" height="150">
                <?php endif; ?>
              </div>
              <hr/>
              <input type="submit" class="btn btn-outline-primary" value="Simpan">
              <a href="<?php echo base_url()?>Pangkalan_minyak" class="btn btn-outline-danger">Batal</a>
            </div>
          </div>
        </form>
      </div>
    </div>
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
