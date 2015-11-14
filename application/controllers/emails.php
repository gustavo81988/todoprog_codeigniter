<?

class Emails extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    function index(){
        $datos['titulo'] = "Envio de Emails";
        $datos['contenido'] = "emails";
        $this->load->view('templates/frontend/template',$datos);

    }
    
    function enviar(){
        
        $this->load->library('email');
        require_once 'application/libraries/swiftmailer/swift_required.php';
        $destinatario = $this->input->post('destinatario');
        $asunto = $this->input->post('asunto');
        $mensaje = $this->input->post('mensaje');
        
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->from('desarrollo81988@gmail.com','Gustavo Ramírez');
        $this->email->to($destinatario);
        #$this->email->bcc('gustavo81988@yahoo.com,gustavo81988@hotmail.com');
        $this->email->reply_to('desarrollo81988@gmail.com','Contacto');
        $this->email->subject($asunto);
        $this->email->message($mensaje);
        $this->email->set_alt_message('Tu correo no recibe html');
        $this->email->send();
        
        redirect('emails');
        
    }
    
    
}