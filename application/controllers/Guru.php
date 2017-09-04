<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Guru extends CI_Controller {
	function __construct(){
		parent::__construct();
		if (!$this->session->userdata('is_role_1_logged_in')) {
			redirect('login/guru');
		}
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
	function add_post(){
		$this->load->view('_atas');
		$this->load->view('guru/_nav');
		$this->load->view('form/post/index', [
			'data' => [
				'id_creator' => $this->session->userdata('role_1_id'),
				'role' => '1'
			]
		]);
	}
}

/* End of file Guru.php */
/* Location: ./application/controllers/Guru.php */