<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Su extends CI_Controller {
	function __construct(){
		parent::__construct();
		if (!$this->session->userdata('is_role_0_logged_in')) {
			redirect('login/admin');
		}
		$this->load->model('M_Su');
		$this->load->model('M_Murid');
		$this->load->library('upload', [
			'upload_path' => './uploads/guru/',
			'allowed_types' => 'gif|jpg|png|jpeg',
			'max_size' => 4096,
			'max_width' => 4096,
			'max_height' => 4096,
			'encrypt_name' => TRUE,
		]);
	}
	function index(){
		$this->load->view('su/index');	
	}
	function murid($calon='',$type_or_id='', $id=''){
		$this->load->view('_atas');
		$this->load->view('su/_nav');
		if ($type_or_id === 'edit') {
			$this->load->view('form/murid/index',[
				'data' => [
					'murid' => $this->M_Murid->get($id)
				]
			]);
		} else {
			$data = [];
			if ($type_or_id === '') {
				$data = [
					'display' => 'list',
					'murid' => $this->db->select('id,nama,ijazah,asal,nisn,skhu,jk')->order_by('id','DESC')->get('f1')->result_array()
				];
			} else if ( ((int) $type_or_id) > 0 ) {
				$data = [
					'display' => 'detail',
					'murid' => $this->M_Murid->get($type_or_id)
				];
			}
			$this->load->view('table/murid/index', ['data'=>$data]);
		}
	}
	function posts(){
		$this->load->view('su/posts');
	}
	function logout(){
		$this->session->set_userdata([
			'is_role_0_logged_in' => FALSE
		]);
		redirect('');
	}
}

/* End of file Su.php */
/* Location: ./application/controllers/Su.php */