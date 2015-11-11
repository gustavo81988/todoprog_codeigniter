<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Articulos');
    }

    //Página principal
    public function index() {
        $datos['articulos'] = $this->Articulos->lista_articulos();
        $datos['titulo'] = "Plantilla con CI";
        $datos['contenido'] = "index";
        $this->load->view('templates/frontend/template', $datos);
    }

//    public function detalle_articulo($id_articulo) {
//        $id_limpio = $this->security->xss_clean($id_articulo);
//        $datos['detalle'] = $this->Articulos->detalle_articulo($id_articulo);
//        $datos['titulo'] =$datos['detalle']->nombre_articulo;
//        $this->load->view("detalle",$datos);
//    }
    //Muestra un artículo por nombre
//    public function detalle_articulo($nombre_articulo) {
//        $this->output->enable_profiler(TRUE);
//        $nombre_limpio = str_replace('-', '', $nombre_articulo);
//        $id_limpio = $this->security->xss_clean($nombre_articulo);
//        $datos['detalle'] = $this->Articulos->detalle_articulo($id_limpio);
//        $datos['titulo'] =$datos['detalle']->nombre_articulo;
//        $this->load->view("detalle",$datos);
//    }
    //Muestra un artículo por url
    public function detalle_articulo($url_articulo) {
        $url_limpia = $this->security->xss_clean($url_articulo);
        $datos['detalle'] = $this->Articulos->detalle_articulo($url_limpia);
        $datos['titulo'] = "Titulo de mi sitio";
        $datos['contenido'] = "detalle";
        $this->load->view('templates/frontend/template', $datos);
    }

    function calendario() {
        
        //$this->config->load('my_config',TRUE);
        //$this->config->set_item('item2','hola');
        $this->load->library('calendar');
        $datos['titulo'] = "Libreria Calendar";
        $datos['contenido'] = "calendario";
        $this->load->view('templates/frontend/template', $datos);
        
    }

}
