<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_dokumen', 'm');
		$this->load->library('user_agent');
	}

	public function index()
	{
		$data['title'] = "Beranda Pencarian";
		$ip = $this->input->ip_address();
		$client = array(
			'ip_address' => $ip,
		);
		$this->m->count_dv('client', $client);

		$this->load->view('homepage', $data);
	}

	function search()
	{
		$data['title'] = "Pencarian";
		// // buat cari
		// $data['cari'] = $this->input->post("cari");

		// $data['dokumen'] = $this->m->search('document', $data['cari'])->result();
		// $data['jumlah'] = count($data['dokumen']);

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
		$campaign = NULL;
		if ($this->input->post('produk')) {
			$campaign = 'products';
			$link = 'https://www.gumugu.com/product/gupaper/';
		} elseif ($this->input->post('servis')) {
			$campaign = 'services';
			$link = 'https://www.gumugu.com/services#web/';
		} elseif ($this->input->post('perusahaan')) {
			$campaign = 'company';
			$link = 'https://www.gumugu.com/about/';
		} elseif ($this->input->post('akademi')) {
			$campaign = 'academy';
			$link = 'http://academy.gumugu.com/';
		} elseif ($campaign == NULL) {
			$campaign = 'final-homepage';
			$link = 'http://127.0.0.1/final/';
			// redirect("Homepage"."?source=" . $source ."&medium=". $medium ."&campaign=". $campaign);
		}

		// buat ngitung
		$urls = array(
			'source'	=> $source,
			'medium'	=> $medium,
			'campaign'	=> $campaign,
			'link'		=> $link
		);
		$this->m->count_dv('campaign', $urls);


		redirect($link ."?source=". $source ."&medium=". $medium ."&campaign=". $campaign);
	}


}
