<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Pdf extends CI_Controller {
	function __construct(){
		parent::__construct();
		if (!$this->session->userdata('is_role_0_logged_in')) {
			redirect('login/admin');
		}
		$this->load->library('zip');
		$this->zip->compression_level = 9;
		$this->load->model('M_Murid');
		require_once APPPATH.'/third_party/mpdf/mpdf.php';
		$this->pdf =  new mPDF("en-GB-x", "A4", "", "", 10,10,10,10, "6", "3", "P");
	}
	function murid($from_or_id,$to=''){
		error_reporting(1);
		if ($to === '') {
			$this->pdf->WriteHTML($this->load->view('_atas',[],TRUE));
			$this->pdf->WriteHTML($this->load->view('table/murid/index', ['data' => [
				'display' => 'detail',
				'murid' => $this->M_Murid->get($from_or_id)
			]], TRUE));
			$this->pdf->output('reports/murid/'.$from_or_id.'.pdf');
			redirect('reports/murid/'.$from_or_id.'.pdf');
		}else{
			$gg = $this->db->select('id,nama,asal')->where('created_at >=',$from_or_id.'-01-01 00:00:00')
					->where('created_at <=', $to.'-01-01 00:00:00')->get('f1')->result_array();
			$i = 1;
			mkdir('reports/murid/'.$from_or_id.'-'.$to);
			foreach ($gg as $key => $value) {
				$this->create([
					'data' => [
						'display' => 'detail',
						'murid' => $this->M_Murid->get($value['id']),
						'show' => TRUE
					],
				], $i, $from_or_id, $to, $value['nama'], $value['asal']);
				$i++;
			}
			$this->zip->read_dir('reports/murid/'.$from_or_id.'-'.$to, FALSE);
			echo 'reports/murid/'.$from_or_id.'-'.$to;
			$this->zip->download('report_murid_'.$from_or_id.'_'.$to.'.zip');
		}
	}
	private function create($data, $i, $from, $to, $nama, $asal){
		$this->pdf =  new mPDF("en-GB-x", "A4", "", "", 10,10,10,10, "6", "3", "P");	
		$this->pdf->WriteHTML($this->load->view('_atas',[],TRUE));
		$this->pdf->WriteHTML($this->load->view('table/murid/index', $data, TRUE));
		$this->pdf->output('reports/murid/'.$from.'-'.$to.'/'.$i.'.'.str_replace(' ', '_', $nama).'-'.str_replace(' ', '_', $asal).'.pdf');
	}
}

/* End of file Pdf.php */
/* Location: ./application/controllers/Pdf.php */