<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="page-header">
      <h2 class="pageheader-title">Laporan Pedagang </h2>
      <div class="page-breadcrumb">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Laporan Pedagang</a></li>
            <li class="breadcrumb-item active" aria-current="page">Daftar Laporan Pedagang Pasar</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
      <div class="card-body">
        <?php echo $this->session->flashdata('msg');?>
        <a href="<?php echo base_url()?>Laporan/input_laporan" class="btn btn-outline-primary"><i class="fa fa-plus-circle"></i> Tambah</a>
        <a href="#" class="btn btn-outline-warning" data-toggle="collapse" data-target="#demo"><i class="fas fa-filter"></i> Cari Data</a>
        <a href="<?php echo base_url()?>Laporan/kalender" class="btn btn-outline-success"><i class="fas fa-calendar"></i> Kalender</a>
        <hr/>
        <div id="demo" class="collapse">
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <form class="form-horizontal" method="get" action="<?php echo current_url(); ?>">
              <div class="form-group row">
                <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Tanggal</label>
                <div class="col-6 col-lg-10">
                  <input type="date" name="tanggal" class="form-control">
                </div>
                <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Sampai</label>
                <div class="col-6 col-lg-10">
                  <input type="date" name="tanggal" class="form-control">
                  <br/>
                  <input type="submit" class="btn btn-success" value=" Cari">
                </div>
              </div>
            </form>
          </div>

          </div>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Liter</th>
                <th>Drum</th>
                <th>Penyedia</th>
                <th>#</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach($result as $item){ ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $item->nama ?></td>
                  <td class="text-center"><?php echo $item->tanggal ?></td>
                  <td class="text-center"><?php echo number_format($item->liter) ?></td>
                  <td class="text-center"><?php echo $item->drum ?></td>
                  <td><?php echo $item->penyedia ?></td>
                  <td>
                    <a href="<?php echo base_url()?>Laporan/hapus_laporan/<?php echo $item->id_masuk?>" onclick="return confirm('Hapus Data ini Dari Database ?')" class="fa fa-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"></a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
    </div>
  </div>
  </div>
</div>
