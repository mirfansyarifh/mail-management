<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		// PROTEKSI SESSION
		$this->simple_login->cek_login();

		$this->load->model('folder_model');
		$this->load->model('file_model');

	}

	
	//Halaman utama admin Dasbor
	public function index()
	{	
		$countfolder = $this->folder_model->get_count();
		$countfile = $this->file_model->get_count();
		$konfigurasi = $this->konfigurasi_model->detail();

		$data = array (	'title'	=> 'Administrator',
						'countfolder' => $countfolder,
						'countfile' => $countfile,
						'content' 	=> 'backend/dashboard/list');

		$this->load->view('backend/layout/wrapper', $data, FALSE);

			
	}

}
