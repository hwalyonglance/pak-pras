<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	public function index(){
		
	}
	public function admin(){
		$this->load->view('form/login/admin');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */