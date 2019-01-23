<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->database();
    $this->load->helper('url');
    $this->load->model('M_petugas');
  }

  public function index()
  {
    $data['title'] = 'Daftar Petugas';
    $data['hasil'] = $this->M_petugas->tampil_petugas();
    $data['uraian'] = $this->db->query("SELECT * FROM tb_uraiantugas ORDER BY tb_uraiantugas.id_uraian")->result();
    $data['tempat'] = $this->db->query("SELECT * FROM tb_tempat ORDER BY tb_tempat.id_tempat")->result();

    $this->template->load('MasterAdmin','petugas/daftar_petugas',$data);
  }

  public function tambah_petugas()
  {
    $data['nama_lengkap'] = $this->input->post('nama_lengkap');
    $data['pend'] = $this->input->post('pend');
    $data['tahun'] = $this->input->post('tahun');
    $data['id_uraian'] = $this->input->post('id_uraian');
    $data['id_tempat'] = $this->input->post('id_tempat');
    $this->M_petugas->add($data);
    $this->session->set_flashdata("msg","
          <div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Berhasil Menyimpan Data!</strong>
            <a href='#' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </a>
          </div>");
    redirect('petugas');
  }
  public function edit_petugas()
  {
    $act = $this->input->post('act');
    $id_petugas = $this->input->post('id_petugas');
    $nama_lengkap = $this->input->post('nama_lengkap');
    $pend = $this->input->post('pend');
    $tahun = $this->input->post('tahun');
    $id_uraian = $this->input->post('id_uraian');
    $id_tempat = $this->input->post('id_tempat');
    if($act=='edit'){
      $edit = $this->db->query("UPDATE tb_petugaslapangan SET nama_lengkap='$nama_lengkap', pend='$pend', tahun='$tahun', id_uraian='$id_uraian',id_tempat='$id_tempat' WHERE id_petugas ='$id_petugas' ");
      if($edit){
	      $this->session->set_flashdata("msg","
              <div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Berhasil Mengedit Data!</strong>
                <a href='#' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </a>
              </div>");
	     }
       else{
	      $this->session->set_flashdata("msg","
              <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>Gagal Mengedit Data!</strong>
                <a href='#' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </a>
              </div>");
	       }
     redirect('petugas');
    }
  }
  public function hapus_petugas($id_petugas)
  {
    if (isset($id_petugas) && !empty($id_petugas)) {
			$hapus = $this->db->query("DELETE FROM tb_petugaslapangan WHERE id_petugas='$id_petugas' ");
			if($hapus){
				$this->session->set_flashdata("msg","
              <div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Berhasil Menghapus Data!</strong>
                <a href='#' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </a>
              </div>");
			}
			redirect('petugas');
		}else $this->error();
  }
}
