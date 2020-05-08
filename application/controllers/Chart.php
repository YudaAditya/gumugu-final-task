<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chart extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('Model_dokumen', 'm');
	}

	public function index()
	{
		$data['title'] = "Data Chart";
		$data['chart']= $this->m->count("search");
		$this->load->view('chart', $data);
	}
}
