<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_Guru extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	function add($data){
		$this->db->insert('guru', $data);
		redirect('su/guru');
	}
	function gets(){
		return $this->db->get('guru')->result_array();
	}
	function update($data){
		$this->db->set($data)->where('id', $data['id'])->update('guru');
		redirect('su/guru');
	}
	function delete($id){
		unlink(BASEPATH.'..\\uploads\\guru\\'.$this->db->select('foto')->where('id',$id)->get('guru')->result_array()[0]['foto']);
		$this->db->where('id', $id)->delete('guru');
	}
}

/* End of file M_Guru.php */
/* Location: ./application/models/M_Guru.php */