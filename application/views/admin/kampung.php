<div class="card">
  <div class="card-body">
    <div class="col-ld-12">
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
