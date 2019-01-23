<div class="card">
  <div class="card-body">
    <div class="col-ld-12">
      <?php echo $this->session->flashdata('msg');?>
      <div class="table-responsive">
        <a href="#" class="btn btn-outline-primary" data-target="#modalTambah" data-toggle="modal" title="Tambah Petugas"><i class="fa fa-plus-circle"></i></a>
        <table class="table table-bordered table-striped">
          <thead>
            <tr class="text-center">
              <th>No</th>
              <th>Nama</th>
              <th>Pend.</th>
              <th>Tahun</th>
              <th>Uraian</th>
              <th>Tempat Tugas</th>
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
                <td><?php echo $item->pend ?></td>
                <td><?php echo $item->tahun ?></td>
                <td><?php echo $item->uraian_tugas ?></td>
                <td><?php echo $item->nama_tempat ?></td>
                <td>
                  <a href="javascript:void(0);" data-target="#modalEdit" data-toggle="modal" data-placement="bottom" title="Edit">
                    <i class="fa fa-edit" onclick="edit(
                    '<?php echo $item->id_petugas ?>',
                    '<?php echo $item->nama_lengkap ?>',
                    '<?php echo $item->pend ?>',
                    '<?php echo $item->tahun ?>',
                    '<?php echo $item->id_uraian ?>',
                    '<?php echo $item->id_tempat ?>')">
                  </i>
                </a>
                </td>
                <td>
                  <a href="<?php echo base_url()?>Petugas/hapus_petugas/<?php echo $item->id_petugas?>" onclick="return confirm('Anda Yakin Ingin Menghapusnya ?')" class="fa fa-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"></a>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Petugas</h5>
        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </a>
      </div>
      <div class="modal-body">
        <?php $this->load->view('petugas/tambah_petugas')?>
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
        <h5 class="modal-title" id="exampleModalLabel">Edit Petugas</h5>
        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </a>
      </div>
      <div class="modal-body">
        <?php $this->load->view('petugas/edit_petugas')?>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-secondary" data-dismiss="modal">Tutup</a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

</script>
