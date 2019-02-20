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
}
