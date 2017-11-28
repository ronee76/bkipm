<?php
 class M_input_customer extends CI_Model{
     
     public $nama;
     public $email;
     public $password1;
     public $password2;
     public $status;
     public $level;
     public $gambar;
     
     public $labels = [];
     
     public function __construct() {
         parent::__construct();
         $this->labels = $this->_attributeLabels();
         $this->load->database();
         
     }
   
     
  private function _attributeLabels(){
         
     return[
         'nama'             =>'nama',
         'email'            =>'email',
         'status'           =>'status',
         'level'            =>'level',
         'password1'        =>'password1',
         'password2'         =>'password2',
         'gambar'            =>'gambar',
        
         
         ];
         
     }
     
 }

