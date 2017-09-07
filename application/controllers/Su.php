<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Su extends CI_Controller {
	function __construct(){
		parent::__construct();
		if (!$this->session->userdata('is_role_0_logged_in')) {
			redirect('login/su');
		}
		$this->load->model('M_Su');
		$this->load->model('M_Guru');
		$this->load->model('M_Murid');
		$this->load->model('M_Post');
	}
	function index(){
		$this->load->view('su/index');	
	}
	function murid($calon='',$type_or_id='', $id=''){
		$this->load->view('_atas');
		$this->load->view('su/_nav');
		$status = $calon ? '0' : '1';
		if ($type_or_id === 'edit') {
			$this->load->view('form/murid/index',[
				'data' => [
					'display' => 'detail',
					'murid' => $this->M_Murid->get($id, $status),
					'show' => true
				]
			]);
		} else {
			$data = [];
			if ($type_or_id === '') {
				$data = [
					'display' => 'list',
					'murid' => $this->db->select('id,nama,skhu,asal,jk,created_at')->where('status', $status)->order_by('id','DESC')->get('f1')->result_array(),
					'show' => true,
					'period' => array_unique(array_map(function($val){
									return substr($val['created_at'], 0, 4);
								}, $this->M_Murid->get_period($status)))
				];
			} else if ( ((int) $type_or_id) > 0 ) {
				$data = [
					'display' => 'detail',
					'murid' => $this->M_Murid->get($type_or_id, $status),
					'show' => true
				];
			}
			$this->load->view('table/murid/index', ['data'=>$data]);
		}
	}
	function guru(){
		$this->load->view('_atas');
		$this->load->view('su/_nav');
		$this->load->view('table/guru/index', [
			'data' => [
				'teachers' => $this->M_Guru->gets()
			]
		]);
		$this->load->view('_footer');
	}
	function post($action = '', $id = ''){
		$this->load->view('_atas');
		$this->load->view('su/_nav');
		switch ($action) {
			case 'add':
				$this->load->view('form/post/index', [
					'data' => [
						'id_creator' => $this->session->userdata('role_0_id'),
						'role' => '0',
						'action' => 'add'
					]
				]);
			break;
			case 'edit':
				$post = $this->M_Post->get_edit($id, $this->session->userdata('role_0_id'));
				$this->load->view('form/post/index', [
					'data' => [
						'id_creator' => $this->session->userdata('role_0_id'),
						'role' => '0',
						'action' => 'edit',
						'post' => [
							'id' => $id,
							'title' => $post['title'],
							'body' => $post['body'],
						]
					]
				]);
			break;
			default:
				$this->load->view('_post',[
					'data' => [
						'posts' => $this->M_Post->gets($this->session->userdata('role_0_id')),
						'action' => 'su'
					]
				]);
			break;
		}		
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