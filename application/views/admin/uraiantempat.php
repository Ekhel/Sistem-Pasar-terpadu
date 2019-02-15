<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <div class="page-header">
        <h2 class="pageheader-title">Uraian Tugas & Tempat Tugas</h2>
      </div>
      <hr/>
  </div>
</div>

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5">

  <div class="tab-outline">
    <ul class="nav nav-tabs" id="myTab2" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="tab-outline-one" data-toggle="tab" href="#outline-one" role="tab" aria-controls="home" aria-selected="true">Uraian Tugas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="tab-outline-two" data-toggle="tab" href="#outline-two" role="tab" aria-controls="profile" aria-selected="false">Tempat Tugas</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent2">
      <div class="tab-pane fade show active" id="outline-one" role="tabpanel" aria-labelledby="tab-outline-one">
        <div class="card">
          <div class="card-body">
            <div class="col-lg-12">
              <div class="table table-responsive">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Uraian</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $no = 1;
                  foreach($hasil as $item){ ?>
                    <tr>
                      <td class="text-center"><?php echo $no++ ?></td>
                      <td><?php echo $item->uraian_tugas ?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="outline-two" role="tabpanel" aria-labelledby="tab-outline-two">
        <div class="card">
          <div class="card-body">
            <a href="#" class="btn btn-outline-primary" data-target="#" data-toggle="modal" title="Tambah Data"><i class="fa fa-plus-circle"></i></a>
            <hr/>
            <div class="col-lg-12">
              <div class="table table-responsive">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th rowspan="2">No</th>
                      <th rowspan="2">NAMA</th>
                      <th colspan="3">JUMLAH PEDANGANG</th>
                      <th rowspan="2">LUAS</th>
                      <th rowspan="2">TYPE</th>
                      <th rowspan="2">KETERANGAN</th>
                      <th rowspan="2"></th>
                    </tr>
                    <tr>
                      <th>Kecil</th>
                      <th>Sedang</th>
                      <th>Besar</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $i = 1;
                  foreach($tempat as $temp){ ?>
                    <tr>
                      <td class="text-center"><?php echo $i++ ?></td>
                      <td><?php echo $temp->nama_tempat ?></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><?php echo $temp->luas_pasar ?></td>
                      <td><?php echo $temp->type ?></td>
                      <td><?php echo $temp->keterangan ?></td>
                      <td><a href="#" class="fas fa-map" data-toggle="tooltip" data-placement="bottom" title="Lihat Dalam Peta"></a></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
