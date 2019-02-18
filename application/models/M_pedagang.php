<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pedagang extends CI_Model{
  var $table = 'tb_kios';
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
}
