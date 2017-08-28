<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Murid extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_Murid');
		$this->load->library('upload', [
			'upload_path' => './uploads/murid/',
			'allowed_types' => 'gif|jpg|png|jpeg',
			'max_size' => 4096,
			'max_width' => 4096,
			'max_height' => 4096,
			'encrypt_name' => TRUE,
		]);
	}
	function index(){
		echo "string";
	}
	function daftar(){
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
	function add(){
		$_POST[1]['tanggal_l'] = date('Y-m-d',strtotime($_POST[1]['tanggal_l']));
		$_POST[1]['lulus'] = date('Y-m-d',strtotime($_POST[1]['lulus']));
		$_POST[3]['lahir'] = date('Y-m-d',strtotime($_POST[3]['lahir']));
		$_POST[4]['lahir'] = date('Y-m-d',strtotime($_POST[4]['lahir']));
		$_POST[5]['lahir'] = date('Y-m-d',strtotime($_POST[5]['lahir']));
		if ( ! $this->upload->do_upload('1_foto')){
			$error = array('error' => $this->upload->display_errors());
			echo "<pre>";
			print_r ($error);
			echo "</pre>";
		}else{
			$_POST[1]['foto'] = $this->upload->data()['file_name'];
			$this->M_Murid->add($_POST);
		}
	}
	function update(){
		$_POST[1]['tanggal_l'] = date('Y-m-d',strtotime($_POST[1]['tanggal_l']));
		$_POST[1]['lulus'] = date('Y-m-d',strtotime($_POST[1]['lulus']));
		$_POST[3]['lahir'] = date('Y-m-d',strtotime($_POST[3]['lahir']));
		$_POST[4]['lahir'] = date('Y-m-d',strtotime($_POST[4]['lahir']));
		$_POST[5]['lahir'] = date('Y-m-d',strtotime($_POST[5]['lahir']));
		$data = $_POST;
		if ($_FILES['1_foto']['error'] < 1) {
			if ( ! $this->upload->do_upload('1_foto')){
				$error = array('error' => $this->upload->display_errors());
				echo "<pre>";
				print_r ($error);
				echo "</pre>";
			}else{
				$data[1]['foto'] = $this->upload->data()['file_name'];
				unlink(BASEPATH.'..\\uploads\\murid\\'.$this->db->select('foto')->where('id',$data[1]['id'])->get('f1')->result_array()[0]['foto']);
			}
		}
		$this->M_Murid->update($data);
	}
	function calon($id=''){
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

/* End of file Murid.php */
/* Location: ./application/controllers/Murid.php */