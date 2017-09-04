<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Guru extends CI_Controller {
	function __construct(){
		parent::__construct();
		if (!$this->session->userdata('is_role_1_logged_in')) {
			redirect('login/guru');
		}
		$this->load->model('M_Post');
	}
	function index(){
		$this->load->view('_atas');
		$this->load->view('guru/_nav');
	}
	function logout(){
		$this->session->set_userdata([
			'role_1_id' => NULL,
			'is_role_1_logged_in' => NULL
		]);
		redirect('');
	}
	function post($action = '', $id = ''){
		$this->load->view('_atas');
		$this->load->view('guru/_nav');
		switch ($action) {
			case 'add':
				$this->load->view('form/post/index', [
					'data' => [
						'id_creator' => $this->session->userdata('role_1_id'),
						'role' => '1',
						'action' => 'add'
					]
				]);
			break;
			case 'edit':
				$post = $this->db->select('title,body')
						->where(['id' => $id, 'id_creator' => $this->session->userdata('role_1_id')])
						->get('posts', 1)->result_array()[0];
				$this->load->view('form/post/index', [
					'data' => [
						'id_creator' => $this->session->userdata('role_1_id'),
						'role' => '1',
						'action' => 'edit',
						'post' => [
							'id' => $id,
							'title' => $post['title'],
							'body' => $post['body'],
						]
					]
				]);
			break;
			default:
				$this->load->view('guru/post',[
					'data' => [
						'posts' => $this->M_Post->gets($this->session->userdata('role_1_id'))
					]
				]);
			break;
		}
		
	}
}

/* End of file Guru.php */
/* Location: ./application/controllers/Guru.php */