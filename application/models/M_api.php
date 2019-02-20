<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_api extends CI_Model{

  function get_user()
  {
    return $this->db->get('tb_user')->result();
  }
}
