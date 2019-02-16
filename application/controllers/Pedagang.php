<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedagang extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_pedagang');
  }
  public function index()
  {
    $data['title'] = 'Data Pedagang';

    $data['result'] = $this->M_pedagang->tampil_pedagang();
    $this->template->load('MasterAdmin','pedagang/tampil_pedagang',$data);
  }
  public function tambah_pedagang()
  {
    $data['title'] = 'Tambah Data Pedagang';
    $this->template->load('MasterAdmin','pedagang/tambah_pedagang',$data);

  }
  function tambah_pedagang_proses()
  {
    $data['nama_pedagang'] = $this->input->post('nama_pedagang');
		$data['block'] = $this->input->post('block');
		$data['no_kios'] = $this->input->post('no_kios');
		$data['status_bangunan'] = $this->input->post('status_bangunan');
		$data['loss'] = $this->input->post('loss');
		$data['jenis_dagangan'] = $this->input->post('jenis_dagangan');
		$data['no_kontak'] = $this->input->post('no_kontak');
		$data['keterangan'] = $this->input->post('keterangan');
		$this->M_pedagang->tambah_pedagang($data);
    $this->session->set_flashdata("msg","
          <div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Berhasil Menambah Data!</strong>
            <a href='#' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </a>
          </div>");
		redirect('Pedagang');
  }
}
