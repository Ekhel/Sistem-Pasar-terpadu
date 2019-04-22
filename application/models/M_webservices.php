<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_webservices extends CI_Model {

  public function Renja($tahun = 0)
	{
				$param = "";
				$tahun = $this->input->get('tahun');
				if ($tahun=="") {
					# code...
					$tahun = date("Y");
				}
				$url5 =  "http://sipp.jayapurakab.go.id/webservices/renja?tahun=".$tahun."&id_skpd=31";
				$ch = curl_init();
		    curl_setopt($ch, CURLOPT_URL, $url5);
		    curl_setopt($ch, CURLOPT_HEADER, 0);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_POST, 1);
				$readjson = curl_exec($ch);
				$datas =   json_decode($readjson,true);
				$hasil = $datas['result'];

		return $hasil;
	}

	public function Renja2($tahun = 0)
	{
			$param = "";
			$tahun = $this->input->get('tahun');
			if ($tahun=="") {
				# code...
				$tahun = date("Y");
			}

			$url5 =  "http://sipp.jayapurakab.go.id/webservices/renja?tahun=".$tahun."&id_skpd=31";

			$ch = curl_init();
    	curl_setopt($ch, CURLOPT_URL, $url5);
    	curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POST, 1);

			$readjson = curl_exec($ch);

			$datas =   json_decode($readjson,true);
			$hasil2 = $datas['result'];
		// modif

		$program = array();
		foreach ($hasil2 as $key) {
			$data[$key['id_program']]['id_program'] = $key['id_program'];
			$data[$key['id_program']]['program'] = $key['program'];

			$program[$key['id_program']] = array('id_program'=>$key['id_program'], 'program'=>$key['program']);
		}

		// return $hasil2;
		return $program;
	}

}
