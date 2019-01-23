<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->database();
	    $this->load->helper('url');
			$this->load->model('M_webservices');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function status()
	{
		$data['title'] = 'Admin | Status';
		$this->template->load('MasterAdmin','admin/status',$data);
	}

	public function Dashboard()
	{
		$data['title'] = 'Admin | Dashboard';
		$this->template->load('MasterAdmin','admin/dashboard',$data);
	}

	public function kua_ppas()
	{
		$data['title'] = 'Admin | KUA - PPAS PERINDAG';
		$data['hasil'] = $this->M_webservices->Renja();
		$data['hasil2'] = $this->M_webservices->Renja2();
		$this->template->load('MasterAdmin','admin/kua_ppas',$data);
	}

}
