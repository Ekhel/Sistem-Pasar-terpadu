<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
  <div class="card">
    <div class="card-body">
      <?php echo $this->session->flashdata('msg');?>
      <a href="<?php echo base_url()?>Laporan/input_laporan" class="btn btn-outline-primary"><i class="fa fa-plus-circle"></i> Tambah</a>
      <a href="<?php echo base_url()?>Laporan/kalender" class="btn btn-outline-primary"><i class="fas fa-calendar"></i> Kalender</a>
      <hr/>
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
                <td><?php echo $item->tanggal ?></td>
                <td><?php echo $item->liter ?></td>
                <td><?php echo $item->drum ?></td>
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
