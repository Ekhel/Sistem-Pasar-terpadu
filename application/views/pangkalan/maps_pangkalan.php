<?php echo $map['js'] ?>
<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="page-header">
      <h2 class="pageheader-title">Peta Pangkalan Minyak </h2>
      <div class="page-breadcrumb">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pangkalan Minyak</a></li>
            <li class="breadcrumb-item active" aria-current="page">Peta Titik Pangkalan Minyak</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <a href="#" class="btn btn-outline-warning" data-toggle="collapse" data-target="#demo"><i class="fas fa-filter"></i> Cari Data</a>
        <a href="<?php echo base_url()?>Pangkalan_minyak" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="bottm" title="Lihat Data Dalam Peta"><i class="fa fa-list"></i> Lihat Data Table</a>
        <hr/>
        <div id="demo" class="collapse">
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <form class="form-horizontal" method="get" action="<?php echo current_url(); ?>">
              <div class="form-group row">
                <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Distrik</label>
                <div class="col-6 col-lg-10">
                  <select name="q" id="id_distrik" class="form-control">
                    <option value="">-- Pilih --</option>
                      <?php
                      foreach($distrik as $dis => $val)
                      {?>
                      <option value="<?php echo $val->id_distrik;?>"><?php echo $val->nama_distrik; ?></option>
                      <?php
                      }?>
                  </select>
                  <br/>
                  <input type="submit" class="btn btn-success" value=" Cari">
                </div>
              </div>
            </form>
          </div>

          </div>
        <div style="min-height: 300px; min-width:900px;"><?php echo $map['html'] ?></div>
      </div>
    </div>
  </div>
</div>
