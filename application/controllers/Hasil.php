<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil extends CI_Controller
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
		$data['title'] = "Hasil Pencarian";
		$this->load->view('hasil', $data);
	}

	function fungsi($id)
	{
		$data = $this->db->get_where('document', ['id' => $id])->row();
		force_download('datafile/' . $data->file, NULL);
	}

	function download($id)
	{
		
		// buat ngitung
		$now = date("Y-m-d");
		$date = array(
			'date'    => $now
		);
		
		$this->m->count_dv('download', $date);
		// $this->fungsi($id);
		$data = $this->db->get_where('document', ['id' => $id])->row();
		force_download('datafile/' . $data->file, NULL);
	}

	function save_data($id)
	{
		$source='source=final';
		$medium='&medium=detail-';
		$campaign='&campaign=data';
		$data = $this->db->get_where('document', ['id' => $id])->row();
		$url=$data->source."?".$source.$medium.$data->id.$campaign;

		// buat ngitung
		$now = date("Y-m-d");
		$urls = array(
			'date'    => $now,
			'url'	  => $url
		);
		$this->m->count_dv('goto', $urls);
		redirect($url);
	}

	function pindah(){
		$this->load->view('redirect');
	}
}
