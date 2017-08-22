<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_Pdf {
	protected $CI;
	function __construct(){
		$this->CI =& get_instance();
		require_once APPPATH.'/third_party/mpdf/src/Mpdf.php';
		$this->MPdf = new Mpdf();
	}
	

}

/* End of file M_Pdf.php */
/* Location: ./application/libraries/M_Pdf.php */
