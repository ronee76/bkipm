<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

    public function __construct() {
           parent::__construct();
       
        $this->load->helper('form');
        $this->load->model('M_login');
        $this->load->library('session');
        
        $this->load->helper('url');
        $this->load->database();

}	
public function index(){
     
    $this->load->view('umum/V_header');
    $this->load->view('umum/V_sidebar');
    $this->load->view('umum/V_content');
    $this->load->view('umum/V_footer');
    
    
    
}

}