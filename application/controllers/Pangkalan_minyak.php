<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pangkalan_minyak extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_pangkalan');
    $this->load->library(array('googlemaps','session','form_validation','ciqrcode'));
  }
  public function index()
  {
    $data['title'] = 'Data Pangkalan Minyak';
    //$data['result'] = $this->M_pangkalan->tampil_pangkalan($id_distrik,$id_kampung);
    $data['result'] = $this->M_pangkalan->getAllPangkalan();
    $data['distrik'] = $this->M_pangkalan->getdistrik();
    $this->template->load('MasterAdmin','pangkalan/tampil_pangkalan',$data);
  }

  function getkampung($id_distrik)
  {
    $result = $this->db->where("id_distrik",$id_distrik)->get("tb_kampung")->result();
    echo json_encode($result);
  }

  public function tambah_pangkalan()
  {
    $this->data['title'] = "Tambah Pangkalan Minyak Tanak";
    $this->data['distrik'] = $this->M_pangkalan->getdistrik();

    $config['map_div_id'] = "map-add";
		$config['map_height'] = "250px";
		$config['center'] = '-2.5588092, 140.4749569';
		$config['zoom'] = '12';
		$config['map_height'] = '300px;';
		$this->googlemaps->initialize($config);

		$marker = array();
		$marker['position'] = '-2.5588092, 140.4749569';
		$marker['draggable'] = true;
		$marker['ondragend'] = 'setMapToForm(event.latLng.lat(), event.latLng.lng());';
		$this->googlemaps->add_marker($marker);
		$this->data['map'] = $this->googlemaps->create_map();

    $this->template->load('MasterAdmin','pangkalan/tambah_pangkalan', $this->data);
  }

  function tambah_pangkalan_proses()
  {
    //qrcode --Start
    $nama=$this->input->post('nama');
		$pemilik=$this->input->post('pemilik');
		$id_distrik=$this->input->post('id_distrik');
    $id_kampung=$this->input->post('id_kampung');
		$no=$this->input->post('no');
		$alamat=$this->input->post('alamat');
    $latitude=$this->input->post('latitude');
		$longitude=$this->input->post('longitude');
    $penyedia=$this->input->post('penyedia');
		$tanggal=$this->input->post('tanggal_mulai_operasi');
    $status=$this->input->post('status');
		$keterangan=$this->input->post('keterangan');

    $con['cacheable']	= true; //boolean, the default is true
		$con['cachedir']		= './assets/'; //string, the default is application/cache/
		$con['errorlog']		= './assets/'; //string, the default is application/logs/
		$con['imagedir']		= './public/profile/'; //direktori penyimpanan qr code
		$con['quality']		= true; //boolean, the default is true
		$con['size']			= '1024'; //interger, the default is 1024
		$con['black']		= array(224,255,255); // array, default is array(255,255,255)
		$con['white']		= array(70,130,180); // array, default is array(0,0,0)
		$this->ciqrcode->initialize($con);

		$image_name=$nama.'.png'; //buat name dari qr code sesuai dengan nim
		$params['data'] = $nama; //data yang akan di jadikan QR CODE
		$params['level'] = 'H'; //H=High
		$params['size'] = 10;
		$params['savename'] = FCPATH.$con['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
		$this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

    $this->M_pangkalan->tambah_pangkalan1($nama,$pemilik,$id_distrik,$id_kampung,$no,$alamat,$latitude,$longitude,$penyedia,$tanggal,$status,$keterangan,$image_name);

    redirect('Pangkalan_minyak');
  }

  public function peta_pangkalan()
  {
    $this->data['distrik'] = $this->M_pangkalan->getdistrik();
    $this->data['title'] = "Peta Pangkalan Minyak";
    //$config['kmlLayerURL'] = 'http://filemanager.bappeda.jayapurakab.go.id/repository/PENLAP/KML/ADMIN_KAMPUNG_MONITORING.kml';
		$config['center'] = '-2.5588092, 140.4749569';
		$config['zoom'] = '10';
		$config['styles'] = array(
		  	array(
		  		"name"=>"No Businesses",
		  		"definition"=> array(
		   			array(
		   				"featureType"=>"poi",
		   				"elementType" =>
		   				"business",
		   				"stylers"=> array(
		   					array(
		   						"visibility"=>"off"
		   					)
		   				)
		   			)
		  		)
		  	)
		);
		$this->googlemaps->initialize($config);
		foreach($this->data_pangkalan() as $key => $value) :
		$marker = array();
		$marker['position'] = "{$value->latitude}, {$value->longitude}";

    $marker['animation'] = 'DROP';
		$marker['infowindow_content'] = '<div class="media" style="width:600px;">';
		$marker['infowindow_content'] .= '<div class="media-left">';
		$marker['infowindow_content'] .= '<img src="'.base_url("assets/images/{$value->gambar}").'" class="media-object" style="width:250px">';
		$marker['infowindow_content'] .= '</div>';
		$marker['infowindow_content'] .= '<div class="media-body">';
		$marker['infowindow_content'] .= '<table class="table table-bordered table-sm">';
		$marker['infowindow_content'] .= '<tr class="small">';
		$marker['infowindow_content'] .= '<td>';
		$marker['infowindow_content'] .= 'Nama';
		$marker['infowindow_content'] .= '</td>';
		$marker['infowindow_content'] .= '<td>';
		$marker['infowindow_content'] .= '<strong><a href="'.base_url("Pangkalan_minyak/profile_pangkalan/{$value->id_pangkalan}").'"target="_blank">'.$value->nama.'</strong></a>';
		$marker['infowindow_content'] .= '</td>';
		$marker['infowindow_content'] .= '</tr>';
		$marker['infowindow_content'] .= '<tr class="small">';
		$marker['infowindow_content'] .= '<td>';
		$marker['infowindow_content'] .= 'Pemilik';
		$marker['infowindow_content'] .= '</td>';
		$marker['infowindow_content'] .= '<td>';
		$marker['infowindow_content'] .= '<strong>' .$value->pemilik.'<strong>';
		$marker['infowindow_content'] .= '</td>';
		$marker['infowindow_content'] .= '</tr>';
    $marker['infowindow_content'] .= '<tr class="small">';
		$marker['infowindow_content'] .= '<td>';
		$marker['infowindow_content'] .= 'No Reg';
		$marker['infowindow_content'] .= '</td>';
		$marker['infowindow_content'] .= '<td>';
		$marker['infowindow_content'] .= '<strong>' .$value->no.'<strong>';
		$marker['infowindow_content'] .= '</td>';
		$marker['infowindow_content'] .= '</tr>';
    $marker['infowindow_content'] .= '<tr class="small">';
		$marker['infowindow_content'] .= '<td>';
		$marker['infowindow_content'] .= 'Penyedia';
		$marker['infowindow_content'] .= '</td>';
		$marker['infowindow_content'] .= '<td>';
		$marker['infowindow_content'] .= '<strong>' .$value->penyedia.'<strong>';
		$marker['infowindow_content'] .= '</td>';
		$marker['infowindow_content'] .= '</tr>';
		$marker['infowindow_content'] .= '<tr class="small">';
		$marker['infowindow_content'] .= '<td>';
		$marker['infowindow_content'] .= 'Distrik';
		$marker['infowindow_content'] .= '</td>';
		$marker['infowindow_content'] .= '<td>';
		$marker['infowindow_content'] .= '<strong>' .$value->nama_distrik.'<strong>';
		$marker['infowindow_content'] .= '</td>';
		$marker['infowindow_content'] .= '</tr>';
    $marker['infowindow_content'] .= '<tr class="small">';
		$marker['infowindow_content'] .= '<td>';
		$marker['infowindow_content'] .= 'Kampung/Kel';
		$marker['infowindow_content'] .= '</td>';
		$marker['infowindow_content'] .= '<td>';
		$marker['infowindow_content'] .= '<strong>' .$value->nama_kampung .'<strong>';
		$marker['infowindow_content'] .= '</td>';
		$marker['infowindow_content'] .= '</tr>';
    $marker['infowindow_content'] .= '<tr class="small">';
		$marker['infowindow_content'] .= '<td>';
		$marker['infowindow_content'] .= 'Status';
		$marker['infowindow_content'] .= '</td>';
		$marker['infowindow_content'] .= '<td>';
		$marker['infowindow_content'] .= '<strong>' .$value->status.'<strong>';
		$marker['infowindow_content'] .= '</td>';
		$marker['infowindow_content'] .= '</tr>';
		$marker['infowindow_content'] .= '</table>';
		$marker['infowindow_content'] .= '</div>';
		$marker['infowindow_content'] .= '</div>';
		$marker['icon'] = base_url("assets/images/market.png");
		$this->googlemaps->add_marker($marker);
		endforeach;

    $this->googlemaps->initialize($config);
		$this->data['map'] = $this->googlemaps->create_map();
		$this->template->load('MasterAdmin','pangkalan/maps_pangkalan', $this->data);
  }

  function data_pangkalan()
  {
    $id_distrik = $this->input->get('q');
    $this->db->like('tb_pangkalan_minyak.id_distrik', $id_distrik);
    $this->db->join('tb_distrik', 'tb_pangkalan_minyak.id_distrik = tb_distrik.id_distrik', 'left');
    $this->db->join('tb_kampung', 'tb_pangkalan_minyak.id_kampung = tb_kampung.id_kampung', 'left');
		$this->db->order_by('id_pangkalan', 'desc');
    return $this->db->get('tb_pangkalan_minyak')->result();
  }

  //function data_pangkalan($id_distrik = 0, $id_kampung = 0)
  //{
      //$query = $this->db->query("SELECT *
      //FROM tb_pangkalan_minyak
      //LEFT JOIN tb_distrik ON tb_distrik.id_distrik = tb_pangkalan_minyak.id_distrik
      //LEFT JOIN tb_kampung ON tb_kampung.id_kampung = tb_pangkalan_minyak.id_kampung
      //WHERE tb_pangkalan_minyak.id_distrik = '$id_distrik' AND tb_pangkalan_minyak.id_kampung = '$id_kampung'");

      //return $query->result();
  //}

  public function profile_pangkalan($id_pangkalan = null)
  {
    $where = array('id_pangkalan' => $id_pangkalan);
    $data['title'] = 'Profile Agent pangkalan';
    $data['result'] = $this->M_pangkalan->detail_pangkalan($this->uri->segment(3));
    $data['lap'] = $this->M_pangkalan->view_laporan($where,'tb_masuk')->result();
    $this->template->load('MasterAdmin','pangkalan/profile_pangkalan',$data);
  }
  public function print_data($id_pangkalan = null)
  {
    $where = array('id_pangkalan' => $id_pangkalan);
    $data['title'] = 'Cetak';
    $data['hasil'] = $this->M_pangkalan->detail_pangkalan($this->uri->segment(3));
    $this->load->view('pangkalan/cetak_profile',$data);
  }
  public function edit_pangkalan($param = 0)
	{
		$this->data['title'] = "Edit Data Pangkalan Minyak Tanah";
    $this->data['distrik'] = $this->M_pangkalan->getdistrik();

    $this->form_validation->set_rules('nama', 'nama', 'trim|required');
    $this->form_validation->set_rules('pemilik', 'pemilik', 'trim|required');
    $this->form_validation->set_rules('id_distrik', 'id_distrik', 'trim|required');
    $this->form_validation->set_rules('id_kampung', 'id_kampung', 'trim|required');
    $this->form_validation->set_rules('no', 'no', 'trim|required');
    $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
    $this->form_validation->set_rules('latitude', 'latitude', 'trim|required');
    $this->form_validation->set_rules('longitude', 'longitude', 'trim|required');
    $this->form_validation->set_rules('tanggal_mulai_operasi', 'tanggal_mulai_operasi', 'trim|required');
    $this->form_validation->set_rules('status', 'status', 'trim|required');
    $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');

    if ($this->form_validation->run() == TRUE)
    {
      $this->M_pangkalan->edit_pangkalan();

      redirect(current_url());
    }

    $this->data['pangkalan'] = $this->M_pangkalan->getpangkalan($param);

    $config['map_div_id'] = "map-add";
		$config['map_height'] = "250px";
		$config['center'] = '-2.5588092, 140.4749569';
		$config['zoom'] = '12';
		$config['map_height'] = '300px;';
		$this->googlemaps->initialize($config);

		$marker = array();
		$marker['position'] = '-2.5588092, 140.4749569';
		$marker['draggable'] = true;
		$marker['ondragend'] = 'setMapToForm(event.latLng.lat(), event.latLng.lng());';
		$this->googlemaps->add_marker($marker);
		$this->data['map'] = $this->googlemaps->create_map();

		$this->template->load('MasterAdmin','pangkalan/edit_pangkalan', $this->data);
	}
  public function hapus_pangkalan($param = 0)
	{
		$this->M_pangkalan->hapus_pangkalan($param);

		redirect('Pangkalan_minyak');
	}
  public function print()
  {
    $data['title'] = 'DATA PANGKALAN MINYAK TANAH';
    $data['result'] = $this->M_pangkalan->tampil_pangkalan();
    $this->load->view('pangkalan/print_datapangkalan',$data);
  }
  public function scan_qr()
  {
    $data['title'] = 'Scan QR';
    $this->template->load('MasterAdmin','pangkalan/scan_qr',$data);
  }
}
