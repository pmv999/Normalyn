<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {
    public function __construct(){
		parent::__construct();
        $this->load->helper(array('getmenu'));
        $this->load->model('Users');
        $this->load->library(array('form_validation'));
	}
	public function index()
	{
		$data['menu']=main_menu();
        $this->load->view('/registro',$data);
    }
    public function create(){
        $usr=$this->input->post('usr');
        $email=$this->input->post('email');
        $pass=$this->input->post('pass');
        $pass_conf=$this->input->post('pass_conf');

        $config = array(
            array(
                    'field' => 'usr',
                    'label' => 'Nombre de usuario',
                    'rules' => 'required|alpha_numeric',
                    'errors' => array(
                        'required' => 'El campo %s esta vacío.',
                    ),
            ),
            array(
                'field' => 'email',
                'label' => 'Correo',
                'rules' => 'required|valid_email',
                'errors' => array(
                    'valid_email' => 'El %s no es valido.',
                    'required' => 'El campo %s esta vacío.',
                ),
            ),
            array(
                    'field' => 'pass',
                    'label' => 'Contraseña',
                    'rules' => 'required',
                    'errors' => array(
                        'required' => 'El campo %s esta vacío.',
                    ),
            ),
            array(
                    'field' => 'pass_conf',
                    'label' => 'Confirmacion de contraseña',
                    'rules' => 'required',
                    'errors' => array(
                        'required' => 'El campo %s esta vacío.',
                    ),
            )
            
        );
        
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE){
            $data['menu']=main_menu();
            $this->load->view('registro',$data);
        }else{
            $datos=array(
                'usr_nombre' => $usr,
                'usr_correo' =>$email,
                'usr_pass' =>$pass,
                'usr_tipo' =>'usr',
                'usr_status' =>'0',
            );
            $data['menu']=main_menu();
            if(!$this->Users->create($datos)){
                $data['msg']='Ocurrio un error al ingresar los datos intente mas tarde';
                $this->load->view('registro',$data);
            }
            $data['msg']='Registrado correctamente';
            $this->load->view('registro',$data);
        }

        
    }
}
