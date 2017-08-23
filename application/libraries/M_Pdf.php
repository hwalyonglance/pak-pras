<?php defined('BASEPATH') OR exit('No direct script access allowed');
class M_Pdf {
	protected $CI;
	function __construct(){
		$this->CI =& get_instance();
		log_message('Debug','mpdf loaded');
	}
	function load($param=NULL){
		
	}

}

/* End of file M_Pdf.php */
/* Location: ./application/libraries/M_Pdf.php */
