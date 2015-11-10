<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->library('calendar');
        $this->load->library('user_agent');
        $this->load->view('welcome_message');
    }
    
    
}
