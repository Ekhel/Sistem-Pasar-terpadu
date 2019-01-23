<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tempat extends CI_Model{

  function tampil_tempat()
  {
    $query = $this->db->query("SELECT *
    FROM tb_tempat ORDER BY tb.id_tempat");

    if($query->num_rows() > 0){
        foreach($query->result() as $data){
            $hasil[] = $data;
        }
    return $hasil;
  }

}
