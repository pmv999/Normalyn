<?php
function getLoginRules(){
    return array(
        array(
            'field' => 'email',
            'label' => 'Correo',
            'rules' => 'required|trim|valid_email',
            'errors' => array(
                'valid_email' => 'El %s no es valido.',
                'required' => 'El campo %s es requerido.',
            ),
        ),
        array(
                'field' => 'pass',
                'label' => 'Contraseña',
                'rules' => 'required|trim',
                'errors' => array(
                    'required' => 'El campo %s es requerido.',
                ),
        ),
    );
}