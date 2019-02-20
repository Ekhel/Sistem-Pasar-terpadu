<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
  public function __construct()
	{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->database();
	    $this->load->helper('url');
			$this->load->model(array('M_admin','M_kampung'));
	}

  public function index()
  {
    $data['title'] = 'Admin | Pegawai';
    $data['hasil'] = $this->M_admin->tampil_pegawai();
    $data['bidang'] = $this->db->query("SELECT * FROM tb_bidang ORDER BY id_bidang")->result();
    $data['status'] = $this->db->query("SELECT * FROM tb_status ORDER BY id_status")->result();
    $this->template->load('MasterAdmin','admin/pegawai',$data);
  }

  function getjabatan($id_bidang)
  {
    $result = $this->db->where("id_bidang",$id_bidang)->get("tb_jabatan")->result();
    echo json_encode($result);
  }

  public function tambah_pegawai()
  {

    $this->load->view('admin/tambah_pegawai',$data);
  }

  public function tambah_pegawai_proses()
  {
    $data['id_pegawai'] = $this->input->post('id_pegawai');
    $data['nama_lengkap'] = $this->input->post('nama_lengkap');
    $data['nama_panggilan'] = $this->input->post('nama_panggilan');
    $data['id_status'] = $this->input->post('id_status');
    $data['id_bidang'] = $this->input->post('id_bidang');
    $data['id_jabatan'] = $this->input->post('id_jabatan');
    $this->M_admin->add_pegawai($data);
    $this->session->set_flashdata("msg","
							<div class='alert alert-success fade in'>
									<a href='#' class='close' data-dismiss='alert'>&times;</a>
									<strong>Success !</strong> Berhasil Menyimpan Data!
							</div>");
    redirect('admin');
  }

  public function edit_pegawai_proses()
  {
    $act = $this->input->post('act');
    $id_pegawai = $this->input->post('id_pegawai');
    $nama_lengkap = $this->input->post('nama_lengkap');
    $nama_panggilan = $this->input->post('nama_panggilan');
    $id_status = $this->input->post('id_status');
    $id_bidang = $this->input->post('id_bidang');
    $id_jabatan = $this->input->post('id_jabatan');
    if($act=='edit'){
      $edit = $this->db->query("UPDATE tb_pegawai SET nama_lengkap='$nama_lengkap', nama_panggilan='$nama_panggilan', id_status='$id_status', id_bidang='$id_bidang',id_jabatan='$id_jabatan' WHERE id_pegawai ='$id_pegawai' ");
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
     redirect('admin');
    }
  }
  public function hapus_pegawai_proses($id_pegawai)
  {
    if (isset($id_pegawai) && !empty($id_pegawai)) {
			$hapus = $this->db->query("DELETE FROM tb_pegawai WHERE id_pegawai='$id_pegawai' ");
			if($hapus){
				$this->session->set_flashdata("msg","<div class='alert alert-success alert-dismissible fade show' role='alert'>
          <strong>Berhasil Menghapus Data!</strong>
          <a href='#' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
          </a>
        </div>");
			}
			redirect('admin');
		}else $this->error();
  }

  public function uraian_tugas()
  {
    $data['title'] = 'Uraian Tugas';
    $data['hasil'] = $this->db->query("SELECT * FROM tb_uraiantugas ORDER BY tb_uraiantugas.id_uraian")->result();
    $data['tempat'] = $this->db->query("SELECT * FROM tb_tempat ORDER BY tb_tempat.id_tempat")->result();
    $this->template->load('MasterAdmin','admin/uraiantempat',$data);
  }
  public function Kampung()
  {
    $data['title'] = 'Daftar Nama Kampung';
    $data['result'] = $this->M_kampung->tampil_kampung();
    $this->template->load('MasterAdmin','admin/kampung',$data);
  }
}
