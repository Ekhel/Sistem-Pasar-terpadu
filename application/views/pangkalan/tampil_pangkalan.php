<div class="card">
  <div class="card-body">
    <div class="col-lg-12">
      <?php echo $this->session->flashdata('msg');?>
      <div class="table-responsive">
        <a href="<?php echo base_url()?>Pangkalan_minyak/tambah_pangkalan" class="btn btn-outline-primary" title="Tambah Data Pangkalan"><i class="fa fa-plus-circle"></i> Tambah</a>
        <a href="#" class="btn btn-outline-primary" data-toggle="collapse" data-target="#demo"><i class="fas fa-filter"></i> Cari Data</a>
        <a href="<?php echo base_url()?>Pangkalan_minyak/peta_pangkalan" class="btn btn-outline-primary"><i class="fas fa-map"></i> Lihat Peta</a>
        <a href="#" class="btn btn-outline-primary"><i class="fas fa-print"></i> Cetak</a>
        <a href="#" class="btn btn-outline-primary"><i class="fas fa-file-excel"></i> Export</a>
        <hr/>
        <div id="demo" class="collapse">
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <form class="form-horizontal">
              <div class="form-group row">
                <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Distrik</label>
                <div class="col-6 col-lg-10">
                  <select name="id_distrik" id="id_distrik" class="form-control">
                    <option value="">-- Pilih --</option>
          						<?php
          						foreach($distrik as $dis => $val)
          						{?>
          						<option value="<?php echo $val->id_distrik;?>"><?php echo $val->nama_distrik; ?></option>
          						<?php
          						}?>
                  </select>
                </div>
              </div>
                <div class="form-group row">
                  <label for="inputPassword2" class="col-3 col-lg-2 col-form-label text-right">Kampung</label>
                  <div class="col-6 col-lg-10">
                    <input type="text" required="" class="form-control">
                  </div>
                </div>
            </form>
          </div>

          </div>
        </div>
        <table class="small table table-bordered">
          <thead>
            <tr class="text-center">
              <th class="center" rowspan="2">No</th>
              <th rowspan="2">Nama Pangkalan</th>
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
                <td class="text-center">
                  <?php if($item->status=="aktif"){
                    echo "<span class='badge-dot badge-success mr-1' title='Aktif'></span>";
                  }
                  else{
                    echo"<span class='badge-dot badge-brand mr-1' title='Tidak Aktif'></span>";
                  }
                  ?>
                </td>
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
