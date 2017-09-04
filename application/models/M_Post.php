<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_Post extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	function add($data){
		$this->db->insert('posts', $data);
	}
	function get($id, $title){
		$role = $this->db->select('role')->where([
			'id' => $id,
			'title' => $title
		])->get('posts',1)->result_array()[0];
		echo '---------------------------'.$role.'---------------------------';
		$retVal = [];
		switch ($role) {
			case 0:
				$retVal = $this->db->select('posts.*, account.u AS u')->where([
							'id' => $id,
							'title' => $title,
						])->join('account', 'account.id=posts.id_creator')->get('posts',1)->result_array()[0];
			break;
			case 1:
				$retVal = $this->db->select('posts.*, teachers.u AS u')->where([
							'id' => $id,
							'title' => $title,
						])->join('teachers', 'teachers.id=posts.id_creator')->get('posts',1)->result_array()[0];
			break;
		}
		return $retVal;
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