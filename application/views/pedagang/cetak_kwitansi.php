<script src="<?php echo base_url('assets/libs/js/jquery-1.11.3.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.battatech.excelexport.min.js"></script>
<title><?php echo $title ?></title>
<script type="text/javascript">
	  $(document).ready(function() {
	    $("#cetak").click(function(event) {
	      event.preventDefault();
	      window.print();
	    });
	    $("#export_excel").click(function(event) {
	      event.preventDefault();
	      $("#container").btechco_excelexport({
	        containerid: "container",
	        datatype: $datatype.Table
	      });
	    });
			//window.onload = function() { window.print(); }
	  });
</script>
<style type="text/css">
	body {
		margin: 0px;
		padding: 0px;
	}
	.title {
		text-align: center;
		font-family: Verdana;
		font-weight: bold;
		margin-bottom: 20px;
	}
	.table {
		border-collapse: collapse;
	}
	.table thead {
		font-size: 11px;
		font-weight: bold;
	}
	.table .header td{
		background-color: #C1C1C1;
		text-align: center;
	}
	.table thead td {
		background-color: #EEEEEE;
	}
	.prog {
		background-color: #dddddd;
	}
	.table tr {
		border-collapse: collapse;
	}
	.table td{
		font-size: 12px;
		padding: 5px;
		border-collapse: collapse;
		border: thin solid black;
	}
	.gray {
		background-color: gray;
	}
	.green {
		background-color: green;
	}
	@media print
	{
		.no-print, .no-print *
		{
		    display: none !important;
		}
		body {
    background: none;
    -ms-zoom: 1.665;
  	}
	  div.portrait, div.landscape {
	    margin: 0;
	    padding: 0;
	    border: none;
	    background: none;
	  }
	  div.landscape {
	    transform: rotate(270deg) translate(-276mm, 0);
	    transform-origin: 0 0;
	  }
	}
	.box_export {
	    top: 0px;
	    right: 0px;
	    padding: 10px 0px 10px 0px;
	    background: gray;
	    height: 20px;
	    margin: 0px;
	    margin-bottom: 10px;
	  }
	  .box_export ul {
	    margin: 0px;
	    padding: 0px;
	  }
	  .box_export li {
	    display: inline;
	  }
	  .box_export li a {
	    color: white;
	    text-decoration: none;
	    padding: 0px 10px 0px 10px;
	  }
	  .box_export li a:hover {
	    background-color: green;
	  }
    .lg-text {
      font-size: 20px;
      padding: 5px;
      font-weight: bold;
    }
    .italic-text {
      font-size: 11px;
      font-style: italic;
      padding: 5px;
    }
    .profile-img{
        text-align: center;
    }
    .profile-img img{
        width: 70%;
        height: 100%;
    }
    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        width: 70%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
    }
    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }
		.col-1 {width: 8.33%;}
		.col-2 {width: 16.66%;}
		.col-3 {width: 25%;}
		.col-4 {width: 33.33%;}
		.col-5 {width: 41.66%;}
		.col-6 {width: 50%;}
		.col-7 {width: 58.33%;}
		.col-8 {width: 66.66%;}
		.col-9 {width: 75%;}
		.col-10 {width: 83.33%;}
		.col-11 {width: 91.66%;}
		.col-12 {width: 100%;}
		.header {
    border: 1px solid black;
    padding: 15px;
		}
}

</style>
<?php
function penyebut($nilai) {
	$nilai = abs($nilai);
	$huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
	$temp = "";
	if ($nilai < 12) {
		$temp = " ". $huruf[$nilai];
	} else if ($nilai <20) {
		$temp = penyebut($nilai - 10). " belas";
	} else if ($nilai < 100) {
		$temp = penyebut($nilai/10)." puluh". penyebut($nilai % 10);
	} else if ($nilai < 200) {
		$temp = " seratus" . penyebut($nilai - 100);
	} else if ($nilai < 1000) {
		$temp = penyebut($nilai/100) . " ratus" . penyebut($nilai % 100);
	} else if ($nilai < 2000) {
		$temp = " seribu" . penyebut($nilai - 1000);
	} else if ($nilai < 1000000) {
		$temp = penyebut($nilai/1000) . " ribu" . penyebut($nilai % 1000);
	} else if ($nilai < 1000000000) {
		$temp = penyebut($nilai/1000000) . " juta" . penyebut($nilai % 1000000);
	} else if ($nilai < 1000000000000) {
		$temp = penyebut($nilai/1000000000) . " milyar" . penyebut(fmod($nilai,1000000000));
	} else if ($nilai < 1000000000000000) {
		$temp = penyebut($nilai/1000000000000) . " trilyun" . penyebut(fmod($nilai,1000000000000));
	}
	return $temp;
}

function terbilang($nilai) {
	if($nilai<0) {
		$hasil = "minus ". trim(penyebut($nilai));
	} else {
		$hasil = trim(penyebut($nilai));
	}
	return $hasil;
}
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);

	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun

	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>

<div class="box_export no-print"><ul><li><a href="#" id="cetak">Print</a></li></ul></div>

<div class="title">
	<div class="header">
		<table width="100%" align="left">
			<tr>
        <td rowspan="6" align='center'>
          <img height="70px" width="50px" src="<?php echo base_url()?>assets/images/KabJayapura.png" />
        </td>
      </tr>
			<tr><td colspan='2' align='left'><text>PEMERINTAH KABUPATEN JAYAPURA</text></td></tr>
			<tr><td colspan='2' align='left'><text>Dinas Perindustrian dan Perdagangan</text></td></tr>
			<tr><td colspan='2' align='left'><text class="italic-text">Alamat : Jalan Raya Sentani – Depapre Tlp. (0967) 594710 Sentani</text></td></tr>
		</table>
		<hr/>
		<table width="100%">
			<tr><td colspan='1' align='center'><text><u>Kwitansi Bukti Pembayaran</u></text></td></tr>
		</table>
	</br>
		<?php foreach($hasil as $item){?>
		<table class="table-condesed">
			<tr>
				<td colspan='1' align='left'>Telah Diterima Dari</td>
				<td colspan='1' align='left'> : </td>
				<td colspan='1' align='left'><?php echo $item->nama_pedagang ?></td>
			</tr>
			<tr>
				<td colspan='1' align='left'>Yang Menerima</td>
				<td colspan='1' align='left'> : </td>
				<td colspan='1' align='left'><?php echo $item->nama_petugas ?></td>
			</tr>
			<tr>
				<td colspan='1' align='left'>Uang Sejumlah</td>
				<td colspan='1' align='left'> : </td>
				<td colspan='1' align='left'><?php echo terbilang($item->jumlah) ?> rupiah</td>
			</tr>
			<tr>
				<td colspan='1' align='left'>untuk Pembayaran</td>
				<td colspan='1' align='left'> : </td>
				<td colspan='1' align='left'><?php echo $item->untuk_pembayaran ?></td>
			</tr>
		</table>
	</br>
	</br>
	</br>

	<table widht="50%">
		<tr>
			<td><text class="header">Rp. <?php echo number_format($item->jumlah) ?></text></td>
		</tr>
	</table>
	<table widht="50%" align="right">
		<tr>
			<td>Sentani, <?php echo tgl_indo($item->tanggal) ?></td>
		</tr>
		<tr height="40px"></tr>
		<tr>
			<td align="center"><?php echo $item->nama_petugas ?></td>
		</tr>
	</table>
</br>
</br>
</br>
</br>
</br>
<?php } ?>
	</div>


</div>
