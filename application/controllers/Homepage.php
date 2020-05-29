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
		$this->m->count_dv('search', $key);

		// $this->load->view('dokumen', $data);
		redirect('captcha');
	}

	function bawah()
	{
		$source = 'final';
		$medium = 'footer';
		$campaign = 'gumugu';

		// buat ngitung
		$urls = array(
			'source'	=> $source,
			'medium'	=> $medium,
			'campaign'	=> $campaign
		);
		$this->m->count_dv('campaign', $urls);

		redirect("https://www.gumugu.com?source=" . $source ."&medium=". $medium ."&campaign=". $campaign);
	}

	public function atas()
	{

		$source = 'final';
		$medium = 'navbar';
		if ($this->input->post('produk')) {
			$campaign = 'products';
		} elseif ($this->input->post('servis')) {
			$campaign = 'services';
		} elseif ($this->input->post('perusahaan')) {
			$campaign = 'company';
		} elseif ($this->input->post('akademi')) {
			$campaign = 'academy';
		}

		// buat ngitung
		$urls = array(
			'source'	=> $source,
			'medium'	=> $medium,
			'campaign'	=> $campaign
		);
		$this->m->count_dv('campaign', $urls);

		redirect("https://www.gumugu.com?source=" . $source ."&medium=". $medium ."&campaign=". $campaign);
	}


}
