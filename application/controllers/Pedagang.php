<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedagang extends CI_Controller {




  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_pedagang');
    $this->load->library('form_validation');
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



  function hapus_pedagang($param = 0)
	{
		$this->M_pedagang->hapus_pedagang($param);
		redirect('Pedagang');
	}



  public function edit_pedagang($param = 0)
  {
    $this->data['title'] = "Edit Data Pedagang";

    $this->form_validation->set_rules('nama_pedagang', 'nama_pedagang', 'trim|required');
    $this->form_validation->set_rules('block', 'block', 'trim|required');
    $this->form_validation->set_rules('no_kios', 'no_kios', 'trim|required');
    $this->form_validation->set_rules('status_bangunan', 'status_bangunan', 'trim|required');
    $this->form_validation->set_rules('loss', 'loss', 'trim|required');
    $this->form_validation->set_rules('jenis_dagangan', 'jenis_dagangan', 'trim|required');
    $this->form_validation->set_rules('no_kontak', 'no_kontak', 'trim|required');
    $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
    if ($this->form_validation->run() == TRUE)
    {
      $this->M_pedagang->editpedagang();

      redirect(current_url());
    }
    $this->data['pedagang'] = $this->M_pedagang->getpedagang($param);
    $this->template->load('MasterAdmin','pedagang/edit_pedagang',$this->data);
  }




  public function kwitansi()
  {
    $data['title'] = 'Admin | Kwitansi Pajak';
    $data['kwitansi'] = $this->M_pedagang->kwitansi();

    $this->template->load('MasterAdmin','pedagang/kwitansi',$data);
  }


  public function filter_kwitansi()
  {
    $data['title'] = 'Admin | Filter Kwitansi Pajak';
    $data['filter_kwitansi'] = $this->M_pedagang->filter_kwitansi();

    $this->template->load('MasterAdmin','pedagang/filter_kwitansi',$data);
  }




  public function tambah_kwitansi()
  {
    $data['title'] = 'Admin | Tambah Kwitansi';
    $data['kios'] = $this->db->query("SELECT * FROM tb_kios")->result();
    $this->template->load('MasterAdmin','pedagang/tambah_kwitansi',$data);
  }




  function tambah_kwitansi_proses()
  {
    $data['id_kios'] = $this->input->post('id_kios');
		$data['nama_petugas'] = $this->input->post('nama_petugas');
		$data['jumlah'] = $this->input->post('jumlah');
		$data['untuk_pembayaran'] = $this->input->post('untuk_pembayaran');
		$data['tanggal'] = $this->input->post('tanggal');
		$this->M_pedagang->tambah_kwitansi($data);
    $this->session->set_flashdata("msg","
          <div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Berhasil Menambah Data!</strong>
            <a href='#' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </a>
          </div>");
		redirect('Pedagang/kwitansi');
  }



  public function cetak_kwitansi($id_kwitansi = null)
  {
    $data['title'] = 'cetak kwitansi';
    $where = array('id_kwitansi' => $id_kwitansi);
    $data['hasil'] = $this->M_pedagang->detail_kwitansi($this->uri->segment(3));
    $this->load->view('Pedagang/cetak_kwitansi',$data);
  }




}
