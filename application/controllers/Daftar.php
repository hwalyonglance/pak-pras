<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Daftar extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_Guru');
	}
	function guru(){
		$this->load->view('guru/index', [
			'data' => [
				'teachers' => $this->M_Guru->gets()
			]
		]);
		$this->load->view('_footer');		
	}
	function murid(){

	}
	function calon_murid($id=''){
		$this->load->view('_atas');
		$data = [
			'display' => 'list',
			'murid' => $this->db->select('id,nama,asal,jk,created_at')->order_by('id','DESC')->get('f1')->result_array()
		];
		if ( ((int) $id) > 0 ) {
			$data = [
				'display' => 'detail',
				'murid' => $this->M_Murid->get($id)
			];
		}
		$this->load->view('table/murid/index', ['data'=>$data]);
		$this->load->view('_nav');
		$this->load->view('_footer');
	}
}

/* End of file Daftar.php */
/* Location: ./application/controllers/Daftar.php */