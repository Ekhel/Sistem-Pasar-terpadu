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
    //$id_distrik = $this->input->get('id_distrik');
    //$id_kampung = $this->input->get('id_kampung');
    $query = $this->db->query("SELECT *
      FROM tb_pangkalan_minyak
      LEFT JOIN tb_distrik ON tb_distrik.id_distrik = tb_pangkalan_minyak.id_distrik
      LEFT JOIN tb_kampung ON tb_kampung.id_kampung = tb_pangkalan_minyak.id_kampung
      WHERE tb_pangkalan_minyak.id_distrik AND tb_pangkalan_minyak.id_kampung");

      return $query->result();
  }
  public function getAllPangkalan()
	{
		$id_distrik = $this->input->get('q');
    $this->db->like('tb_pangkalan_minyak.id_distrik', $id_distrik);
    $this->db->join('tb_distrik', 'tb_pangkalan_minyak.id_distrik = tb_distrik.id_distrik', 'left');
    $this->db->join('tb_kampung', 'tb_pangkalan_minyak.id_kampung = tb_kampung.id_kampung', 'left');
		$this->db->order_by('id_pangkalan', 'ASC');
    return $this->db->get('tb_pangkalan_minyak')->result();
	}
  function tambah_pangkalan()
	{
		//$config['upload_path'] = './public/profile/';
		//$config['allowed_types'] = 'gif|jpg|png';
		//$config['max_width']  = 1024*3;
		//$config['max_height']  = 768*3;

	  //$this->upload->initialize($config);

		//if ( ! $this->upload->do_upload('gambar'))
		//{
			//$gambar = "";
			//$this->session->set_flashdata('message', $this->upload->display_errors());
		//} else{
			//$gambar = $this->upload->file_name;
		//}

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
			'gambar' => $image_name
		);
		$this->db->insert('tb_pangkalan_minyak', $object);
		$this->session->set_flashdata('message', "Data Pangkalan Berhasil Ditambahkan");
	}
  function tambah_pangkalan1($nama,$pemilik,$id_distrik,$id_kampung,$no,$alamat,$latitude,$longitude,$penyedia,$tanggal,$status,$keterangan,$image_name)
  {
    $data = array(
      'nama' => $nama,
      'pemilik' => $pemilik,
      'id_distrik' => $id_distrik,
      'id_kampung' => $id_kampung,
      'no' => $no,
      'alamat' => $alamat,
      'latitude' => $latitude,
      'longitude' => $longitude,
      'penyedia' => $penyedia,
      'tanggal_mulai_operasi' => $tanggal,
      'status' => $status,
      'keterangan' => $keterangan,
      'gambar' => $image_name
    );
    $this->db->insert('tb_pangkalan_minyak', $data);
		$this->session->set_flashdata('message', "Data Pangkalan Berhasil Ditambahkan");
  }
  function getdistrik()
  {
    $query = $this->db->query("SELECT * FROM tb_distrik");
    return $query->result();
  }
  function getpangkalan($param = 0)
	{
		return $this->db->get_where('tb_pangkalan_minyak', array('id_pangkalan' => $param))->row();
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
  function edit_pangkalan($param = 0)
  {
    $pangkalan = $this->getpangkalan($param);

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

		$this->db->update('tb_pangkalan_minyak', $object, array('id_pangkalan' => $param));
		$this->session->set_flashdata('message', "Data Pangkalan Berhasil Diubah");
  }
  function hapus_pangkalan($param = 0)
	{
		$pangkalan = $this->getpangkalan($param);

		if( $pangkalan->gambar != '')
			@unlink(".pulbic/profile/{$pangkalan->gambar}");

		$this->db->delete('tb_pangkalan_minyak', array('id_pangkalan' => $param));

    $this->session->set_flashdata("msg","
          <div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Data Pangkalan Berhasil Dihapus!</strong>
            <a href='#' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </a>
          </div>");
	}
  function view_laporan($id_pangkalan,$tb_masuk)
  {
    return $this->db->get_where($tb_masuk,$id_pangkalan);
  }

}
