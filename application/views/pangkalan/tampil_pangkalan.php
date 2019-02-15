<div class="card">
  <div class="card-body">
    <div class="col-lg-12">
      <?php echo $this->session->flashdata('msg');?>
      <div class="table-responsive">
        <a href="#" class="btn btn-outline-primary"><i class="fas fa-filter"></i> Cari Data</a>
        <a href="<?php echo base_url()?>Pangkalan_minyak/tambah_pangkalan" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="bottom" title="Tambah Data Pangkalan"><i class="fa fa-plus-circle"></i> Tambah</a>
        <a href="<?php echo base_url()?>Pangkalan_minyak/peta_pangkalan" class="btn btn-outline-primary"><i class="fas fa-map"></i> Lihat Peta</a>
        <hr/>
        <table class="small table table-bordered">
          <thead>
            <tr class="text-center">
              <th class="center" rowspan="2">No</th>
              <th rowspan="2">Pangkalan</th>
              <th rowspan="2">Pemilik</th>
              <th rowspan="2">No Reg</th>
              <th colspan="3">Lokasi</th>
              <th rowspan="2">Penyedia</th>
              <th rowspan="2">Status</th>
              <th rowspan="2">Keterangan</th>
              <th rowspan="2">#</th>
            </tr>
            <tr>
              <th class="text-center">Distrik</th>
              <th>Kampung</th>
              <th>Alamat</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach($result as $item){?>
              <tr class="center">
                <td><?php echo $no++ ?></td>
                <td><?php echo $item->nama ?></td>
                <td><?php echo $item->pemilik ?></td>
                <td><?php echo $item->no ?></td>
                <td><?php echo $item->nama_distrik ?></td>
                <td><?php echo $item->nama_kampung ?></td>
                <td><?php echo $item->alamat ?></td>
                <td><?php echo $item->penyedia ?></td>
                <td><?php echo $item->status ?></td>
                <td><?php echo $item->keterangan ?></td>

                <td>
                  <a href="#" onclick="return confirm('Anda Yakin Ingin Menghapusnya ?')" class="fa fa-edit" data-toggle="tooltip" data-placement="bottom" title="Hapus"></a>
                </td>
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
