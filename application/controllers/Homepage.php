<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->model('Model_dokumen','m');
    }

	public function index()
	{
		$data['title'] = "Beranda Pencarian";
        
		$this->load->view('homepage', $data);
	}

	function search(){
		// buat cari
		$data['cari']=$this->input->post("cari");

		$data['dokumen']=$this->m->search('document',$data['cari'])->result();
		$data['jumlah']=count($data['dokumen']);

		// buat ngitung
		$keyword = $this->input->post('cari');
		$key=array(
			'keyword'=>$keyword,
		);
		$this->m->count_search('search',$key);

		$this->load->view('dokumen',$data);
	}

	
}
