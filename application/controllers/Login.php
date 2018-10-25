<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation','session'));
		$this->load->helper(array('auth/login_rules'));
		$this->load->model('Auth');
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function validate(){
		$this->form_validation->set_error_delimiters('', '');
		$rules=getLoginRules();
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run() == FALSE){
			$errors = array(
				'email' => form_error('email'),
				'pass' => form_error('pass'),
			);
			echo json_encode($errors);
			$this->output->set_status_header(400);
		}else{
			$email = $this->input->post('email');
			$pass = $this->input->post('pass');
			if(!$res = $this->Auth->login($email,$pass)){
				echo json_encode(array('msg'=>'Verifique sus credenciales'));
				$this->output->set_status_header(401);
				exit;
			}
			$data=array(
				'correo' => $res->usr_correo,
				'tipo' => $res->usr_tipo,
				'status' => $res->usr_status,
				'usuario' => $res->usr_nombre,
				'is_logged' => TRUE,
			);
			$this->session->set_userdata($data);
			$this->session->set_flashdata('msg',$data['usuario']);
			echo json_encode(array("url"=>base_url('dashboard')));
			
		}
	}
	public function logout(){
		$var = array('correo','tipo','status','usuario','is_logged');
		$this->session->unset_userdata($var);
		$this->session->sess_destroy();
		redirect('login');
	}
}
