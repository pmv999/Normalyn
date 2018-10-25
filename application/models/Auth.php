<?php
class Auth extends CI_Model{
    function __construct(){
        $this->load->database();
    }
    public function login($mail, $password){
        $data = $this->db->get_where('usuarios',array('usr_correo'=> $mail,'usr_pass'=>$password),1);
        if(!$data->result()){
            return false;
        }
        return $data->row();
    }
}