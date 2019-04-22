<?php foreach($pangkalan as $p){?>
<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="page-header">
      <h2 class="pageheader-title">Dashboard Applikasi </h2>
      <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
      <div class="page-breadcrumb">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Singkat</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
      <div class="card">
          <div class="card-body">
              <div class="d-inline-block">
                  <h5 class="text-muted">Pangkalan</h5>
                  <h4 class="mb-0"> <?php echo $p->jumlahpangkalan ?></h4>
              </div>
              <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                  <a href="<?php echo base_url()?>Pangkalan_minyak" class="fa fa-user fa-fw fa-sm text-primary"></a>
              </div>
          </div>
      </div>
  </div>
<?php } ?>

<?php foreach($penjual as $k){?>
  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
      <div class="card">
          <div class="card-body">
              <div class="d-inline-block">
                  <h5 class="text-muted">Pedagang</h5>
                  <h4 class="mb-0"><?php echo $k->jumlahpedagang ?></h2>
              </div>
              <div class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
                  <a href="<?php echo base_url()?>Pedagang" class="fa fa-handshake fa-fw fa-sm text-secondary"></a>
              </div>
          </div>
      </div>
  </div>
<?php } ?>

  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
      <div class="card">
          <div class="card-body">
              <div class="d-inline-block">
                  <h5 class="text-muted">Pangkalan</h5>
                  <h4 class="mb-0"> 0</h4>
              </div>
              <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                  <i class="fa fa-user fa-fw fa-sm text-primary"></i>
              </div>
          </div>
      </div>
  </div>
  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
      <div class="card">
          <div class="card-body">
              <div class="d-inline-block">
                  <h5 class="text-muted">Pangkalan</h5>
                  <h4 class="mb-0"> 0</h4>
              </div>
              <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                  <i class="fa fa-user fa-fw fa-sm text-primary"></i>
              </div>
          </div>
      </div>
  </div>
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h4><i class="fas fa-align-justify"></i> Laporan Terahir Pengantaran Minyak</h4>
        <hr/>
        <div class="campaign-table table-responsive">
          <table class="table">
            <thead>
              <tr class="border-0">
                <th class="border-0">No</th>
                <th class="border-0">Nama</th>
                <th class="border-0">Tanggal</th>
                <th class="border-0">Liter</th>
                <th class="border-0">Drum</th>
                <th class="border-0">Penyedia</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach($result as $item){?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $item->nama ?></td>
                  <td><?php echo $item->tanggal ?></td>
                  <td><?php echo number_format($item->liter) ?></td>
                  <td><?php echo $item->drum ?></td>
                  <td><?php echo $item->penyedia ?></td>
                </tr>
              <?php }?>
              <tr>
                <td colspan="9"><a href="<?php echo base_url()?>Laporan" class="btn btn-outline-light float-right">Lihat Data Lengkap</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
