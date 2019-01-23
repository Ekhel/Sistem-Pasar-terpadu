<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model{

  var $tb_pegawai = 'tb_pegawai';
  function tampil_pegawai(){
    $query = $this->db->query("SELECT *
    FROM tb_pegawai
    LEFT JOIN tb_status ON tb_pegawai.id_status = tb_status.id_status
    LEFT JOIN tb_bidang ON tb_pegawai.id_bidang = tb_bidang.id_bidang
    LEFT JOIN tb_jabatan ON tb_pegawai.id_jabatan = tb_jabatan.id_jabatan
    ORDER BY id_pegawai");

    if($query->num_rows > 0){
				return false;
			}
			else{
				return $query->result();
			}
  }
  function add_pegawai($data){
		$this->db->insert($this->tb_pegawai, $data);
	}
}
