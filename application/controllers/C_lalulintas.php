<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_lalulintas extends CI_Controller {

    public function __construct() {
           parent::__construct();
       
        $this->load->helper('form');
        $this->load->model('M_login');
        $this->load->model('M_input_customer');
        $this->model =$this->M_input_customer; 
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->database();
        $this->load->helper('html');

}	
public function index(){
    $this->load->view('umum/V_header');
    $this->load->view('umum/V_sidebar');
    $this->load->view('umum/V_content');
    $this->load->view('lalulintas/V_input_lalin');
    $this->load->view('umum/V_footer');
 
}
public function input_lalin(){
    
    if(isset($_POST['btnInput_lalin'])){
        
        $input_lalin = array(
            
            'keg'      => $this->input->post('keg'),
            'tanggal'      => $this->input->post('tanggal'),
            'pengirim'      => $this->input->post('pengirim'),
            'komoditi'      => $this->input->post('komoditi'),
            'jumlah'      => $this->input->post('jumlah'),
            'satuan'      => $this->input->post('satuan'),
            'tujuan'      => $this->input->post('tujuan'),
            'negara'      => $this->input->post('negara'),
            
        );
        
        $this->db->insert('lalulintas',$input_lalin);
        
        redirect('C_lalulintas/data_lalin');
    }else{
        echo 'DATA GAGAL SIMPAN';
    }
    
}
public function data_lalin(){
    
    $this->load->view('umum/V_header');
    $this->load->view('umum/V_sidebar');
    $this->load->view('umum/V_content');
    $this->load->view('lalulintas/V_data_lalin');
    $this->load->view('umum/V_footer');
  
    
}
public function data_lalin_json(){
    
$table = 'lalulintas';
$primaryKey = 'id_lalulintas';
$columns = array(
	array( 'db' => 'keg',         'dt' => 0 ),
	array( 'db' => 'tanggal',     'dt' => 1 ),
	array( 'db' => 'pengirim',    'dt' => 2 ),
	array( 'db' => 'komoditi',    'dt' => 3 ),
	array( 'db' => 'jumlah',    'dt' => 4 ),
	array( 'db' => 'satuan',    'dt' => 5 ),
	array( 'db' => 'tujuan',    'dt' => 6 ),
	array( 'db' => 'negara',    'dt' => 7 ),
	
        
        
        array( 'db' => 'id_lalulintas',    
               'dt' => 8,
               'formatter' => function ( $d, $row) {
                return anchor('C_lalulintas/hapus/'.md5($d),'<i class="fa fa-trash"></i>',"class='btn btn-sm btn-danger'");
                       
            })
           
            );
       
            
           
$sql_details = array(
	'user' => $this->db->username,
	'pass' => $this->db->password,
	'db'   => $this->db->database,
	'host' => $this->db->hostname
);


$this->load->library('ssp');

echo json_encode(
	SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);


   
    
}
public function hapus(){
      
   
    $id_lalulintas = $this->uri->segment(3);
    
    $this->db->get_where('lalulintas',['md5(id_lalulintas)'=>$id_lalulintas]);
   
    $this->db->delete('lalulintas',['md5(id_lalulintas)'=>$id_lalulintas]);
    
    redirect('C_lalulintas/data_lalin');
    
 }



}

 
 
 