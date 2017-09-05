<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_Post extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	function add($data){
		$this->db->insert('posts', $data);
		return $this->db->select('MAX(id) AS id')->get('posts')->result_array()[0]['id'];
	}
	function get($id, $title){
		$role = $this->db->select('role')->where([
			'id' => $id,
			'title' => $title
		])->get('posts',1)->result_array()[0]['role'];
		$this->plus_1_view_count($id);
		$retVal = [];
		switch ($role) {
			case 0:
				$retVal = $this->db->select('posts.*, account.u AS u')->where([
							'posts.id' => $id,
							'title' => $title,
						])->join('account', 'account.id=posts.id_creator')->get('posts',1)->result_array()[0];
			break;
			case 1:
				$retVal = $this->db->select('posts.*, teachers.nama AS nama')->where([
							'posts.id' => $id,
							'title' => $title,
						])->join('account', 'account.id=posts.id_creator')
						->join('teachers', 'teachers.id_account=account.id')
						->get('posts',1)->result_array()[0];
			break;
		}
		return $retVal;
	}
	function get_newest($limit = 10){
		return $this->db->select('id,title,view_count')
						->order_by('id', 'DESC')
						->get('posts', $limit)->result_array();
	}
	function get_popular($limit = 10){
		return $this->db->select('id,title,view_count')
						->order_by('view_count', 'DESC')
						->order_by('id', 'DESC')
						->get('posts', $limit)->result_array();
	}
	function gets($id_creator=''){
		return $this->db->select('id,title,view_count')->where('id_creator', $id_creator)->get('posts')->result_array();
	}
	function update($post){
		$this->db->where('id', $post['id'])->update('posts', $post);		
	}
	function delete($id){
		$this->db->where('id', $id)->delete('kegiatan');
	}
	function plus_1_view_count($id){
		$view_count = $this->db->select('view_count')->where('id', $id)->get('posts')->result_array()[0]['view_count'] + 1;
		$this->db->where('id', $id)->update('posts', ['view_count' => $view_count]);
	}
}

/* End of file M_Kegiatan.php */
/* Location: ./application/models/M_Kegiatan.php */