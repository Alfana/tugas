<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('M_login');
	}

	public function index(){
		$this->load->view('v_login');
	}

	public function login(){
		$user = $this->input->post('username');
		$pass = $this->input->post('password');

		$hasil = $this->M_login->login('user', $user, $pass);

		if ($hasil == 1) {
			$data_user = $this->M_login->get_data_user('user', $user, $pass);
			$this->session->set_userdata(
				array( 
					'islogin' 	=> TRUE,
		            'nama' => $data_user->nama
				));
			redirect('absensi/home');   
		}else{
			$this->session->set_userdata(array('error' => TRUE ));
			redirect('login');
		}
	}

	public function logout(){
		session_destroy();
		$this->session->sess_destroy();
		redirect('login');
	}
}
