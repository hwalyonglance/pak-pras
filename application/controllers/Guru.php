<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Guru extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_Guru');
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
		$this->load->view('_atas');
		$this->load->view('guru/_nav');
	}
	function add_post(){
		$this->load->view('_atas');
		$this->load->view('guru/_nav');
		$this->load->view('form/kegiatan/index', [
			'data' => [
				'id' => $this->session->userdata('role_1_id'),
				'from' => 'guru'
			]
		]);
	}
	function add(){
		if ( ! $this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
			echo "<pre>";
			print_r ($error);
			echo "</pre>";
		}else{
			$_POST['foto'] = $this->upload->data()['file_name'];
			$_POST['p'] = password_hash($_POST['p'], PASSWORD_BCRYPT);
			$this->M_Guru->add($_POST);
		}
	}
	function update(){
		$data = $_POST;
		if ($_FILES['foto']['error'] < 1) {
			if ( ! $this->upload->do_upload('foto')){
				$error = array('error' => $this->upload->display_errors());
				echo "<pre>";
				print_r ($error);
				echo "</pre>";
			}else{
				$data['foto'] = $this->upload->data()['file_name'];
				unlink(BASEPATH.'..\\uploads\\guru\\'.$this->db->select('foto')->where('id',$data['id'])->get('teachers')->result_array()[0]['foto']);
			}
		}
		$this->M_Guru->update($data);
	}
	function delete(){
		$this->M_Guru->delete($_POST['guru_id']);
	}
	function u(){
		$this->output->set_content_type('application/json')->set_output(json_encode(
			count($this->db->select('u')->where('u',$_POST['u'])->get('teachers')->result_array())
		));
	}
}

/* End of file Guru.php */
/* Location: ./application/controllers/Guru.php */