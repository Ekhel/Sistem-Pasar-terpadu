<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_uraiantugas extends CI_Model{

  function tampil_tempat()
  {
    $query = $this->db->query("SELECT *
    FROM tb_uraiantugas ORDER BY tb_uraiantugas.id_uraian");

    if($query->num_rows() > 0){
        foreach($query->result() as $data){
            $hasil[] = $data;
        }
    return $hasil;
  }

}
