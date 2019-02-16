<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pangkalan_minyak extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_pangkalan');
    $this->load->library(array('googlemaps','session','form_validation'));
  }
  public function index()
  {
    $data['title'] = 'Data Pangkalan Minyak';
    $data['result'] = $this->M_pangkalan->tampil_pangkalan();
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
			$this->M_pangkalan->tambah_pangkalan();

			redirect(current_url());
		}

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

  public function peta_pangkalan()
  {
    $this->data['title'] = "Peta Pangkalan Minyak";
		$config['center'] = '-2.5588092, 140.4749569';
		$config['zoom'] = '13';
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
		$marker['infowindow_content'] .= '<strong><a href="'.base_url("Pangkalan_minyak/profile_pangkalan/{$value->id_pangkalan}").'">'.$value->nama.'</strong></a>';
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
      $query = $this->db->query("SELECT *
      FROM tb_pangkalan_minyak
      LEFT JOIN tb_distrik ON tb_distrik.id_distrik = tb_pangkalan_minyak.id_distrik
      LEFT JOIN tb_kampung ON tb_kampung.id_kampung = tb_pangkalan_minyak.id_kampung
      ORDER BY tb_pangkalan_minyak.id_pangkalan");

      return $query->result();
  }

  public function profile_pangkalan()
  {
    $data['title'] = 'Profile Agent pangkalan';
    $data['result'] = $this->M_pangkalan->detail_pangkalan($this->uri->segment(3));

    $this->template->load('MasterAdmin','pangkalan/profile_pangkalan',$data);
  }
  
}
