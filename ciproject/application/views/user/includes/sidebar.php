

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





<!--       <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?php //echo site_url('user/Dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
     
         <li class="nav-item">
          <a class="nav-link" href="<?php //echo site_url('user/User_profile'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>My Profile</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php //echo site_url('user/Change_password'); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Change Pasword</span></a>
        </li>

    <li class="nav-item">
          <a class="nav-link" href="<?php //echo site_url('user/Login/logout'); ?>">
      <i class="fas fa-sign-out-alt"></i>
            <span>Log Out</span></a>
        </li>

      </ul> -->