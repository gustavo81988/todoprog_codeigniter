<?php

class Formularios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
    }

    function index() {
        $datos['titulos'] = 'Validación de formularios';
        $datos['contenido'] = 'formularios';
        $this->load->view('templates/frontend/template', $datos);
    }

    function validar() {

        $rules = array(
            array('field' => 'nombre', 'label' => 'Nombre', 'rules' => 'required|min_length[4]|max_length[10]|alpha'),
            array('field' => 'email', 'label' => 'Correo Eletrónico', 'rules' => 'required|valid_email'),
//            array('field' => 'mensaje', 'label' => 'Mensaje', 'rules' => 'required'),
//            array('field' => 'opciones', 'label' => 'Opciones', 'rules' => 'required'),
//            array('field' => 'colores[]', 'label' => 'Colores', 'rules' => 'required'),
//            array('field' => 'idiomas', 'label' => 'Idioma', 'rules' => 'required')
        );

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() === FALSE) {
            $datos['titulos'] = 'Validación de formularios';
            $datos['contenido'] = 'formularios';
            $this->load->view('templates/frontend/template', $datos);
        }else {
            $datos['titulos'] = 'Validación de formularios';
            $datos['contenido'] = 'formulario_correcto';
            $this->load->view('templates/frontend/template', $datos);
        }
        
    }

}
