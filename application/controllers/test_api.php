<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class test_api extends CI_Controller{

  public function __construct()
	{
			parent::__construct();
	    $this->load->helper('url');
			$this->load->model('M_apiservices');
	}

  public function index()
  {
    $data['hasil'] = $this->M_apiservices->get_skpd();

    $this->template->load('MasterAdmin','testapi',$data);
  }
  public function rest_pangkalan_minyak()
  {
    $pangkalan = $this->M_apiservices->get_pangkalan_minyak();
    $data['pangkalan'] = $pangkalan;
    $response = array();
    $posts = array();

    foreach($pangkalan as $item)
    {
      $posts[] = array(
        "id_pangkalan"      => $item->id_pangkalan,
        "nama"              => $item->nama,
        "latitude"          => $item->latitude,
        "longitude"         => $item->longitude,
        "status"            => $item->status
      );

    }
    $response['pangkalan'] = $posts;
    header('Content-Type: application/json');
    echo json_encode($response,TRUE);
  }
}
