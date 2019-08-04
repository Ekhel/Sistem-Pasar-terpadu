<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class TestApi extends REST_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('M_testapi');
  }
  public function index_get()
  {
    $kategori = $this->db->query('SELECT * FROM tb_kategori')->result();

    //foreach($kategori as $item)
    //{
      //$posts[] = array(
        //"id_kategori"       =>  $item->id_kategori,
        //"nama"              =>  $item->nama,
        //"keterangan"        =>  $item->keterangan,
      //);
    //}

    $response['status'] = 200;
    $response['error'] = false;
    $response['result'] = $kategori;

    $this->response($response);
  }
  public function add_post()
  {
    $data = array(
      'id_kategori' => $this->post('id_kategori'),
      'kategori' => $this->post('kategori'),
      'keterangan' => $this->post('keterangan')
    );
    $this->M_testapi->add_kategori($data);

    $response['status'] = 200;
    $response['error'] = false;
    $response['message'] = 'Data Telah Disimpan';

    $this->response($response);
  }
  public function hapus_delete($param = 0)
  {
    $hapus = $this->M_testapi->hapus_kategori($param);

    $response['status'] = 200;
    $response['error'] = false;
    $response['message'] = 'Item Telah dihapus';
    $this->response($response);
  }
}
