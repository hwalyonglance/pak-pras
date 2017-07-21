<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function admin(){
		$data = $this->db->select('u,p')->where('role','0')->get('account', 1)->result_array()[0];
		if (password_verify($_POST['p'], $data['p'])) {
			$this->session->set_userdata([
				'is_role_0_logged_in' => true
			]);
			redirect('su/');
		} else {
			$this->session->set_flashdata('wrong_pw0', true);
			redirect('login/admin');
		}
	}
}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */