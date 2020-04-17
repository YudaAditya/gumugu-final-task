<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokumen extends CI_Controller
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
		$data['title'] = "List Dokumen";
		$data['dokumen'] = $this->m->show('document')->result();

		$this->load->view('dokumen', $data);
	}

	public function tambah()
	{
		$data['title'] = "Form Dokumen";
		$this->load->view('tambah_dokumen', $data);
	}

	public function proses_tambah()
	{
		$name = $this->input->post('name');
		$publisher = $this->input->post('publisher');
		$created = date_format(date_create($this->input->post('created')), 'Y-m-d');
		$expired = date_format(date_create($this->input->post('expired')), 'Y-m-d');
		$file = $_FILES['file']['name'];

		if ($file == '') {
		} else {
			$config['upload_path'] = './datafile';
			$config['allowed_types'] = 'pdf';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('file')) {
				echo "gagal";
				die();
			}

			$data = array(
				'name' => $name,
				'publisher' => $publisher,
				'created' => $created,
				'expired' => $expired,
				'file' => $file,
			);

			$this->m->input($data, 'document');
			redirect('dokumen');
		}
	}
	public function detail($id)
	{
		$data['dokumen'] = $this->m->getById($id, 'document');
		$data['title'] = "Detail";
		$this->load->view('hasil', $data);
	}
}
