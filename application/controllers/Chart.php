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
		$data['charts']= $this->m->count("search","keyword");
		$data['schartg']= $this->m->count("campaign","source");
		$data['mchartg']= $this->m->count("campaign","medium");
		$data['cchartg']= $this->m->count("campaign","campaign");
		$data['lchartg']= $this->m->count("campaign","link");
		$this->load->view('chart', $data);
	}
}
