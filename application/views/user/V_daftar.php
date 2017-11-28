<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">DAFTAR USER</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Kecilin">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Tutup">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
    <div class="box-body" style="">
   
   <form action="<?php echo base_url('C_daftar/daftar'); ?>" method="post" enctype="multipart/form-data">
    
     <div class="col-md-6">
      <div class="form-group has-feedback">
          <input type="text" class="form-control" name="nama" placeholder="Full name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
    
      <div class="form-group has-feedback">
          <input type="email" class="form-control" name="email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      
     <div class="form-group has-feedback">
         <select class="form-control" name="level">
                    <option>level</option>
                    <option>admin</option>
                    <option>user</option>
                  </select>
      
     </div>
            
     <div class="form-group has-feedback">
         <select class="form-control" name="status" >
                    <option>status</option>
                    <option>aktif</option>
                    <option>tidak</option>
                  </select>
      
     </div>
      
     
            
    <div class="form-group has-feedback">
        <input type="password" name="password1" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
          <input type="password"  name="password2" class="form-control" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
            
  
        </div>
        <div class="col-md-6">
            <div class="form-group has-feedback">
                <input type="file" class="form-control" name="gambar"  placeholder="Masukan foto" >
        <span class="fa fa-upload form-control-feedback"></span>
      </div>
            
        </div> 
      
        
       </div>
        <div class="box-footer with-border">
          <div class="col-xs-2 pull-left">
              <button type="reset" class="btn btn-warning btn-block btn-flat">Batal</button>
          </div>
     
          <div class="col-xs-2 pull-right">
              <button type="submit" name="btnDaftar" class="btn btn-primary btn-block btn-flat">Mendaftar</button>
          </div>
      </div>
    </form>
  
</div>

<!------------LIHAT USER MENDAFTAR---------------------------------->


<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DATA USER YANG TELAH MENDAFTAR</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
    
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>vendor/datatables/datatables/media/css/jquery.dataTables.css">
        
 <script type="text/javascript" language="javascript" src="<?php echo base_url('assets/');?>/vendor/datatables/datatables/media/js/jquery.js"></script>
   
 <script type="text/javascript"  >
            $(document).ready(function() {
                $('#example1').DataTable( {
                    "processing": true,
                    "serverSide": true,
                    "ajax": "http://localhost/sisco/C_daftar/data_user"
                } );
            } );
    </script>
    
        <div class="col-sm-12 ">
            <table id="example1" class="display dataTable"  >
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 177px;">Nama</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 225px;">Level</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 206px;">Status</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 153px;">Gambar</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Action</th></tr>
                </thead>
                <tbody>
                <tr role="row" class="odd">
                 
                </tr>
                <tbody>
                <tfoot>
                <tr><th rowspan="1" colspan="1">Nama</th>
                    <th rowspan="1" colspan="1">Level</th>
                    <th rowspan="1" colspan="1">Status</th>
                    <th rowspan="1" colspan="1">Gambar</th>
                    <th rowspan="1" colspan="1">Action</th></tr>
                </tfoot>
              </table>
        </div>
    </div>