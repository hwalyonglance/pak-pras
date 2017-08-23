<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Kegiatan extends CI_Controller {
	function __construct(){
		parent::__construct();
		require_once APPPATH.'/third_party/mpdf/mpdf.php';
		// $this->pdf =  new mPDF("en-GB-x", "A4", "", "", "15", "15", "15", "15", "6", "3", "P");
		$this->pdf =  new mPDF();
	}
	function index(){
		$this->pdf->WriteHTML($this->load->view('kegiatan/index', [], TRUE));
		$this->pdf->output('E');
	}

}

/* End of file Kegiatan.php */
/* Location: ./application/controllers/Kegiatan.php */