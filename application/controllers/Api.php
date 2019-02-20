<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller{
  public function __construct()
	{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->database();
	    $this->load->helper('url');
			$this->load->model(array('M_petugas','M_api'));
	}

  public function index()
  {
    $petugas = $this->M_petugas->tampil_petugas();
    $data['petugas'] = $petugas;
    $response = array();
    $posts = array();
    foreach ($petugas as $hasil)
    {
        $posts[] = array(
                "id_petugas"     =>  $hasil->id_petugas,
                "nama_lengkap"   =>  $hasil->nama_lengkap,
                "pend"           =>  $hasil->pend,
                "tahun"          =>  $hasil->tahun,
                "uraian_tugas"   => $hasil->uraian_tugas,
                "nama_tempat"    => $hasil->nama_tempat,
            );
        }
    $response['petugas'] = $posts;
    header('Content-Type: application/json');
    echo json_encode($response,TRUE);
  }
  public function rest_users()
  {
    $pengguna = $this->M_api->get_user();
    $data['pengguna'] = $pengguna;
    $response = array();
    $posts = array();
    foreach ($pengguna as $result)
    {
      $posts[] = array(
        'id_user'          =>  $result->id_user,
        'status'           =>  $result->status,
        'nama'             =>  $result->nama,
        'sandi'            =>  $result->sandi,
        'sandi_deskripsi'  =>  $result->sandi_deskripsi,
        'level'            =>  $result->level,
        'email'            =>  $result->email,
        'nama_lengkap'     =>  $result->nama_lengkap,
        'kontak'           =>  $result->kontak,
      );
    }
    $response['pengguna'] = $posts;
    header('Content-Type: application/json');
    echo json_encode($response,TRUE);
  }
}
