<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Pendaftaran extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function murid(){
		$this->load->view('_atas');
		$this->load->view('form/murid/index',[
			'data' => [
				'display' => NULL,
				'murid' => NULL
			]
		]);
		$this->load->view('_nav');
		$this->load->view('_footer');
	}
}

/* End of file Pendaftaran.php */
/* Location: ./application/controllers/Pendaftaran.php */