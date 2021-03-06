<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Captcha extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// Load the captcha helper
		$this->load->helper('captcha');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['validation'] = NULL;
		// If captcha form is submitted
		if ($this->input->post('submit')) {
			$inputCaptcha = $this->input->post('captcha');
			$sessCaptcha = $this->session->userdata('captchaCode');
			if ($inputCaptcha === $sessCaptcha) {
				redirect('dokumen/hasil_search');
			} else {
				$data['validation'] = 'Huruf yang anda isi tidak sesuai, silahkan masukan kembali';
			}
		}
		// Captcha configuration
		$config = array(
			'img_path'      => 'captcha_images/',
			'img_url'       => base_url() . 'captcha_images/',
			'img_width'     => 300,
			'img_height'    => 100,
			'word_length'   => 5,
			'font_size'     => 50
		);
		$captcha = create_captcha($config);

		// Unset previous captcha and store new captcha word
		$this->session->unset_userdata('captchaCode');
		$this->session->set_userdata('captchaCode', $captcha['word']);

		// Send captcha image to view
		$data['captchaImg'] = $captcha['image'];
		$data['title'] = "Captcha";
		
		// Load the view

		$this->load->view('captcha', $data);
	}

	public function refresh()
	{
		// Captcha configuration
		$config = array(
			'img_path'      => 'captcha_images/',
			'img_url'       => base_url() . 'captcha_images/',
			'img_width'     => 300,
			'img_height'    => 100,
			'word_length'   => 5,
			'font_size'     => 50
		);
		$captcha = create_captcha($config);

		// Unset previous captcha and store new captcha word
		$this->session->unset_userdata('captchaCode');
		$this->session->set_userdata('captchaCode', $captcha['word']);

		// Display captcha image
		echo $captcha['image'];
	}
}
