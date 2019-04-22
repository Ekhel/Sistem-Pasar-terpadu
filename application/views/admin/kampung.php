<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="page-header">
      <h2 class="pageheader-title">Kampung </h2>
      <div class="page-breadcrumb">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Kampung</a></li>
            <li class="breadcrumb-item active" aria-current="page">Daftar Kampung</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
  <div class="card">
    <div class="card-body">
      <?php echo $this->session->flashdata('msg');?>
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead>
            <tr class="center">
              <th>No</th>
              <th>Kampung</th>
              <th>Distrik</th>
              <th>Jumlah KK</th>
              <th>Jumlah KK +</th>
              <th>Luas Wilayah</th>
              <th>#</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach($result as $item){?>
              <tr class="center">
                <td><?php echo $no++ ?></td>
                <td><?php echo $item->nama_kampung ?></td>
                <td><?php echo $item->nama_distrik ?></td>
                <td><?php echo $item->jumlah_kk ?></td>
                <td><?php echo $item->kk_tambahan ?></td>
                <td><?php echo $item->luas_wilayah ?></td>
                <td>
                  <a href="#" onclick="return confirm('Anda Yakin Ingin Menghapusnya ?')" class="fa fa-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"></a>
                </td>
              </tr>
            <?php }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
