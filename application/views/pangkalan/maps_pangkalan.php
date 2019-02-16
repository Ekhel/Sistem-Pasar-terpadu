<?php echo $map['js'] ?>
<div class="card">
  <div class="card-body">
    <div class="col-lg-12">
      <a href="#" class="btn btn-outline-primary" data-toggle="collapse" data-target="#demo"><i class="fas fa-filter"></i> Cari Data</a>
      <a href="<?php echo base_url()?>Pangkalan_minyak" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="bottm" title="Lihat Data Dalam Peta"><i class="fa fa-list"></i> Lihat Data Table</a>
      <hr/>
      <div id="demo" class="collapse">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <form class="form-horizontal">
            <div class="form-group row">
              <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Distrik</label>
              <div class="col-6 col-lg-10">
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
            </div>
              <div class="form-group row">
                <label for="inputPassword2" class="col-3 col-lg-2 col-form-label text-right">Kampung</label>
                <div class="col-6 col-lg-10">
                  <input type="text" required="" class="form-control">
                </div>
              </div>
          </form>
        </div>

        </div>
      <div style="min-height: 300px; min-width:900px;"><?php echo $map['html'] ?></div>
    </div>
  </div>
</div>
