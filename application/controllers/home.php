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

        $config['template'] = '

            {table_open}<table border="1" cellpadding="10" cellspacing="0">{/table_open}

            {heading_row_start}<tr>{/heading_row_start}

            {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
            {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
            {heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

            {heading_row_end}</tr>{/heading_row_end}

            {week_row_start}<tr>{/week_row_start}
            {week_day_cell}<td>{week_day}</td>{/week_day_cell}
            {week_row_end}</tr>{/week_row_end}

            {cal_row_start}<tr>{/cal_row_start}
            {cal_cell_start}<td>{/cal_cell_start}

            {cal_cell_content}<a href="{content}">{day}</a>{/cal_cell_content}
            {cal_cell_content_today}<div class="highlight"><a href="{content}">{day}</a></div>{/cal_cell_content_today}

            {cal_cell_no_content}{day}{/cal_cell_no_content}
            {cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

            {cal_cell_blank}&nbsp;{/cal_cell_blank}

            {cal_cell_end}</td>{/cal_cell_end}
            {cal_row_end}</tr>{/cal_row_end}

            {table_close}</table>{/table_close}
        
        ';

        $this->load->library('calendar', $config);
        $datos['titulo'] = "Libreria Calendar";
        $datos['contenido'] = "calendario";
        $this->load->view('templates/frontend/template', $datos);
    }

}
