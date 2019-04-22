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

</style>

<div class="box_export no-print"><ul><li><a href="#" id="cetak">Print</a></li></ul></div>
<div id="container">
	<div class="title">
		<table width="100%">
			<tr><td colspan='2' align='center'><text class="lg-text">PEMERINTAH KABUPATEN JAYAPURA</text></td></tr>
      <tr><td colspan='2' align='center'><text class="lg-text">DINAS PERINDUSTRIAN DAN PERDAGANGAN</text></td></tr>
      <tr><td colspan='2' align='center'><text class="italic-text">Alamat : Jalan Raya Sentani – Depapre Tlp. (0967) 594710 Sentani</text></td></tr>
	  </table>
    <hr/>
    <table width="100%">
      <tr><td colspan='2' align='center'>Data Pangkalan Minyak Tanah</td></tr>
    </table>

	</br>
	<table width="100%" class="table" border="1px">
		<thead>
			<tr class="header">
				<td rowspan="2">NO</td>
				<td rowspan="2">Nama Pangkalan</td>
				<td rowspan="2">Pemilik</td>
				<td rowspan="2">No Reg</td>
				<td colspan="3">Lokasi</td>
        <td colspan="2">Spatial</td>
				<td rowspan="2">Status</td>
			</tr>
			<tr class="header">
        <td>Alamat</td>
        <td>Distrik</td>
				<td>Kamp/Kel</td>
        <td>Latitude</td>
				<td>Longitude</td>
			</tr>
		</thead>
    <?php
    $no = 1;
		$i = 0;
    foreach($result as $item){
      if($i >= 0){
				$i++;
				echo "<tr>";
        echo "<td>";
        echo $no++;
        echo "</td>";
        echo "<td>";
        echo $item->nama;
        echo "</td>";
        echo "<td>";
        echo $item->pemilik;
        echo "</td>";
        echo "<td>";
        echo $item->no;
        echo "</td>";
        echo "<td>";
        echo $item->alamat;
        echo "</td>";
        echo "<td>";
        echo $item->nama_distrik;
        echo "</td>";
        echo "<td>";
        echo $item->nama_kampung;
        echo "</td>";
        echo "<td>";
        echo $item->latitude;
        echo "</td>";
        echo "<td>";
        echo $item->longitude;
        echo "</td>";
        echo "<td>";
        echo $item->status;
        echo "</td>";
        echo "</tr>";

      }
      else{
				echo "<div class='center'><h4 class='label label-danger'> BELUM ADA DATA </h4></div>";
      }
    }
    ?>
	</table>
</div>
</div>
