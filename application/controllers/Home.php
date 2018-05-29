<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent:: __construct();
		if (!isset($_SESSION['islogin'])) {
			redirect('login');
		}
		$this->load->model('m_absensi');
	}

	public function index(){
		$this->load->view('v_home');
	}
}
