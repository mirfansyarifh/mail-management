<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Folder_model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
			$this->load->database();

		}

		public function get_count()
		{
			$query = $this->db->select('count(folder_id) as total_folder')->from('folder')->get();
			return $query->row()->total_folder;
		}
			//Listing semua kategori
		public function listing()
		{
			$this->db->select('*');
			$this->db->from('folder');	
			$this->db->order_by('folder_numb', 'asc');
			$query = $this->db->get();
			return $query->result();
		}
			//Detail kategori
		public function detail($folder_id)
		{
			$this->db->select('*');
			$this->db->from('folder');
			$this->db->where('folder_id', $folder_id);	
			$this->db->order_by('folder_id', 'desc');
			$query = $this->db->get();
			return $query->row();
		}
			//Tambah Akun
		public function add($data)
		{
			$this->db->insert('folder', $data);
		}
			//Edit Akun
		public function edit($data)
		{
			$this->db->where('folder_id', $data['folder_id']);
			$this->db->update('folder', $data);
		}

			//Delete Akun
		public function delete($data)
		{
			$this->db->where('folder_id', $data['folder_id']);
			$this->db->delete('folder', $data);
		}

		function fetch_data($query)
		{
			$this->db->select("*");
			$this->db->from("folder");
			if($query != '')
			{
				$this->db->like('folder_name', $query);
			}
			$this->db->order_by('folder_numb', 'ASC');
			return $this->db->get();
		}

}

/* End of file Kategori_model.php */
/* Location: ./application/models/Kategori_model.php */