<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Pdf extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_Murid');
		require_once APPPATH.'/third_party/mpdf/mpdf.php';
		$this->pdf =  new mPDF("en-GB-x", "A4", "", "", 10,10,10,10, "6", "3", "P");
	}
	function murid($id){
		error_reporting(1);
		$this->pdf->WriteHTML($this->load->view('_atas',[],TRUE));
		$this->pdf->WriteHTML($this->load->view('table/murid/index', ['data' => [
			'display' => 'detail',
			'murid' => $this->M_Murid->get($id)
		]], TRUE));
		$this->pdf->output('reports/murid/'.$id.'.pdf');
		redirect('reports/murid/'.$id.'.pdf');
		// $this->load->view('Kegiatan/index');
	}

}

/* End of file Pdf.php */
/* Location: ./application/controllers/Pdf.php */