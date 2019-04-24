<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="page-header">
      <h2 class="pageheader-title">Pedagang</h2>
      <div class="page-breadcrumb">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Kwitansi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Daftar Kwitansi Pajak</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <a href="<?php echo base_url()?>Pedagang/tambah_kwitansi" class="btn btn-outline-primary" title="Tambah Kwitansi"><i class="fa fa-plus-circle"></i> Tambah</a>
        <a href="<?php echo base_url()?>Pedagang" class="btn btn-outline-secondary" data-toggle="tooltip" data-placement="bottm" title="Lihat Data Dalam Peta"><i class="fa fa-list"></i> Pedagang</a>
        <a href="#" class="btn btn-outline-warning" data-toggle="collapse" data-target="#demo"><i class="fas fa-filter"></i> Cari Data</a>
        <hr/>
        <div id="demo" class="collapse">
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <form class="form-horizontal" method="get" action="<?php echo base_url()?>Pedagang/filter_kwitansi/">
              <div class="form-group row">
                <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Distrik</label>
                <div class="col-6 col-lg-10">
                  <input name="tanggal" type="date" class="form-control">
                  <br/>
                  <input type="submit" class="btn btn-success" value=" Cari">

                </div>
              </div>
            </form>
          </div>

          </div>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Pembayar</th>
              <th>Penagih</th>
              <th>Jumlah</th>
              <th>Tanggal</th>
              <th>#</th>
              <th>#</th>
              <th>#</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach($filter_kwitansi as $item){?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $item->nama_pedagang ?></td>
              <td><?php echo $item->nama_petugas ?></td>
              <td><?php echo number_format($item->jumlah) ?></td>
              <td><?php echo $item->tanggal ?></td>
              <td>
                <a href="<?php echo base_url('Pedagang/cetak_kwitansi/'.$item->id_kwitansi); ?>" target="_blank" class="fas fa-print" data-toggle="tooltip" data-placement="bottom" title="Cetak Kwitansi"></a>
              </td>
              <td>
                <a href="#" class="fa fa-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"></a>
              </td>
              <td>
                <a href="#" class="fa fa-edit" data-toggle="tooltip" data-placement="bottom" title="Edit"></a>
              </td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kwitansi</h5>
        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </a>
      </div>
      <div class="modal-body">
        <?php $this->load->view('pedagang/tambah_kwitansi')?>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-secondary" data-dismiss="modal">Tutup</a>
      </div>
    </div>
  </div>
</div>
