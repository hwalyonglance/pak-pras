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
	function guru(){
		$this->load->view('su/guru', [
			'data' => [
				'teachers' => $this->M_Su->guru_gets()
			]
		]);
	}
	function guru_add(){
		if ( ! $this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
			echo "<pre>";
			print_r ($error);
			echo "</pre>";
		}else{
			$_POST['foto'] = $this->upload->data()['file_name'];
			$this->M_Su->guru_add($_POST);
		}
	}
	function guru_update(){
		$data = $_POST;
		if ($_FILES['foto']['error'] < 1) {
			if ( ! $this->upload->do_upload('foto')){
				$error = array('error' => $this->upload->display_errors());
				echo "<pre>";
				print_r ($error);
				echo "</pre>";
			}else{
				$data['foto'] = $this->upload->data()['file_name'];
				unlink(BASEPATH.'..\\uploads\\guru\\'.$this->db->select('foto')->where('id',$data['id'])->get('guru')->result_array()[0]['foto']);
			}
		}
		$this->M_Su->guru_update($data);
	}
	function guru_delete(){
		$this->M_Su->guru_delete($_POST['guru_delete_id']);
		redirect('su/guru');
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