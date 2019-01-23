<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_petugas extends CI_Model{
  var $table = 'tb_petugaslapangan';

  function tampil_petugas()
  {
    $query = $this->db->query("SELECT *
      FROM tb_petugaslapangan
      LEFT JOIN tb_uraiantugas ON tb_petugaslapangan.id_uraian = tb_uraiantugas.id_uraian
      LEFT JOIN tb_tempat ON tb_petugaslapangan.id_tempat = tb_tempat.id_tempat
      ORDER BY tb_petugaslapangan.id_petugas");

    return $query->result();
  }
  function add($data)
  {
    $this->db->insert($this->table, $data);
  }
}
