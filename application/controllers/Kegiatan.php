<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Kegiatan extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function index(){
		$this->load->view('kegiatan/index');		
	}

}

/* End of file Kegiatan.php */
/* Location: ./application/controllers/Kegiatan.php */