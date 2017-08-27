<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Pdf extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_Murid');
		require_once APPPATH.'/third_party/mpdf/mpdf.php';
		$this->pdf =  new mPDF("en-GB-x", "A4", "", "", 10,10,10,10, "6", "3", "P");
	}
	function murid($from,$to){
		error_reporting(1);
		$gg = $this->db->select('id,nama,asal')->where('created_at >=',$from.'-01-01 00:00:00')
				->where('created_at <=', $to.'-01-01 00:00:00')->get('f1')->result_array();
		$i = 1;
		mkdir('reports/murid/'.$from.'-'.$to);
		foreach ($gg as $key => $value) {
			$this->create([
				'data' => [
					'display' => 'detail',
					'murid' => $this->M_Murid->get($value['id'])
				],
			], $i, $from, $to, $value['nama'], $value['asal']);
			$i++;
		}
		redirect('reports/murid/'.$from.'-'.$to);
	}
	private function create($data, $i, $from, $to, $nama, $asal){
		$this->pdf =  new mPDF("en-GB-x", "A4", "", "", 10,10,10,10, "6", "3", "P");	
		$this->pdf->WriteHTML($this->load->view('_atas',[],TRUE));
		$this->pdf->WriteHTML($this->load->view('table/murid/index', $data, TRUE));
		$this->pdf->output('reports/murid/'.$from.'-'.$to.'/'.$i.'.'.$nama.'-'.$asal.'.pdf');
	}
}

/* End of file Pdf.php */
/* Location: ./application/controllers/Pdf.php */