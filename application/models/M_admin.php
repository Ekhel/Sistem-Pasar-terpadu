<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model{
  var $tb_pegawai = 'tb_pegawai';
  var $tb_user = 'tb_user';
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
  function getuser($param = 0)
	{
		return $this->db->get_where('tb_user', array('id_user' => $param))->row();
	}
  function add_pegawai($data){
		$this->db->insert($this->tb_pegawai, $data);
	}
  function add_users($data){
		$this->db->insert($this->tb_user, $data);
	}
  function hapus_pengguna($param = 0)
	{
		$user = $this->getuser($param);
		$this->db->delete('tb_user', array('id_user' => $param));

    $this->session->set_flashdata("msg","
          <div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Data Pengguna Berhasil Dihapus!</strong>
            <a href='#' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </a>
          </div>");
	}
}
