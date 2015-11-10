<?php

class Articulos extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    function  lista_articulos(){
        $this->db->order_by('id_articulo', 'ASC');
        $lista_articulos = $this->db->get("articulos");
        return $lista_articulos->result();
    }
    
    //muestra el detalle de un articulo por ID
//    function detalle_articulo($id_articulo){
//        $this->db->where('id_articulo',$id_articulo);
//        $consulta = $this->db->get("articulos");
//        return $consulta->row();
//    }
//
        
    //muestra el detalle de un artículo por su nombre
//    function detalle_articulo($nombre_articulo){
//        $this->db->where('nombre_articulo',$nombre_articulo);
//        $consulta = $this->db->get("articulos");
//        return $consulta->row();
//    }
    
    //Muestra un articulo por url
    function detalle_articulo($url_articulo){
        
        $this->db->where('url_articulo',$url_articulo);
        $consulta = $this->db->get("articulos");
        return $consulta->row();
        
    }
    
    
}
