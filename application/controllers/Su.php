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
					'murid' => $this->M_Murid->get($id, $status)
				]
			]);
		} else {
			$data = [];
			if ($type_or_id === '') {
				$data = [
					'display' => 'list',
					'murid' => $this->db->select('id,nama,skhu,asal,jk,created_at')->where('status', $status)->order_by('id','DESC')->get('f1')->result_array(),
					'period' => array_unique(array_map(function($val){
									return substr($val['created_at'], 0, 4);
								}, $this->M_Murid->get_period($status)))
				];
			} else if ( ((int) $type_or_id) > 0 ) {
				$data = [
					'display' => 'detail',
					'murid' => $this->M_Murid->get($type_or_id, $status)
				];
			}
			$this->load->view('table/murid/index', ['data'=>$data]);
		}
	}
	function guru(){
		$this->load->view('_atas');
		$this->load->view('su/_nav');
		$this->load->view('/guru/index', [
			'data' => [
				'teachers' => $this->M_Guru->gets()
			]
		]);
		$this->load->view('_footer');
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