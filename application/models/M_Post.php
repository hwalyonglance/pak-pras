<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_Post extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	function add($data){
		$this->db->insert('posts', $data);
	}
	function gets(){
		
	}
	function update($data){
		
	}
	function delete($id){
		$this->db->where('id', $id)->delete('kegiatan');
	}

}

/* End of file M_Kegiatan.php */
/* Location: ./application/models/M_Kegiatan.php */