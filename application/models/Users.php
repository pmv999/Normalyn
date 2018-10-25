<?php
class Users extends CI_Model{
    function __construct(){
        $this->load->database();
    }
    public function create($datos){
        if(!$this->db->insert('usuarios',$datos)){
            return false;
        }
        return true;
    }
}