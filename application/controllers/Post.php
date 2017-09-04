<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Post extends CI_Controller {
	function __construct(){
		parent::__construct();
		// $this->load->model('M_Murid');
		$this->load->model('M_Post');
		require_once APPPATH.'/third_party/mpdf/mpdf.php';
		$this->pdf =  new mPDF("en-GB-x", "A4", "", "", 10,10,10,10, "6", "3", "P");
		// $this->pdf =  new mPDF();
	}
	function index(){
		// error_reporting(0);
		// $this->pdf->WriteHTML($this->load->view('_atas',[],TRUE));
		// $this->pdf->WriteHTML($this->load->view('table/murid/index', ['data' => [
		// 	'display' => 'detail',
		// 	'murid' => $this->M_Murid->get(3)
		// ]], TRUE));
		// $this->pdf->output('reports/murid/Doni.pdf');
		// redirect('reports/murid/Doni.pdf');
		$this->load->view('kegiatan/index');		
	}
	function s($id,$title){
		$this->load->view('_atas');
		$this->load->view('_nav');
		$this->load->view('_footer');
	}
	function add(){
		$_POST['body'] = str_replace('"', 'DOUBLE_QUOTE', str_replace('\'', 'SINGLE_QUOTE', $_POST['body']));
		$this->M_Post->add($_POST);
		redirect('posts/'.$_POST['title']);
	}
	function encodeURI(){
		$this->output->set_content_type('application/json')->set_output(json_encode(
			[ 'title' => urlencode($_POST['title']) ]
		));
	}
}

/* End of file Kegiatan.php */
/* Location: ./application/controllers/Kegiatan.php */