<div class="card">
  <div class="card-body">
    <div class="col-ld-12">
      <?php echo $this->session->flashdata('msg');?>
      <div class="table-responsive">
        <a href="#" class="btn btn-outline-primary" data-target="#modalTambah" data-toggle="modal" title="Tambah Pengguna"><i class="fa fa-plus-circle"></i></a>
        <hr/>
        <table class="table table-bordered table-striped">
          <thead>
            <tr class="center">
              <th>No</th>
              <th>Usename</th>
              <th>Nama Lengkap</th>
              <th>Status</th>
              <th>Level</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach($hasil->result() as $item){?>
              <tr class="center">
                <td><?php echo $no++ ?></td>
                <td><?php echo $item->nama ?></td>
                <td><?php echo $item->nama_lengkap ?></td>
                <td><?php echo $item->status ?></td>
                <td><?php echo $item->level ?></td>
                <td>
                  <a href="<?php echo base_url();?>admin/hapus_pengguna/<?php echo $item->id_user ?>" onclick="return confirm('Anda Yakin Ingin Menghapusnya ?')" class="fa fa-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"></a>
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

<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pengguna</h5>
        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </a>
      </div>
      <div class="modal-body">
        <?php $this->load->view('admin/tambah_pengguna')?>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-secondary" data-dismiss="modal">Tutup</a>
      </div>
    </div>
  </div>
</div>
