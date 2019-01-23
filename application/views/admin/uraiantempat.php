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
                      <td><?php echo $no++ ?></td>
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
            <div class="col-lg-12">
              <div class="table table-responsive">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Tempat</th>
                      <th>Longitude</th>
                      <th>Latitude</th>
                      <th>Keterangan</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  $i = 1;
                  foreach($tempat as $temp){ ?>
                    <tr>
                      <td><?php echo $i++ ?></td>
                      <td><?php echo $temp->nama_tempat ?></td>
                      <td><?php echo $temp->longitude ?></td>
                      <td><?php echo $temp->latitude ?></td>
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
