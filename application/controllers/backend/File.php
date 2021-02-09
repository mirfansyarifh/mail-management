<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		// PROTEKSI SESSION
		$this->simple_login->cek_login();
		// AMBIL DATA
        $this->load->model('file_model');
		$this->load->model('folder_model');
		
	}
	public function index()
	{	
		$file = $this->file_model->listing();

		$data = array ( 'title'		=>	'Daftar Data File',
						'file'		=>	$file,
						'content' 		=>	'backend/file/list');
						
		$this->load->view('backend/layout/wrapper', $data, FALSE);
	}
	
	public function add()
	{	
        // Ambil data Folder	
        $folder = $this->folder_model->listing();


		// Validasi Input
		$valid = $this->form_validation;

		$valid->set_rules('file_name', 'Nama File', 'required',
			array ( 'required'		=> 	'%s harus diisi!',
					));

		$valid->set_rules('ref_numb', 'Nomor File', 'required|is_unique[file.ref_numb]',
			array ( 'required'		=> 	'%s harus diisi!',
                    'is_unique'		=>	'%s nomor sudah ada. Buat urutan baru!'));
                    
        $valid->set_rules('file_code', 'Kode File', 'required|is_unique[file.file_code]',
			array ( 'required'		=> 	'%s harus diisi!',
                    'is_unique'		=>	'%s urutan sudah ada. Buat urutan baru!'));
                    
        $valid->set_rules('file_body', 'Content File', 'required',
            array ( 'required'		=> 	'%s harus diisi!'));
            
        $valid->set_rules('folder_id', 'Lokasi Folder', 'required',
            array ( 'required'		=> 	'%s harus diisi!'));
        
        $valid->set_rules('file_year', 'Tahun File', 'required',
			array ( 'required'		=> 	'%s harus diisi!'));
		
		$valid->set_rules('file_numb', 'Urutan File', 'required',
			array ( 'required'		=> 	'%s harus diisi!',));
		
		
				if($valid->run()==FALSE){
					
                    $data = array ( 'title'		=>	'Tambah File',
                                    'folder'    => $folder,
									'content' 		=>	'backend/file/add');
		
						$this->load->view('backend/layout/wrapper', $data, FALSE);
				}else{
				
				$i = $this->input;
				$data = array (	
								'folder_id	'	=> $i->post('folder_id'),
								'file_name'	=>	$i->post('file_name'), 
								'ref_numb'	=>	$i->post('ref_numb'),
								'file_code'	=>	$i->post('file_code'),
								'file_year'	=>	$i->post('file_year'),
								'file_body'	=>	$i->post('file_body'),
								'file_numb'	=>	$i->post('file_numb'),
								'username'	=>	$this->session->userdata('username'));
				
					$this->file_model->add($data);
					$this->session->set_flashdata('sukses', 'File Data telah di tambahkan!');
					redirect(base_url('backend/file'), 'refresh');

				}
		// End Masuk database
	}

		//Edit Kategori
	public function edit($file_id)
	{		
		//AMBIL DATA
        $file = $this->file_model->detail($file_id);
        $folder = $this->folder_model->listing();
        
		// Validasi Input
		$valid = $this->form_validation;

		$valid->set_rules('file_name', 'Nama File', 'required',
			array ( 'required'		=> 	'%s harus diisi!',
					));

		$valid->set_rules('ref_numb', 'Urutan File', 'required',
			array ( 'required'		=> 	'%s harus diisi!',
                    ));
                    
        $valid->set_rules('file_code', 'Kode File', 'required',
			array ( 'required'		=> 	'%s harus diisi!',
                   ));
                    
        $valid->set_rules('file_body', 'Urutan File', 'required',
            array ( 'required'		=> 	'%s harus diisi!'));
            
        $valid->set_rules('folder_id', 'Lokasi File', 'required',
            array ( 'required'		=> 	'%s harus diisi!'));

        $valid->set_rules('folder_id', 'Content File', 'required',
            array ( 'required'		=> 	'%s harus diisi!'));
        
        $valid->set_rules('file_year', 'Tahun File', 'required',
			array ( 'required'		=> 	'%s harus diisi!'));
			
		$valid->set_rules('file_numb', 'Urutan File', 'required',
			array ( 'required'		=> 	'%s harus diisi!'));
            
			if($valid->run()==FALSE){

				$data = array ( 'title'		=>	'Edit File',
								'file'		=> $file,
								'folder'	=> $folder,
                                'content' 		=>	'backend/file/edit');
		
                        $this->load->view('backend/layout/wrapper', $data, FALSE);
                        
				}else{

                    $i = $this->input;
                        $data = array (	'file_id'       => $file_id,
                                        'folder_id	'	=> $i->post('folder_id'),
                                        'file_name'	=>	$i->post('file_name'), 
                                        'ref_numb'	=>	$i->post('ref_numb'),
                                        'file_code'	=>	$i->post('file_code'),
                                        'file_year'	=>	$i->post('file_year'),
										'file_body'	=>	$i->post('file_body'),
                                        'file_numb'	=>	$i->post('file_numb'),										
                                        'username'	=>	$this->session->userdata('username'),
                                        );
                    $this->file_model->edit($data);
                    $this->session->set_flashdata('sukses', 'File Data telah di ubah!');
                    redirect(base_url('backend/file'), 'refresh');
                }
            }

		//Delete Kategori
	public function delete($file_id)
	{

		$file = $this->file_model->detail($file_id);

			$data = array ('file_id'	=> $file_id );
			
			$this->file_model->delete($data);
			$this->session->set_flashdata('sukses', 'File Data telah di hapus!');
			redirect(base_url('backend/file'), 'refresh');
	}

	public function detail($file_id)
	{

		$file = $this->file_model->detail($file_id);

		$data = array ( 'title'		=>	'Daftar Data File',
						'file'		=>	$file,
						'content' 		=>	'backend/file/detail');

		$this->load->view('backend/layout/wrapper', $data, FALSE);
	}

}
