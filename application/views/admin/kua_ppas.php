<div class="card">
  <div class="card-body">
    <div class="table-responsive">
      <div class="col-lg-12">
        <form action="<?php echo base_url('Home/kua_ppas')?>" method="GET">
          <button type="button" class="btn btn-white btn-default btn-round" data-toggle="collapse" data-target="#demo"><i class="fa fa-search"></i> Cari</button>
						<div id="demo" class="collapse">
						<hr/>
              <div class="form-group">
                <label class="col-md-2"> Tahun</label>
                  <div class="col-md-8">
                    <select class="form-control" name="tahun">
                      <option value="">--- Pilih Tahun ---</option>
                      <option value="2018">2018</option>
                      <option value="2019">2019</option>
                      <option value="2020">2020</option>
                      <option value="2021">2022</option>
                      <option value="2022">2022</option>
                      <option value="2023">2023</option>
                    </select>
                </br>
                <input type="submit" value="Filter" name="" class="btn btn-outline-primary">
              </div>
            </div>
						</div>

        </form>
      </div>
      <hr/>
      <table class="small table table-bordered">
        <thead>
          <tr class="small">
            <th class="text-center" rowspan="2" scope="rowgroup" class="text-center">KODE</th>
            <th rowspan="2" scope="rowgroup">Kegiatan</th>
            <th colspan="5" scope="colgroup" class="text-center">SUMBER DANA</th>
            <th class="text-center" rowspan="2" scope="rowgroup"> Vol</th>
            <th class="text-center" rowspan="2" scope="rowgroup"> Satuan</th>
            <th class="text-center" rowspan="2" scope="rowgroup"></th>
          </tr>
          <tr class="small">
            <th class="text-center"> DAU</th>
            <th class="text-center"> DAK</th>
            <th class="text-center"> OTSUS</th>
            <th class="text-center"> PROVINSI</th>
            <th class="text-center"> TOTAL</th>
          <tr/>
        </thead>
        <tbody>
          <tr>
            <?php
            $pro = 0;
            foreach ($hasil2 as $p){
            $pro++;
              echo "<tr>";
              echo "<th class='text-uppercase bg-light' colspan='10' scope='colgroup'>";
              echo $p['program'];
              echo "</th>";
              echo "</tr>";
              $id_program = $p['id_program'];
              $grandtotal = 0;
              $subtotal = 0;
              $no = 0;
              $k = 0;
                foreach ($hasil as $key){
                $k++;
                if($key['id_program']==$id_program){
                  $totalkeg = 0;
                  $no++;
                  echo "<tr>";
                  echo "<td>";
                  echo $key['kode_urusan'] . "." .$key['kode_bidang'] . "." .$key['kode_program'] . "." .$key['kode_kegiatan'];
                  echo "</td>";
                  echo "<td>";
                  echo anchor('econtrolling/detail_renja/'.$key['id_mus_forum_skpd'],
                  $key['kegiatan']);
                  echo "</td>";
                  echo "<td class='text-center'>";
                  echo number_format($key['apbd_dau']) ;
                  echo "</td>";
                  echo "<td class='text-center'>";
                  echo number_format($key['apbd_dak']);
                  echo "</td>";
                  echo "<td class='text-center'>";
                  echo number_format($key['apbd_otsus']);
                  echo "</td>";
                  echo "<td class='text-center'>";
                  echo number_format($key['apbd_provinsi']);
                  echo "</td>";
                  echo "<td>";
                  $totalkeg = $totalkeg+$key['apbd_dau'] + $key['apbd_dak'] + $key['apbd_otsus'] + $key['apbd_provinsi'];
                                  //echo number_format($key['apbd_dau'] + $key['apbd_dak'] + $key['apbd_otsus'] + $key['apbd_provinsi']);
                  echo number_format($totalkeg);
                  echo "</td>";
                  echo "<td class='text-center'>";
                  echo $key['volume'];
                  echo "</td>";
                  echo "<td class='text-center'>";
                  echo $key['satuan'];
                  echo "</td>";

                  echo "<td class='center'>";
                  echo anchor_popup('econtrolling/detail_copy/'.$key['id_mus_forum_skpd'],
                      '<i class="fa fa-exchange xtooltip" title="Copy Renja"></i>');
                  echo "</td>";

                  echo "</tr>";
                  $subtotal = $subtotal + $totalkeg;
                  $totkegiatan =+$no;
                  }
                  $grandtotal = $grandtotal + $totalkeg;
                }
                $totkegsemua =+$k;
                echo "<tr class='small'>";
                echo "<td></td>";
                echo "<td colspan='5'><strong>";
                echo $totkegiatan;
                echo " Kegiatan";
                echo "</strong></td>";
                echo "<td colspan='4'><strong>";
                echo number_format($subtotal);
                echo "</strong></td>";
                echo "</tr>";
                }
              $totpro =+$pro;
              echo "<tr class='small'>";
              echo "<td><strong>";
              echo $totpro;
              echo " Program";
              echo"</strong></td>";
              echo "<td colspan='5'><strong>";
              echo $totkegsemua;
              echo " Kegiatan";
              echo "</strong></td>";
              echo "<td colspan='4'><strong>";
              echo number_format($grandtotal);
              echo "</strong></td>";
              echo "</tr>";
              ?>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>


<script type="text/javascript">
	$(document).ready(function(){
      $('.xtooltip').tooltip();
    });
</script>
