<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_produk extends CI_Controller {

    public function __construct() {
           parent::__construct();
       
        $this->load->helper('form');
        $this->load->model('M_login');
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->helper('url');
        $this->load->database();
        $this->load->helper('html');

}	
public function index(){
    
    $this->load->view('umum/V_header');
    $this->load->view('umum/V_sidebar');
    $this->load->view('umum/V_content');
    $this->load->view('produk/V_input_produk');
    $this->load->view('produk/V_daftar_produk');
    $this->load->view('umum/V_footer');
}

public function simpan_produk(){
    
    
    if(isset($_POST['btnDaftar'])){
                    $config = [
                    'upload_path'    => './uploads/produk/',
                    'allowed_types' => 'jpg|gif|png|zip|pdf',
                    'max_size'      =>'200000000'
                              ];
     $field_name ="gambar_produk";
            $this->upload->initialize($config);                
            $this->load->library('upload', $config);

    if ($this->upload->do_upload($field_name)){

        $image_data = $this->upload->data();
        $config2['image_library']  ='gd2';
        $config2['source_image']   =$this->upload->upload_path.$this->upload->file_name;
        $config2['maintain_ratio'] = TRUE;
        $config2['width']          = 800;
        $config2['height']         = 800;
        
        $this->load->library('image_lib',$config2);
        $this->image_lib->initialize($config2);
        $this->image_lib->resize();

////membuat thumbnail ////

        $conf['image_library'] ='gd2';
        $conf['source_image'] =$this->upload->upload_path.$this->upload->file_name;
        $conf['new_image']='./uploads/produk_thumb/';
        $conf['create_thumb'] = TRUE;
        $conf['overwrite']=TRUE;
        $conf['maintain_ratio'] = TRUE;
        $conf['width']         = 200;
        $conf['height']       = 200;
        
        $this->load->library('image_lib',$conf);

        $this->image_lib->initialize($conf);
        $this->image_lib->resize();
        
        $input_produk = array(
            'nama_produk'        => $this->input->post('nama_produk'),
            'status_produk'      => $this->input->post('status_produk'),
            'harga_produk'       => $this->input->post('harga_produk'),
            'stok_produk'        => $this->input->post('stok_produk'),
            'gambar_produk'      => $this->upload->file_name,
        );
         
        $this->db->insert('produk',$input_produk); 
                
        redirect('C_produk');
     
        
    }else{
        echo  $this->upload->display_errors();
    }
        
    }else{
        echo 'DAFTAR GAGAL';
    }
    
}


public function data_produk(){

$table = 'produk';
$primaryKey = 'id_produk';
$columns = array(
	array( 'db' => 'nama_produk',      'dt' => 0 ),
	array( 'db' => 'status_produk',     'dt' => 1 ),
	array( 'db' => 'stok_produk',       'dt' => 2 ),
	array( 'db' => 'harga_produk',      'dt' => 3 ),
	
        array( 'db' => 'gambar_produk',    
               'dt' => 4,
               'formatter' => function ( $d, $row) {
          
       $image = array(
        'src'   => 'uploads/produk_thumb/'.$d,
        'alt'   => '',
        'width' => '80',
        'height'=> '80',
       );
         return  img($image);
               
                       
            }),
            
        array( 'db' => 'id_produk',    
               'dt' => 5,
               'formatter' => function ( $d, $row) {
                return anchor('C_produk/read/'.$d,'<i class="fa fa-eye"></i>',"class='btn btn-sm btn-success'").' '.
                       anchor('C_produk/update/'.$d,'<i class="fa fa-edit"></i>',"class='btn btn-sm btn-warning'").' '.
                       anchor('C_produk/hapus_produk/'.$d,'<i class="fa fa-trash"></i>',"class='btn btn-sm btn-danger'");
                       
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

function hapus_produk($id_produk){
      
    $this->db->where('id_produk',$id_produk);
  
    $query=$this->db->get('produk');
    
    $row= $query->row($id_produk);
    
    unlink(FCPATH.'uploads/produk/'.$row->gambar_produk);
    unlink(FCPATH.'uploads/produk_thumb/'.$row->gambar_produk);
   
    $this->db->delete('produk',array ('id_produk'=>$id_produk));
    
    redirect('C_produk');
    
 } 

}