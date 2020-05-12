<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_dokumen', 'm');
	}

	public function index()
	{
		$data['title'] = "Beranda Pencarian";

		$this->load->view('homepage', $data);
	}

	function search()
	{
		$data['title'] = "Pencarian";
		// buat cari
		$data['cari'] = $this->input->post("cari");

		$data['dokumen'] = $this->m->search('document', $data['cari'])->result();
		$data['jumlah'] = count($data['dokumen']);

		// buat ngitung
		$keyword = $this->input->post('cari');
		$key = array(
			'keyword' => $keyword,
		);
		$this->m->count_search('search', $key);

		$this->load->view('dokumen', $data);
	}

	function bawah()
	{
		$source = 'source=final';
		$medium = '&medium=footer';
		$campaign = '&campaign=gumugu';

		redirect("https://www.gumugu.com?" . $source . $medium . $campaign);
	}

	public function atas()
	{

		$source = 'source=final';
		$medium = '&medium=navbar';
		if ($this->input->post('produk')) {
			$campaign = '&campaign=products';
		} elseif ($this->input->post('servis')) {
			$campaign = '&campaign=services';
		} elseif ($this->input->post('perusahaan')) {
			$campaign = '&campaign=company';
		} elseif ($this->input->post('akademi')) {
			$campaign = '&campaign=academy';
		}

		redirect("https://www.gumugu.com?" . $source . $medium . $campaign);
	}
}
