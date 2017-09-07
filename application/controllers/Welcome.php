<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_Post');
	}
	public function index(){
		$this->load->view('welcome_message',[
			'data' => [
				'post' => [
					'newest' => $this->M_Post->get_newest(10),
					'popular' => $this->M_Post->get_popular(10)
				]
			]
		]);
	}
	public function about(){
		$this->load->view('about');
	}
}
