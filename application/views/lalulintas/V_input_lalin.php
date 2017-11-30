<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Input Data lalulintas Wilker Pelabuhan Laut Mamuju</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Kecilin">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Tutup">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
    <div class="box-body" style="">
   
   <form action="<?php echo base_url(); ?>C_lalulintas/input_lalin" method="post" enctype="multipart/form-data">
    
     <div class="col-md-6">
         
         <label>Keg</label>
      <div class="form-group has-feedback">
          <input type="text" class="form-control" name="keg" placeholder="Keg">
      </div>
     
      <label>tanggal pengiriman</label>   
      <div class="form-group has-feedback">   
      <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
          <input type="text" class="form-control pull-right" name="tanggal"  class="form-control datepicker" data-date-format="dd-mm-yyyy" data-provide="datepicker">
      </div>
      </div>
      
    
      <div class="form-group has-feedback">
             <label>Nama pengirim</label>
          <input type="text" class="form-control" name="pengirim" placeholder="Nama pengirim">
      </div>
         
      <div class="form-group has-feedback">
             <label>Komoditi</label>
          <input type="text" class="form-control" name="komoditi" placeholder="Komoditi">
      </div>
       <div class="form-group has-feedback">
             <label>Jumlah</label>
          <input type="text" class="form-control" name="jumlah" placeholder="Jumlah">
       </div>
     <label>Satuan</label>
     <div class="form-group has-feedback">
         <select class="form-control" name="satuan">
                    <option>Kwintal</option>
                    <option>KG</option>
                    <option>Pcs</option>
                    <option>Ons</option>
         </select>
      
     </div>
     
     </div>
         <div class="col-md-6">
      
      <div class="form-group has-feedback">
             <label>Area Tujuan</label>
          <input type="text" class="form-control" name="tujuan" placeholder="Area Tujuan">
      </div>
       <div class="form-group has-feedback">
             <label>Negara</label>
          <input type="text" class="form-control" name="negara" placeholder="Negara">
      </div>
          
              
     </div>
      
      
    </div>
        <div class="box-footer with-border">
          <div class="col-xs-2 pull-left">
              <button type="reset" class="btn btn-warning btn-block btn-flat">Batal</button>
          </div>
     
          <div class="col-xs-2 pull-right">
              <button type="submit" name="btnInput_lalin" class="btn btn-primary btn-block btn-flat">Simpan</button>
          </div>
      </div>
     </form>
  
</div>