<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Folder extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		// PROTEKSI SESSION
		$this->simple_login->cek_login();
		// AMBIL DATA
		$this->load->model('folder_model');
		
	}
	public function index()
	{	
		$folder = $this->folder_model->listing();

		$data = array ( 'title'		=>	'Daftar Data Folder',
						'folder'	=>	$folder,
						'content' 	=>	'backend/folder/list');

		$this->load->view('backend/layout/wrapper', $data, FALSE);
	}
	
	public function add()
	{		
		// Validasi Input
		$valid = $this->form_validation;

		$valid->set_rules('folder_name', 'Nama Folder', 'required|is_unique[folder.folder_name]',
			array ( 'required'		=> 	'%s harus diisi!',
					'is_unique'		=>	'%s folder sudah ada. Buat folder baru!'));

		$valid->set_rules('folder_numb', 'Urutan Folder', 'required|is_unique[folder.folder_numb]',
			array ( 'required'		=> 	'%s harus diisi!',
					'is_unique'		=>	'%s urutan sudah ada. Buat urutan baru!'));

				// APA BILA VALIDASI BERHASIL
				if($valid->run()){
					// Gambar RULES
					$config['upload_path'] 		= './assets/upload/folderimage/';
					$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
					$config['max_size']  		= '2400'; // Dalam KB
					$config['max_width'] 		= '2024';
					$config['max_height']  		= '2024';
					// Proses Upload
					$this->load->library('upload', $config);
					// BILA TIDAK ADA GAMBAR MAKA;
					if ( ! $this->upload->do_upload('folder_cover')){	
							
					$data = array ( 'title'		=>	'Tambah Folder',
									'error'			=>	$this->upload->display_errors(),
									'content' 		=>	'backend/folder/add');
		
						$this->load->view('backend/layout/wrapper', $data, FALSE);
						// BILA ADA 
						}else{

							$upload_gambar = array('upload_data' => $this->upload->data());
							// create thumbnail
							$config['image_library'] 	= 'gd2';
							$config['source_image'] 	= './assets/upload/folderimage/'.$upload_gambar['upload_data']['file_name'];
							// Lokasi thumbnail new
							$config['new_image'] 	= './assets/upload/folderimage/thumbs/';
							$config['create_thumb'] 	= TRUE;
							$config['maintain_ratio'] 	= TRUE;
							$config['width']         	= 120; //pixel
							$config['height']       	= 120; //pixel
							$config['thumb_marker']		= '';

							$this->load->library('image_lib', $config);

							$this->image_lib->resize();
							// end create thumbnail

							$i = $this->input;
							$data = array (	
											'folder_id	'	=> $i->post('folder_id'),
											'folder_name'	=>	$i->post('folder_name'), 
											'folder_numb'	=>	$i->post('folder_numb'),
											'folder_cover'	=>	$upload_gambar['upload_data']['file_name'],  // UPLOAD KE SQL
											);
							$this->folder_model->add($data);
							$this->session->set_flashdata('sukses', 'Folder Data telah di tambahkan!');
							redirect(base_url('backend/folder'), 'refresh');
						}}

		// End Masuk database
		$data = array ( 'title'		=>	'Tambah Folder',
						'content' 	=>	'backend/folder/add');
		
		$this->load->view('backend/layout/wrapper', $data, FALSE);
	}

		//Edit Kategori
	public function edit($folder_id)
	{		
		// AMBIL DATA FOLDER YANG AKAN DI EDIT DENGAN PARAMETER FOLDER_ID
		$folder = $this->folder_model->detail($folder_id);
		// Validasi Input
		$valid = $this->form_validation;

		$valid->set_rules('folder_name', 'Nama Folder', 'required',
			array ( 'required'		=> '%s harus diisi!'));

		$valid->set_rules('folder_numb', 'Urutan Folder', 'required',
			array ( 'required'		=> '%s harus diisi!'));
			// VALIDASI BERJALAN
			if($valid->run()){	
				
				if(!empty($_FILES['folder_cover']['name'])) {
	
	
				$config['upload_path'] 		= './assets/upload/folderimage/';
				$config['allowed_types'] 	= 'gif|jpg|png|jpeg';
				$config['max_size']  		= '2400'; // Dalam KB
				$config['max_width'] 		= '2024';
				$config['max_height']  		= '2024';
				
				$this->load->library('upload', $config); // Proses Uplaod

				// Check jika gambar diganti
				if ( ! $this->upload->do_upload('folder_cover')){				
						
			// End Validation
			
			$data = array ( 'title'		=>	'Edit Folder'.$folder->folder_name,
							'folder'	=>	$folder,
							'error'		=>	$this->upload->display_errors(),
							'content' 		=>	'backend/folder/edit');
			
			$this->load->view('backend/layout/wrapper', $data, FALSE);
			// Masuk Database
			}else{
							$upload_gambar = array('upload_data' => $this->upload->data());
							// create thumbnail
							$config['image_library'] 	= 'gd2';
							$config['source_image'] 	= './assets/upload/folderimage/'.$upload_gambar['upload_data']['file_name'];
							// Lokasi thumbnail new
							$config['new_image'] 		= './assets/upload/folderimage/thumbs/';
							$config['create_thumb'] 	= TRUE;
							$config['maintain_ratio'] 	= TRUE;
							$config['width']         	= 120; //pixel
							$config['height']       	= 120; //pixel
							$config['thumb_marker']		= '';
	
							$this->load->library('image_lib', $config);
	
							$this->image_lib->resize();
						// end create thumbnail
	
						$i = $this->input;
						$data = array (	
											'folder_id'	=> $folder_id,
											'folder_name'	=>	$i->post('folder_name'), 
											'folder_numb'	=>	$i->post('folder_numb'),

											'folder_cover'	=>	$upload_gambar['upload_data']['file_name'], 
					);
						// unlink (Delete) gambar dan thumbs
						$path = FCPATH.'assets/upload/folderimage/'; 
						$paththumbs = FCPATH.'assets/upload/folderimage/thumbs/'; 
						$get_image = $path.$folder->folder_cover; 
						$get_thumbs = $paththumbs.$folder->folder_cover; 
						unlink($get_image); 
						unlink($get_thumbs); 
						// Done unlink


						$this->folder_model->edit($data);
						$this->session->set_flashdata('sukses', 'Folder Data telah di edit!');
						redirect(base_url('backend/folder'), 'refresh');
	
			}}else{
					// Edit produk tanpa ganti gambar
						$i = $this->input;
						$data = array (
											'folder_id'	=> $folder_id,
											'folder_name'	=>	$i->post('folder_name'), 
											'folder_numb'	=>	$i->post('folder_numb'),

						);
						$this->folder_model->edit($data);
						$this->session->set_flashdata('sukses', 'Data telah di edit!');

						redirect(base_url('backend/folder'), 'refresh');
			}}
	
			// End Masuk database
			$data = array ( 'title'		=>	'Edit Folder: '.$folder->folder_name,
							'folder'	=> 	$folder,
							'content' 		=>	'backend/folder/edit');
			
			$this->load->view('backend/layout/wrapper', $data, FALSE);
	}

		//Delete Kategori
	public function delete($folder_id)
	{

		$folder = $this->folder_model->detail($folder_id);

			$data = array ('folder_id'	=> $folder_id );
			// unlink (Delete) gambar dan thumbs
			$path = FCPATH.'assets/upload/folderimage/'; 
			$paththumbs = FCPATH.'assets/upload/folderimage/thumbs/'; 
			$get_image = $path.$folder->folder_cover; 
			$get_thumbs = $paththumbs.$folder->folder_cover; 
			unlink($get_image); 
			unlink($get_thumbs); 
			// Done unlink

			$this->folder_model->delete($data);
			$this->session->set_flashdata('sukses', 'Folder Data telah di hapus!');
			redirect(base_url('backend/folder'), 'refresh');
	}

	public function detail($folder_id)
	{

		$folder = $this->folder_model->detail($folder_id);

		$data = array ( 'title'		=>	'Daftar Data Folder',
						'folder'		=>	$folder,
						'content' 		=>	'backend/folder/detail');

		$this->load->view('backend/layout/wrapper', $data, FALSE);
	}

}