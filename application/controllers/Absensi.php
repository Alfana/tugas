<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {
	function __construct(){
		parent:: __construct();
		if (!isset($_SESSION['islogin'])) {
			redirect('login');
		}
		$this->load->model('m_absensi');
	}

	public function index(){
		$data['matkul'] = $this->m_absensi->get_data('matkul');
		$this->load->view('form/inabsen', $data);
	}

	public function absenkan(){
		$data = array(
			'npm' => $this->input->post('npm'), 
			'nama' => $this->input->post('nama'), 
			'hadir'    => $this->input->post('hadir')
		);
		print_r($data);
	}

	public function iabsen(){	
		$tgl_absen = $this->input->post("tgl_absen");
		$matkul = $this->input->post("matkul");
					
		$data["tgl_absen"] = $tgl_absen;
		$data["matkul"] = $matkul;
		$data['smt'] = $this->m_absensi->get_data_byID('matkul', 'id_matkul', $matkul);
		$data['mhs'] = $this->m_absensi->get_mhs();
		$this->load->view('v_absen', $data);
	}

	public function input_absen(){
		$tgl_absen  = $this->input->post('tgl_absen');
		$mhs 		= $this->input->post("mhs");
		$matkul 	= $this->input->post("matkul");
		$semester 	= $this->input->post("smt");
		$absen 		= $this->input->post("absen");

		$time 		= explode("-", $tgl_absen);
		$tahun 		= $time[0];
		$bulan 		= $time[1];

		for ($i=0; $i < sizeof($mhs) ; $i++) { 			
			if (is_array($absen) && array_key_exists($mhs[$i], $absen) ) {				
				$data = array( 
								'id_mhs' 	=> $mhs[$i] ,
								'id_matkul' => $matkul,
								'semester'	=> $semester,
								'status' 	=> "H",
								'bulan'		=> $bulan,
								'tahun'		=> $tahun,
								'date'		=> $tgl_absen
							 );
				$this->m_absensi->add_data("absensi", $data);
			}else{
				$data = array( 
								'id_mhs' 	=> $mhs[$i] ,
								'id_matkul' => $matkul,
								'semester'	=> $semester,
								'status' 	=> "A",
								'bulan'		=> $bulan,
								'tahun'		=> $tahun,
								'date'		=> $tgl_absen
							 );
				$this->m_absensi->add_data("absensi", $data);
			}
		}
		redirect("absensi");
	}

	public function matkul(){
		$data['matkul'] = $this->m_absensi->get_data('matkul');
		$this->load->view('v_matkul', $data);
	}

	function admatkul(){
		$data['status'] = "add";	
		$this->load->view('form/fmatkul', $data);
	}

	function addmatkul(){
		$data = array(
	      'id_matkul' => '',
	      'matkul' => $this->input->post('matkul'),
	      'semester' => $this->input->post('smt')
	      );

		$this->m_absensi->add_data('matkul', $data);
		redirect('absensi/matkul');
	}

	public function editmatkul($id){
		$data['status'] = "edit";
		$data['matkul'] = $this->m_absensi->get_data_byID("matkul", "id_matkul", $id);
		$this->load->view('form/fmatkul', $data);
	}

	function ematkul(){
		$id = $this->input->post('id_matkul');
		$data = array(
	      'matkul' => $this->input->post('matkul'),
	      'semester' => $this->input->post('smt')
	    );

		$this->m_absensi->edit_data('matkul', 'id_matkul', $id, $data);
		redirect('absensi/matkul');
	}

	function delmatkul($id){
		$this->m_absensi->delete_data('matkul', 'id_matkul', $id);
		redirect('absensi/matkul');
	}
}