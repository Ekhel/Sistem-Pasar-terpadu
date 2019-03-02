<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model{
  var $table = 'tb_masuk';
  function tampil_schedule()
  {
    $this->db->join('tb_pangkalan_minyak', 'tb_pangkalan_minyak.id_pangkalan = tb_masuk.id_pangkalan', 'left');
		$this->db->order_by('tb_masuk.id_masuk', 'desc');
    return $this->db->get('tb_masuk')->result();
  }
  function input_laporan($data)
  {
    $this->db->insert($this->table, $data);
  }
  function getlaporan($param = 0)
	{
		return $this->db->get_where('tb_masuk', array('id_masuk' => $param))->row();
	}
  function hapus_laporan($param = 0)
	{
		$laporan = $this->getlaporan($param);
		$this->db->delete('tb_masuk', array('id_masuk' => $param));

    $this->session->set_flashdata("msg","
          <div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Data Pedagang Berhasil Dihapus!</strong>
            <a href='#' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </a>
          </div>");
	}
}
