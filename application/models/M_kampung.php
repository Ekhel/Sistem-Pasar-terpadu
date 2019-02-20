<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kampung extends CI_Model{
  function tampil_kampung()
  {
    $this->db->join('tb_distrik', 'tb_distrik.id_distrik = tb_kampung.id_distrik', 'left');
		$this->db->order_by('tb_kampung.id_distrik', 'asc');
    return $this->db->get('tb_kampung')->result();
  }
}
