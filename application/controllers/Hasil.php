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



	function view()
	{
		if ($this->uri->segment(3)) {
			$data   = file_get_contents('./datafile/' . $this->uri->segment(3));
		}
		$name   = $this->uri->segment(3);
		force_download($name, $data);
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
		// $this->db->set('download', 'download+1', FALSE);
		// $this->db->where('id', $id);
		// $this->db->update('document');
	}
}
