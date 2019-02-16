<link rel="stylesheet" href="<?php echo base_url()?>assets/libs/css/profile.css">
<?php foreach ($result as $hasil){?>
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="<?php echo base_url()?>public/profile/<?php echo $hasil->gambar ?>" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Ganti Foto
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo $hasil->nama ?>
                                    </h5>
                                    <h6>
                                        <?php echo $hasil->pemilik ?>
                                    </h6>
                                    <p class="proile-rating">Mulai Operasi : <span><?php echo $hasil->tanggal_mulai_operasi ?></span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-list-ul"></i> Detail</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-th-list"></i> Jadwal</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--<div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>

                    </div>!-->
                    <div class="col-md-2">
                      <a href="#" class="btn btn-xs btn-primary"><i class="fa fa-print"></i> Cetak</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p><i class="fas fa-map-marker-alt"></i> KOORDINAT </p>
                            <a href=""><?php echo $hasil->latitude ?></a><br/>
                            <a href=""><?php echo $hasil->longitude ?></a><br/>
                            <p><i class="fas fa-bars"></i> KETERANGAN</p>
                            <a href=""><?php echo $hasil->keterangan ?></a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Alamat</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $hasil->alamat ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Distrik</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $hasil->nama_distrik ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Kampung/Kel</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $hasil->nama_kampung ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Kontak</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>-</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>NO Reg</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $hasil->no ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Penyedia</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $hasil->penyedia ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Status</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $hasil->status ?></p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <table class="small table table-condensed table-striped">
                                  <thead>
                                    <tr>
                                      <th>Tanggal</th>
                                      <th> Liter</th>
                                      <th>Oleh</th>
                                    </tr>
                                  </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <hr/>
                <a href="<?php echo base_url()?>Pangkalan_minyak" class="btn btn-xs btn-primary"> <i class="fa fa-list"></i> Kembali Ke Table</a>
                <a href="<?php echo base_url()?>Pangkalan_minyak/peta_pangkalan" class="btn btn-xs btn-primary"> <i class="fas fa-map"></i> Kembali Ke Peta</a>
            </form>
        </div>

      <?php } ?>
