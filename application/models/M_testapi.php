<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_testapi extends CI_Model{

  public function kategori()
  {
    $query = $this->db->query("SELECT * FROM tb_kategori");
    return $query->result();
  }

  public function add_kategori($data)
  {
    $this->insert->db('tb_kategori',$data);
  }
  public function get_kategori($param = 0)
	{
		return $this->db->get_where('tb_kategori', array('id_kategori' => $param))->row();
	}
  function hapus_kategori($param = 0)
	{
		$kategori = $this->get_kategori($param);
		$this->db->delete('tb_kategori', array('id_kategiri' => $param));
	}
  function editpedagang($param = 0)
  {
    $kategori = $this->get_kategori($param);
		$object = array(
			'kategori' => $this->input->post('kategori'),
			'keterangan' => $this->input->post('keterangan'),
		);
		$this->db->update('tb_kategori', $object, array('id_kategori' => $param));
  }
}
