  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->

    <ul class="navbar-nav ml-auto">
        <a class="nav-link"> 
            <span class="glyphicon glyphicon-stop">user ip :- </span> <?php echo $this->session->userdata('REMOTE_ADDR');?> </a>
    </ul>
    <ul class="navbar-nav ml-auto">
        <a class="nav-link"> 
            <span class="glyphicon glyphicon-stop">role :- </span> <?php echo $this->session->userdata('ROLE');?> </a>
    </ul>


    <ul class="navbar-nav ml-auto">
        <a class="nav-link"> 
                <?php echo $this->session->userdata('EMAIL'); ?>
        </a>
    </ul>



    <ul class="navbar-nav ml-auto">
        <a class="nav-link" href="<?php echo base_url(); ?>index.php/Auth/AdLogin/decAuthentication"> 
            <span class="glyphicon glyphicon-stop"> </span> Logout </a>  
    </ul>
  </nav>
  <!-- /.navbar -->