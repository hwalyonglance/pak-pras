<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Zip extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('zip');
		$this->zip->compression_level = 9 ;
	}
	function index(){
		$this->zip->read_dir('reports/murid', FALSE);
		$this->zip->download('backup.zip');
	}
}

/* End of file Zip.php */
/* Location: ./application/controllers/Zip.php */