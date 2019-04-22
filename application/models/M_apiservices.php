<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_apiservices extends CI_Model{

  function get_skpd()
  {
    $url = "http://sipp.jayapurakab.go.id/webservices/skpd";
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER,0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST,1);

    $readjson = curl_exec($ch);
    $datas = json_decode($readjson,true);
    $hasil = $datas['result'];
    return $hasil;
  }
  function get_pangkalan_minyak()
  {
    $query = $this->db->query("SELECT * FROM tb_pangkalan_minyak");
    return $query->result();
  }
}
