
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <div class="user-panel">
       <div class="pull-left image">
           <img src="<?php echo base_url('/uploads/user_thumb/');?><?php  $valid =  $this->session->all_userdata();
                     echo  $valid['gambar']; ?> "  class="img-circle" >
           </div>
        <div class="pull-left info">
          <p><?php echo  $valid['nama']; ?> </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
     
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">DASHBORAD DATA & INFORMASI</li>
        <li class="active treeview">
    
        <li class="treeview">
          <a href="#">
            <i class="fa fa-exchange"></i>
            <span>Lalulintas</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url ('C_lalulintas'); ?> "><i class="fa fa-circle-o"></i> Input lalintas</a></li>
            <li><a href="<?php echo base_url ('C_lalulintas/data_lalin'); ?>"><i class="fa fa-circle-o"></i> Data Lalulintas</a></li>
          </ul>
        </li>
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>MENU 3</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> SUB MENU 3</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> SUB MENU 3</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> SUB MENU 3</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> SUB MENU 3</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>MENU 4</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> SUB MENU 4</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> SUB MENU 4</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> SUB MENU 4</a></li>
        
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>MENU 5</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> SUB MENU 5</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> SUB MENU 5</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> SUB MENU 5</a></li>
          </ul>
        </li>
        
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>