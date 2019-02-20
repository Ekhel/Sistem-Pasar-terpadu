<link rel="stylesheet" href="<?php echo base_url()?>assets/libs/css/chossen.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.6/chosen.jquery.min.js"></script>

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
  <div class="card">
    <h5 class="card-header"><i class="fa fa-plus-circle"></i> Input Laporan</h5>
    <div class="card-body">
      <form method="post" action="<?php echo base_url()?>Laporan/input_laporan_proses">
        <div class="form-group row">
          <label class="col-3 col-lg-2 col-form-label text-right"> Pangkalan Minyak</label>
          <div class="col-9 col-lg-10">
            <select name="id_pangkalan" data-placeholder="-- Pilih --" class="form-control form-control-chosen" tabindex="2">
              <option value="">-- Pilih --</option>
                <?php
                foreach($pangkalan as $p => $val)
                {?>
                <option value="<?php echo $val->id_pangkalan;?>"><?php echo $val->nama; ?></option>
                <?php
                }?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-3 col-lg-2 col-form-label text-right"> Tanggal</label>
          <div class="col-9 col-lg-10">
            <input type="date" name="tanggal" required="true" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-3 col-lg-2 col-form-label text-right"> Liter</label>
          <div class="col-9 col-lg-10">
            <input type="text" name="liter" required="true" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-3 col-lg-2 col-form-label text-right"> Drum</label>
          <div class="col-9 col-lg-10">
            <input type="text" name="drum" required="true" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-3 col-lg-2 col-form-label text-right"> Penyedia</label>
          <div class="col-9 col-lg-10">
            <select name="penyedia" class="form-control">
              <option value="">--- Pilih ---</option>
              <option value="PT Sejahtra Keluarga Papua">PT Sejahtra Keluarga Papua</option>
              <option value="PT Wira Sembada">PT Wira Sembada</option>
              <option value="PT Mutiara Cemerlang">PT Mutiara Cemerlang</option>
            </select>
            <hr/>
            <input type="submit" class="btn btn-outline-primary" value="Simpan">
            <a href="<?php echo base_url()?>laporan" class="btn btn-outline-danger">Batal</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


<script type="text/javascript">
    $('.form-control-chosen').chosen({
	  });

</script>
