<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pedagang extends CI_Model{
  var $table = 'tb_kios';
  var $kwitansi = 'tb_kwitansi';
  
  function tampil_pedagang()
  {
    $query = $this->db->query("SELECT * FROM tb_kios");
    return $query->result();
  }


  function tambah_pedagang($data){
		$this->db->insert($this->table, $data);
	}


  function getpedagang($param = 0)
	{
		return $this->db->get_where('tb_kios', array('id_kios' => $param))->row();
	}


  function hapus_pedagang($param = 0)
	{
		$pangkalan = $this->getpedagang($param);
		$this->db->delete('tb_kios', array('id_kios' => $param));

    $this->session->set_flashdata("msg","
          <div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Data Pangkalan Berhasil Dihapus!</strong>
            <a href='#' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </a>
          </div>");
	}

  function editpedagang($param = 0)
  {
    $pedagang = $this->getpedagang($param);
		$object = array(
			'nama_pedagang' => $this->input->post('nama_pedagang'),
			'block' => $this->input->post('block'),
			'no_kios' => $this->input->post('no_kios'),
			'status_bangunan' => $this->input->post('status_bangunan'),
			'loss' => $this->input->post('loss'),
      'jenis_dagangan' => $this->input->post('jenis_dagangan'),
      'no_kontak' => $this->input->post('no_kontak'),
      'keterangan' => $this->input->post('keterangan')
		);

		$this->db->update('tb_kios', $object, array('id_kios' => $param));
		$this->session->set_flashdata('message', "Data Pedagang Berhasil Diubah");
  }


  function kwitansi()
  {
    $query = $this->db->query("SELECT *
      FROM tb_kwitansi
      LEFT JOIN tb_kios ON tb_kwitansi.id_kios = tb_kios.id_kios");
    return $query->result();
  }

  function filter_kwitansi()
  {
    $tanggal = $_GET['tanggal'];

    $query = $this->db->query("SELECT *
      FROM tb_kwitansi
      LEFT JOIN tb_kios ON tb_kwitansi.id_kios = tb_kios.id_kios
      WHERE tb_kwitansi.tanggal = '$tanggal'");

    return $query->result();

  }

  function tambah_kwitansi($data){
		$this->db->insert($this->kwitansi, $data);
	}

  function detail_kwitansi($id_kwitansi)
  {
    $query = $this->db->query("SELECT *
      FROM tb_kwitansi
      LEFT JOIN tb_kios ON tb_kwitansi.id_kios = tb_kios.id_kios
      WHERE tb_kwitansi.id_kwitansi = '$id_kwitansi'");

      return $query->result();
  }


}
