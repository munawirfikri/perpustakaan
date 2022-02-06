<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{

	public function __construct(){
		parent::__construct();

		$this->load->library('form_validation');
	}

	public function index()
	{

		$this->form_validation->set_rules('username', 'username', 'trim|required', array('required' => 'Silahkan masukkan Username!'));
		$this->form_validation->set_rules('password', 'password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('auth/login');
		}else{
			// validasi sukses
			$this->_login();
		}
		
	}

	private function _login()
	{

		if ( isset($_POST['submit']) ) {

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('pengguna', ['username' => $username, 'password' =>$password ] )->row_array();
			
	if ($user) {
		$this->session->set_flashdata('flash', 'loginSuccess');
			if($user['tipe_user'] == 1){
				$this->session->set_userdata($user);
				redirect ('admin');
			}else if($user['tipe_user'] == 2){
				$this->session->set_userdata($user);
				redirect ('pengunjung');
			}else if($user['tipe_user'] == 3){
				$this->session->set_userdata($user);
				redirect ('pimpinan');
			}
		} else {
			$this->session->set_flashdata('flash', 'loginFailed');
			redirect('auth');
		}
        redirect('auth');
		}
		
	}

	public function logout()
	{
		session_destroy();
		redirect('auth');
	}

}
