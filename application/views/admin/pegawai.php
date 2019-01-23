<div class="card">
  <div class="card-body">
    <div class="col-ld-12">
      <?php echo $this->session->flashdata('msg');?>
      <div class="table-responsive">
        <a href="#" class="btn btn-outline-primary" data-target="#modalTambah" data-toggle="modal" title="Tambah Pegawai"><i class="fa fa-plus-circle"></i></a>
        <table class="table table-bordered table-striped">
          <thead>
            <tr class="center">
              <th>No</th>
              <th>Nama</th>
              <th>Alias</th>
              <th>Status</th>
              <th>Bidang</th>
              <th>Jabatan</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach($hasil as $item){?>
              <tr class="center">
                <td><?php echo $no++ ?></td>
                <td><?php echo $item->nama_lengkap ?></td>
                <td><?php echo $item->nama_panggilan ?></td>
                <td><?php echo $item->status ?></td>
                <td><?php echo $item->bidang ?></td>
                <td><?php echo $item->jabatan ?></td>
                <td>
                  <a href="javascript:void(0);" data-target="#modalEdit" data-toggle="modal" data-placement="bottom" title="Edit">
                    <i class="fa fa-edit" onclick="edit(
                    '<?php echo $item->id_pegawai ?>',
                    '<?php echo $item->nama_lengkap ?>',
                    '<?php echo $item->nama_panggilan ?>',
                    '<?php echo $item->status ?>',
                    '<?php echo $item->id_bidang ?>',
                    '<?php echo $item->id_jabatan ?>')">
                  </i>
                </a>
                </td>
                <td>
                  <a href="<?php echo base_url();?>admin/hapus_pegawai_proses/<?php echo $item->id_pegawai ?>" onclick="return confirm('Anda Yakin Ingin Menghapusnya ?')" class="fa fa-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"></a>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pegawai</h5>
        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </a>
      </div>
      <div class="modal-body">
        <?php $this->load->view('pegawai/tambah_pegawai')?>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-secondary" data-dismiss="modal">Tutup</a>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Pegawai</h5>
        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </a>
      </div>
      <div class="modal-body">
        <?php $this->load->view('pegawai/edit_pegawai')?>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-secondary" data-dismiss="modal">Tutup</a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

</script>
