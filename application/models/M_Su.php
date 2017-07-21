<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_Su extends CI_Model {
	public function __construct(){
		parent::__construct();
	}
	function guru_add($data){
		$this->db->insert('guru', $data);
		redirect('su/guru');
	}
	function guru_gets(){
		return $this->db->get('guru')->result_array();
	}
	function guru_update($data){
		$this->db->set($data)->where('id', $data['id'])->update('guru');
		redirect('su/guru');
	}
	function guru_delete($id){
		unlink(BASEPATH.'..\\uploads\\guru\\'.$this->db->select('foto')->where('id',$id)->get('guru')->result_array()[0]['foto']);
		$this->db->where('id', $id)->delete('guru');
	}

}

/* End of file M_Su.php */
/* Location: ./application/models/M_Su.php */