  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img id="logogcx" src="<?php echo base_url()."assets/"; ?>img/favicon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ONE OSS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url()."assets/"; ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> <?php echo $this->session->userdata('USER'); ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" style="font-size: small;">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

     <?php     
     $pagelist=$this->session->userdata('Config_menu');
          
          foreach ($pagelist as $row) :
     ?>

               <li class="nav-item has-treeview menu-open">
                <a href="<?php echo site_url($row->page_link); ?>" class="nav-link">
                  <i class="<?php echo $row->symbol; ?>"></i>
                  
                 
                  <p>
                  <?php echo htmlentities($row->page_name);?>
                   <!--  <span class="right badge badge-danger">New</span> -->
                  </p>
                </a>
              </li>
         

      <?php
        endforeach;
      ?>   
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>