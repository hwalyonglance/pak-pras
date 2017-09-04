<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Post extends CI_Controller {
	function __construct(){
		parent::__construct();
		// $this->load->model('M_Murid');
		$this->load->model('M_Post');
		require_once APPPATH.'/third_party/mpdf/mpdf.php';
	}
	function index(){
		$this->load->view('kegiatan/index');		
	}
	function s($id,$title){
		$this->load->view('_atas');
		$this->load->view('_nav');
		$this->load->view('post/view', [
			'data' => [
				'post' => $this->M_Post->get($id, $title)
			]
		], FALSE);
		$this->load->view('_footer');
	}
	function add(){
		$_POST['body'] = str_replace('"', 'PP_DOUBLE_QUOTE', str_replace('\'', 'PP_SINGLE_QUOTE', $_POST['body']));
		$id = $this->M_Post->add($_POST);
		redirect('post/s/'.$id.'/'.$_POST['title']);
	}
	function encodeURI(){
		$this->output->set_content_type('application/json')->set_output(json_encode(
			[ 'title' => urlencode($_POST['title']) ]
		));
	}
}

/* End of file Kegiatan.php */
/* Location: ./application/controllers/Kegiatan.php */