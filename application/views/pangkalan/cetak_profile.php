<script src="<?php echo base_url('assets/libs/js/jquery-1.11.3.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.battatech.excelexport.min.js"></script>
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
			window.onload = function() { window.print(); }
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

</style>
<title><?php echo $title ?></title>
<div class="box_export no-print"><ul><li><a href="#" id="cetak">Print</a></li><li><a href="#" id="export_excel"></a></li></ul></div>
<div id="container">
	<?php foreach($hasil as $d){ ?>
	<div class="title">
		<table width="100%">
      <tr>
        <td colspan='2' align='center'>
          <img height="80px" width="60px" src="<?php echo base_url()?>assets/images/KabJayapura.png" />
        </td>
      </tr>
			<tr><td colspan='2' align='center'><text class="lg-text">PEMERINTAH KABUPATEN JAYAPURA</text></td></tr>
      <tr><td colspan='2' align='center'><text class="lg-text">DINAS PERINDUSTRIAN DAN PERDAGANGAN</text></td></tr>
      <tr><td colspan='2' align='center'><text class="italic-text">Alamat : Jalan Raya Sentani – Depapre Tlp. (0967) 594710 Sentani</text></td></tr>
	  </table>
    <hr/>
    <br/>
    <table width="100%">
      <tr><td colspan='2' align='center'>PROFILE DATA PANGKALAN MINYAK</td></tr>
    </table>
    <br/>
    <br/>
    <table width="100%" class="table" border="2px">
      <tr>
          <td width="300px">QR</td>
          <td width="10px"> :</td>
          <td height="200px">
            <img align="center" height="180" width="180" src="<?php echo base_url()?>public/profile/<?php echo $d->gambar ?>" alt=""/>
          </td>
      </tr>
      <tr>
          <td width="300px">Nama Pangkalan</td>
          <td width="10px"> :</td>
          <td><?php echo $d->nama ?></td>
      </tr>
      <tr>
          <td width="300px">Pemilik Pangkalan</td>
          <td width="10px"> :</td>
          <td><text><?php echo $d->pemilik ?></text> </td>
      </tr>
			<tr>
          <td width="300px">No Registrasi</td>
          <td width="10px"> :</td>
          <td><text><?php echo $d->no ?></text> </td>
      </tr>
      <tr>
          <td width="300px">Alamat</td>
          <td width="10px"> : </td>
          <td><?php echo $d->alamat ?> </td>
      </tr>
      <tr>
          <td width="300px">Distrik</td>
          <td width="10px"> : </td>
          <td><?php echo $d->nama_distrik ?> </td>
      </tr>
      <tr>
          <td width="300px">Kampung</td>
          <td width="10px"> : </td>
          <td><?php echo $d->nama_kampung ?> </td>
      </tr>
      <tr>
          <td width="300px">Referensi Spatial</td>
          <td width="10px"> : </td>
          <td><?php echo $d->latitude ?> ,  <?php echo $d->longitude ?></td>
      </tr>
      <tr>
          <td width="300px">Tanggal Mulai Operasi</td>
          <td width="10px"> : </td>
          <td><text><?php echo $d->tanggal_mulai_operasi ?></text> </td>
      </tr>
      <tr>
          <td width="300px">Penyedia</td>
          <td width="10px"> : </td>
          <td><?php echo $d->penyedia ?> </td>
      </tr>
      <tr>
          <td width="300px">Status</td>
          <td width="10px"> : </td>
          <td><?php echo $d->status ?> </td>
      </tr>
      <tr>
          <td width="300px">Keterangan</td>
          <td width="10px"> :</td>
          <td> <?php echo $d->keterangan ?> </td>
      </tr>
    </table>
</div>
<?php } ?>
