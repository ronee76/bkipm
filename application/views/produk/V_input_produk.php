<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">INPUT PRODUK</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Kecilin">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Tutup">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body" style="">
    <form action="<?php echo base_url('C_produk/simpan_produk'); ?>" method="post" enctype="multipart/form-data">
  
    <div class="col-md-6">
      <div class="form-group has-feedback">
          <input type="text" class="form-control" name="nama_produk" placeholder="Nama Barang">
        <span class="glyphicon fa fa-pencil form-control-feedback"></span>
      </div>
            
     <div class="form-group has-feedback">
         <select class="form-control" name="status_produk" >
                    <option>status</option>
                    <option>sparepart</option>
                    <option>mesin</option>
                  </select>
     </div>
    
    
      <div class="form-group has-feedback">
          <input type="text" class="form-control" name="harga_produk" placeholder="Harga Barang">
        <span class="fa fa-money form-control-feedback"></span>
      </div>
    
      <div class="form-group has-feedback">
          <input type="text" class="form-control" name="stok_produk" placeholder="Stok Barang">
        <span class="fa fa-file-archive-o form-control-feedback"></span>
      </div>
     </div>
  
        <div class="col-md-6">
            <div class="form-group has-feedback">
                <input type="file" class="form-control" name="gambar_produk"  placeholder="Masukan foto" >
        <span class="fa fa-upload form-control-feedback"></span>
      </div>
            
        </div> 
      
        
       </div>
        <div class="box-footer with-border">
          <div class="col-xs-2 pull-left">
              <button type="reset" class="btn btn-warning btn-block btn-flat">Batal</button>
          </div>
     
          <div class="col-xs-2 pull-right">
              <button type="submit" name="btnDaftar" class="btn btn-primary btn-block btn-flat">Simpan Produk</button>
          </div>
      </div>
    </form>
  
</div>

