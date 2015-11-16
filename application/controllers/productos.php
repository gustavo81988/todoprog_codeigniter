<?php

Class Productos extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    function lista_productos(){
        $datos['titulo'] = "Listado de Productos";
        $datos['contenido'] = "lista_productos";
        $this->load->view('templates/frontend/template',$datos);
    }
    
    function agregar_carrito(){
        $opciones = Array();
        
        if($this->input->post('opciones')){
            $opciones = $this->input->post('opciones');
        }
        
        $data = Array(
           'id'=> $this->input->post('id_producto'),
           'qty'=> $this->input->post('cantidad'),
           'price'=> $this->input->post('precio_producto'),
           'name'=> $this->input->post('nombre_producto'),
           'options'=>$opciones,
        );

        $this->cart->insert($data);
        redirect('index.php/carrito');
    }
    
    function mostrar_carrito(){
        $datos['titulo'] = "Listado de Productos";
        $datos['contenido'] = "carrito";
        $this->load->view('templates/frontend/template',$datos);
    }
    
    function vaciar_carrito() {
        $this->cart->destroy();
        redirect('carrito');
    }
    
    function actualizar_carrito(){
        
        $data = $this->input->post();
        $this->cart->update($data);
        redirect("carrito");
        
    }
    
}