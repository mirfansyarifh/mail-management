<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class File_model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
			$this->load->database();

		}

		public function get_count()
		{
			$query = $this->db->select('count(file_id) as total_file')->from('file')->get();
			return $query->row()->total_file;
		}
	
			//Listing semua kategori
		public function listing()
		{
			$this->db->select('file.*,
								folder.folder_name');
			$this->db->from('file');	

			//  JOIN
			$this->db->join('folder', 'folder.folder_id = file.folder_id', 'left');


			$this->db->group_by('file.file_id');

			$this->db->order_by('file_id', 'desc');
			$query = $this->db->get();
			return $query->result();
		}
			//Detail kategori
		public function detail($file_id)
		{
			$this->db->select('*');
			$this->db->from('file');
			$this->db->where('file_id', $file_id);	
			$this->db->order_by('file_id', 'desc');
			$query = $this->db->get();
			return $query->row();
		}
			//Tambah Akun
		public function add($data)
		{
			$this->db->insert('file', $data);
		}
			//Edit Akun
		public function edit($data)
		{
			$this->db->where('file_id', $data['file_id']);
			$this->db->update('file', $data);
		}

			//Delete Akun
		public function delete($data)
		{
			$this->db->where('file_id', $data['file_id']);
			$this->db->delete('file', $data);
		}

		public function createlist($folder_id)
		{
			$this->db->select('*');
			$this->db->from('file');	
			$this->db->where('folder_id', $folder_id);	
			$this->db->order_by('file_numb', 'ASC');
			$query = $this->db->get();
			return $query->result();
		}
}
