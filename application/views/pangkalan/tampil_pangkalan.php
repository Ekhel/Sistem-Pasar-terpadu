<div class="card">
  <div class="card-body">
    <div class="col-lg-12">
      <?php echo $this->session->flashdata('msg');?>
      <div class="table-responsive">
        <a href="<?php echo base_url()?>Pangkalan_minyak/tambah_pangkalan" class="btn btn-outline-primary" title="Tambah Data Pangkalan"><i class="fa fa-plus-circle"></i> Tambah</a>
        <a href="#" class="btn btn-outline-primary" data-toggle="collapse" data-target="#demo"><i class="fas fa-filter"></i> Cari Data</a>
        <a href="<?php echo base_url()?>Pangkalan_minyak/peta_pangkalan" class="btn btn-outline-primary"><i class="fas fa-map"></i> Lihat Peta</a>
        <a href="<?php echo base_url()?>Pangkalan_minyak/print" target="_blank" class="btn btn-outline-primary"><i class="fas fa-print"></i> Cetak</a>
        <a href="#" id="btnExport" class="btn btn-outline-primary"><i class="fas fa-file-excel"></i> Export</a>
        <hr/>
        <div id="demo" class="collapse">
          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <form class="form-horizontal" method="get" action="<?php echo current_url(); ?>">
              <div class="form-group row">
                <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Distrik</label>
                <div class="col-6 col-lg-10">
                  <select name="q" id="id_distrik" class="form-control">
                    <option value="">-- Pilih --</option>
          						<?php
          						foreach($distrik as $dis => $val)
          						{?>
          						<option value="<?php echo $val->id_distrik;?>"><?php echo $val->nama_distrik; ?></option>
          						<?php
          						}?>
                  </select>
                  <br/>
                  <input type="submit" class="btn btn-success" value=" Cari">

                </div>
              </div>
            </form>
          </div>

          </div>
        </div>
        <div class="table-responsive" id="pangkalan">
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
                <th colspan="2">#</th>
              </tr>
              <tr>
                <th class="text-center">Distrik</th>
                <th>Kampung</th>
                <th>Alamat</th>
                <th></th>
                <th></th>
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
                    <a href="<?php echo base_url('Pangkalan_minyak/edit_pangkalan/'.$item->id_pangkalan); ?>" class="fa fa-edit" data-toggle="tooltip" data-placement="bottom" title="Edit Data"></a>
                  </td>
                  <td>
                    <a href="<?php echo base_url()?>Pangkalan_minyak/hapus_pangkalan/<?php echo $item->id_pangkalan?>" onclick="return confirm('Hapus Data ini Dari Database ?')" class="fa fa-trash" data-toggle="tooltip" data-placement="bottom" title="Hapus"></a>
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
</div>

<script type="text/javascript">
    $("[id$=btnExport]").click(function (e) {
          window.open('data:application/vnd.ms-excel,' + encodeURIComponent($('div[id$=pangkalan]').html()));
          e.preventDefault();
      });

    $('select[name="id_distrik"]').on('change', function(e) {
        var id_distrik = $(this).val();
        if(id_distrik) {
            $.ajax({
                url: '<?php echo base_url("Pangkalan_minyak/getkampung/") ?>'+id_distrik,
                type: "GET",
                dataType: "json",
                success:function(data) {
                    $('select[name="id_kampung"]').empty();
                    $.each(data, function(key, value) {
                        $('select[name="id_kampung"]').append('<option value="'+ value.id_kampung +'">'+ value.nama_kampung+'</option>');

                    });
                }
            });
        }else{
            $('select[name="id_kampung"]').empty();
        }
    });
</script>
