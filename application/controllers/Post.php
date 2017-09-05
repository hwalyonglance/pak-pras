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
	function view($id,$title){
		$this->load->view('_atas');
		$this->load->view('_nav');
		$this->load->view('post/view', [
			'data' => [
				'post' => [
					'view' => $this->M_Post->get($id, $title),
					'newest' => $this->M_Post->get_newest(10),
					'popular' => $this->M_Post->get_popular(10)
				]
			]
		], FALSE);
		$this->load->view('_footer');
	}
	function add(){
		$_POST['id'] = NULL;
		$_POST['body'] = str_replace('"', 'PP_DOUBLE_QUOTE', str_replace('\'', 'PP_SINGLE_QUOTE', $_POST['body']));
		$id = $this->M_Post->add($_POST);
		redirect('post/view/'.$id.'/'.$_POST['title']);
	}
	function update(){
		$_POST['body'] = str_replace('"', 'PP_DOUBLE_QUOTE', str_replace('\'', 'PP_SINGLE_QUOTE', $_POST['body']));
		$this->M_Post->update($_POST);
		redirect('post/view/'.$_POST['id'].'/'.$_POST['title']);
	}
	function delete(){
		$this->M_Post->delete($_POST['id']);
		redirect('guru/post');
	}
	function encodeURI(){
		$this->output->set_content_type('application/json')->set_output(json_encode(
			[ 'title' => urlencode($_POST['title']) ]
		));
	}
}

/* End of file Kegiatan.php */
/* Location: ./application/controllers/Kegiatan.php */