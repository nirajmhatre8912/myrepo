<ul class="sidebar navbar-nav">

<?php     
foreach ($pagelist as $row) :

?>

          <li class="nav-item <?php echo $row->page_active; ?>">
          <a class="nav-link" href="<?php echo site_url($row->page_link); ?>">
          <i class="<?php echo $row->symbol; ?>"></i>
            <span><?php echo htmlentities($row->page_name);?> </span>
          </a>
        </li> 

<?php
endforeach;

?>

</ul>



<!-- 
 <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php // echo site_url('admin/Dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
 
        <li class="nav-item">
          <a class="nav-link" href="<?php  // echo site_url('admin/Manage_Users'); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span></a>
        </li>

       <li class="nav-item">
            <a class="nav-link" href="<?php // echo site_url('admin/Active_Users'); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Active Users</span></a>
        </li>
 
        <li class="nav-item">
            <a class="nav-link" href="<?php // echo site_url('admin/Audit_Users'); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Audit</span></a>
        </li>

  </ul>
  -->