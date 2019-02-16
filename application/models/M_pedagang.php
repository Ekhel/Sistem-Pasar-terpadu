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
}
