<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function su(){
		$data = $this->db->select('id,u,p')->where('role','0')->get('account', 1)->result_array()[0];
		if (password_verify($_POST['p'], $data['p'])) {
			$this->session->set_userdata([
				'role_0_id' => $data['id'],
				'is_role_0_logged_in' => true
			]);
			redirect('su/');
		} else {
			$this->session->set_flashdata('wrong_pw0', true);
			redirect('login/su');
		}
	}
	function guru(){
		$data = $this->db->select('id,u,p')->get('guru', 1)->result_array()[0];
		if (password_verify($_POST['p'], $data['p'])) {
			$this->session->set_userdata([
				'role_1_id' => $data['id'],
				'is_role_1_logged_in' => true
			]);
			redirect('guru/');
		} else {
			$this->session->set_flashdata('wrong_pw1', true);
			redirect('login/guru');
		}
	}
}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */