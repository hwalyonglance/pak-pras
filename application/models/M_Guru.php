<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_Guru extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	function add($data){
		$this->db->insert('teachers', $data);
		redirect('guru/');
	}
	function gets(){
		return $this->db->get('teachers')->result_array();
	}
	function update($data){
		$this->db->set($data)->where('id', $data['id'])->update('teachers');
		redirect('guru/');
	}
	function delete($id){
		unlink(BASEPATH.'..\\uploads\\guru\\'.$this->db->select('foto')->where('id',$id)->get('teachers')->result_array()[0]['foto']);
		$this->db->where('id', $id)->delete('guru');
		redirect('guru/');
	}
}

/* End of file M_Guru.php */
/* Location: ./application/models/M_Guru.php */