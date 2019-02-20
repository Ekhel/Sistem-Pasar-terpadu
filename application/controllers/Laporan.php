<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_laporan');
    $this->load->library(array('googlemaps','session','form_validation'));
  }
  public function index()
  {
    $data['title'] = 'Jadwal Pengantaran Minyak Tanah';
    $data['result'] = $this->M_laporan->tampil_schedule();

    $this->template->load('MasterAdmin','laporan/tampil_schedule',$data);
  }
  public function input_laporan()
  {
    $data['title'] = 'Input Laporan';
    $data['pangkalan'] = $this->db->query("SELECT * FROM tb_pangkalan_minyak")->result();
    $this->template->load('MasterAdmin','laporan/input_laporan',$data);
  }
  function input_laporan_proses()
  {
    $data['id_pangkalan'] = $this->input->post('id_pangkalan');
		$data['tanggal'] = $this->input->post('tanggal');
		$data['liter'] = $this->input->post('liter');
		$data['drum'] = $this->input->post('drum');
		$data['penyedia'] = $this->input->post('penyedia');
		$this->M_laporan->input_laporan($data);
    $this->session->set_flashdata("msg","
          <div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Berhasil Menambah Data!</strong>
            <a href='#' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </a>
          </div>");
		redirect('Laporan');
  }
}
