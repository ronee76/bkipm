<!------------LIHAT USER MENDAFTAR---------------------------------->


<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DATA PRODUK YANG TELAH TERSIMPAN</h3>
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
                    "ajax": "http://localhost/sisco/C_produk/data_produk"
                } );
            } );
    </script>
    
        <div class="col-sm-12 ">
            <table id="example1" class="display dataTable"  >
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"   style="width: 330px;">Nama Produk</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"       style="width: 100px;">Status</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"       style="width: 100px;">Harga</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"       style="width: 100px;">Stok</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"       style="width: 100px;">Gambar</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"       style="width: auto;">Action</th></tr>
                </thead>
                <tbody>
                <tr role="row" class="odd">
                 
                </tr>
                <tbody>
                <tfoot>
                <tr><th rowspan="1" colspan="1">Nama Produk</th>
                    <th rowspan="1" colspan="1">Staus</th>
                    <th rowspan="1" colspan="1">Harga</th>
                    <th rowspan="1" colspan="1">Stok</th>
                    <th rowspan="1" colspan="1">Gambar</th>
                    <th rowspan="1" colspan="1">Action</th></tr>
                </tfoot>
              </table>
        </div>
    </div>