<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Folder extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('folder_model');
		$this->load->model('file_model');

    }
	
    public function view($folder_id)
	{	
			$folder = $this->folder_model->detail($folder_id);
			$file = $this->file_model->createlist($folder_id);

			$data = array ( 'title'		=>	$folder->folder_name,
							'folder'	=> $folder,
							'file'		=> $file,
							'content' 	=>	'frontend/folder/view');

			$this->load->view('frontend/layout/wrapper', $data, FALSE);

			
	}

	public function select (){

	if(isset($_POST["file_id"]))  
	{  		
			$output = '';  
			$connect = mysqli_connect("localhost", "root", "", "arsip");  
			$query = "SELECT * FROM file WHERE file_id = '".$_POST["file_id"]."'";  
			$result = mysqli_query($connect, $query);  
			$output .= ' 
			<br>
<section class="content">
	<div class="row">
			<div class="col-12">
				<div class="card">';  
			while($row = mysqli_fetch_array($result))  
			{  
				$output .= '  
					<h1 class="card-header" style="text-align:center;">
					'.$row["file_name"].'
					</h1>
			
					<div class="card-body" id="filecontent">
					'.$row["file_body"].'
					</div>';  
			}  
			$output .= "
			</div>
			<!-- /.card -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
<!-- /.content -->";  
			echo $output;  
		}  
	}
}