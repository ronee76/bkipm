
<!------------LIHAT DATA LALIN---------------------------------->


<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DATA LALULINTAS MAMUJU</h3>
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
                    "ajax": "<?php echo base_url() ;?>C_lalulintas/data_lalin_json"
                } );
            } );
    </script>
    <?php  
           $valid =  $this->session->all_userdata();
          $level    = $valid['level'];
          if($level == 'admin'){     
?>
        <div class="col-sm-12 ">
            <table id="example1" class="display dataTable"  >
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" >Keg</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"style="width: 100px;">Tanggal</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 200px;">Pengirim</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" >Komoditi</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"style="width: 100px;" >Jumlah</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" >Satuan</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 100px;">Tujuan</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 100px;">Negara</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Action</th></tr>
               

               </thead>
                <tbody>
                <tr role="row" class="odd">
                </tr>
                <tbody>
                <tfoot>
                <tr><th rowspan="1" colspan="1">Keg</th>
                    <th rowspan="1" colspan="1">Tanggal</th>
                    <th rowspan="1" colspan="1">Pengirm</th>
                    <th rowspan="1" colspan="1">Komoditi</th>
                    <th rowspan="1" colspan="1">Jumlah</th>
                    <th rowspan="1" colspan="1">Satuan</th>
                    <th rowspan="1" colspan="1">Tujuan</th>
                    <th rowspan="1" colspan="1">Negara</th>
                     <th rowspan="1" colspan="1">Action</th>
               </tfoot>
              </table>
          </div><?php }else{ ?>
    
     <div class="col-sm-12 ">
            <table id="example1" class="display dataTable"  >
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" >Keg</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"style="width: 100px;">Tanggal</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 200px;">Pengirim</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 180px;">Komoditi</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"style="width: 100px;" >Jumlah</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" >Satuan</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 150px;">Tujuan</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 150px;">Negara</th>
               

</thead>
                <tbody>
                <tr role="row" class="odd">
                </tr>
                <tbody>
                <tfoot>
                <tr><th rowspan="1" colspan="1">Keg</th>
                    <th rowspan="1" colspan="1">Tanggal</th>
                    <th rowspan="1" colspan="1">Pengirm</th>
                    <th rowspan="1" colspan="1">Komoditi</th>
                    <th rowspan="1" colspan="1">Jumlah</th>
                    <th rowspan="1" colspan="1">Satuan</th>
                    <th rowspan="1" colspan="1">Tujuan</th>
                    <th rowspan="1" colspan="1">Negara</th>
               </tfoot>
              </table>
          </div><?php  }?>
    </div>