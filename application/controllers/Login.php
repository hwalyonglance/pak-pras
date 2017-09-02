<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function index(){
		
	}
	function su(){
		$this->load->view('form/login/su');
	}
	function guru(){
		$this->load->view('form/login/guru');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */