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
		$data = $this->db->get_where('document', ['id' => $id])->row();
		$source='final';
		$medium='detail-'.$data->id;
		$campaign='data';
		$link = $data->source;
		$url=$link."?source=".$source."&medium=".$medium."&campaign=".$campaign;

		// buat ngitung
		$urls = array(
			'source'	=> $source,
			'medium'	=> $medium,
			'campaign'	=> $campaign,
			'link'		=> $link
		);
		$this->m->count_dv('campaign', $urls);
		redirect($url);
	}

	function pindah(){
		$this->load->view('redirect');
	}
}
