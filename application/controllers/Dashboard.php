<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('folder_model');
		$this->load->model('konfigurasi_model');
	}

	
	//Halaman utama admin Dasbor
	public function index()
	{	
        $folder = $this->folder_model->listing();
        $konfigurasi = $this->konfigurasi_model->detail();
        $data = array (	'title'	=> 'PT SOLUSI BANGUN INDONESIA',
						'folder' => $folder,        
						'konfigurasi' => $konfigurasi,        
						);

		$this->load->view('frontend/dashboard/list', $data, FALSE);

			
    }
    
    function fetch()
    {
            $output = '';
            $query = '';
            $this->load->model('folder_model');
            if($this->input->post('query'))
            {
            $query = $this->input->post('query');
            }
            $data = $this->folder_model->fetch_data($query);
            $output .= '
            <div class="row articles">
            ';
            if($data->num_rows() > 0){
            foreach($data->result() as $row)
            {
                $output .= '
                <div class="book col-md-4 col-sm-6 item">
                    <img class="img-responsive" alt=""  src="'
                            . base_url('assets/upload/folderimage/'.$row->folder_cover) .'
                "></img>
                <h2 class="name" style="font-family: Roboto, sans-serif;">'. $row->folder_name.'</h2>
                <p class="description" style="font-family: Roboto, sans-serif;">
                    
                </p>
                <a class="action" href="' . base_url ('frontend/folder/view/'.$row->folder_id) .'">Read more</a>
                </div>' ;
            }

            }else
            {
            $output .= '
                <div class="container">
                <div style="text-align: center;">No Data Found</div>
                </div>';
            }
            $output .= '</div>';
            echo $output;
    }

}
