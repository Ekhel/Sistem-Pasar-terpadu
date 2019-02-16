<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pangkalan extends CI_Model{
  var $table = 'tb_pangkalan_minyak';

  public function __construct()
	{
		parent::__construct();

		$this->load->library(array('upload','session'));
	}
  function tampil_pangkalan()
  {
    $query = $this->db->query("SELECT *
      FROM tb_pangkalan_minyak
      LEFT JOIN tb_distrik ON tb_distrik.id_distrik = tb_pangkalan_minyak.id_distrik
      LEFT JOIN tb_kampung ON tb_kampung.id_kampung = tb_pangkalan_minyak.id_kampung
      ORDER BY tb_pangkalan_minyak.id_pangkalan");

      return $query->result();
  }
  function tambah_pangkalan()
	{
		$config['upload_path'] = './public/profile/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_width']  = 1024*3;
		$config['max_height']  = 768*3;

		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('gambar'))
		{
			$gambar = "";
			$this->session->set_flashdata('message', $this->upload->display_errors());
		} else{
			$gambar = $this->upload->file_name;
		}

		$object = array(
			'nama' => $this->input->post('nama'),
			'pemilik' => $this->input->post('pemilik'),
			'id_distrik' => $this->input->post('id_distrik'),
			'id_kampung' => $this->input->post('id_kampung'),
			'no' => $this->input->post('no'),
      'alamat' => $this->input->post('alamat'),
      'latitude' => $this->input->post('latitude'),
      'longitude' => $this->input->post('longitude'),
      'penyedia' => $this->input->post('penyedia'),
      'tanggal_mulai_operasi' => $this->input->post('penyedia'),
      'status' => $this->input->post('status'),
      'keterangan' => $this->input->post('keterangan'),
			'gambar' => $gambar
		);
		$this->db->insert('tb_pangkalan_minyak', $object);
		$this->session->set_flashdata('message', "Data Pangkalan Berhasil Ditambahkan");
	}
  function getdistrik()
  {
    $query = $this->db->query("SELECT * FROM tb_distrik");
    return $query->result();
  }
  function detail_pangkalan($id_pangkalan)
  {
    $query = $this->db->query("SELECT *
      FROM tb_pangkalan_minyak
      LEFT JOIN tb_distrik ON tb_distrik.id_distrik = tb_pangkalan_minyak.id_distrik
      LEFT JOIN tb_kampung ON tb_kampung.id_kampung = tb_pangkalan_minyak.id_kampung
      WHERE tb_pangkalan_minyak.id_pangkalan = '$id_pangkalan'");

      return $query->result();
  }
}
