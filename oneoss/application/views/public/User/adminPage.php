<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href=https://www.globalcloudxchange.com/wp-content/uploads/favicon.png>
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>ONEOSS | Dashboard</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>dist/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="<?php echo base_url()."assets/"; ?>dist/css/fontfamily.css" rel="stylesheet">

  <link href="<?php echo base_url()."assets/"; ?>dist/css/unpkg.css" rel="stylesheet">
<style>

#logogcx {
		-webkit-animation: rotation 3s infinite linear;
}

@-webkit-keyframes rotation {
		from {
				-webkit-transform: rotate(0deg);
		}
		to {
				-webkit-transform: rotate(359deg);
		}
}
</style>

</head>
<?php     
      $roles = array();
        $pagelist=$this->session->userdata('user_info');    
         foreach ($pagelist as $row) :
                array_push($roles,$row->role_key); 
         endforeach;

        //print_r($roles);   
?> 
	  
<body class="hold-transition sidebar-mini  text-smsidebar-mini  text-sm" style="zoom: 90%;">
<div class="wrapper">

  <!-- Navbar -->
  <!-- ADD NAVBAR PAGE  -->
  <?php include APPPATH.'views\layout\nav.php';?>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <!-- ADD SIDEBAR PAGE -->
  <?php include APPPATH.'views\layout\sidebar.php';?>


  <!-- Content Wrapper. Contains page content -->
  <!--  ADD CONTENT PAGE-->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
					<div class="content-header">
					  <div class="container-fluid">
						<div class="row mb-2">
						  <div class="col-sm-6">
						  <ol class="breadcrumb float-sm-left">
				 
							</ol>
						  </div><!-- /.col -->
						  <div class="col-sm-7">
							<ol class="breadcrumb float-sm-right">                
							  <li class="breadcrumb-item"><a href="<?php print site_url(); ?>/Auth/AdLogin/load_dash"><?php echo $this->session->userdata('page_name'); ?></a></li>
							  <li class="breadcrumb-item"><a href="<?php print site_url(); ?>/user/Authors/audit"> Audit Logs </a></li>
							  <li class="breadcrumb-item"><a href="<?php print site_url();?>/user/Authors"> Sessions logs</a></li>
							 </ol>
						  </div><!-- /.col -->
						</div><!-- /.row -->
					  </div><!-- /.container-fluid -->
					</div>
					<!-- /.content-header -->

					<!-- Main content -->
	<div class="content">
		<div class="container-fluid">

			<div class="col-md-12">	
							<div class="row">

							<!-- Error block -->

							<?php if ($this->session->flashdata('error')) { ?>

							<p style="color:red; font-size:18px;" align="center"><?php echo $this->session->flashdata('error');?></p>

							<?php } 
							?> 
							<!-- Error block -->



							<!-- Success block -->

							<?php if ($this->session->flashdata('success')) { ?>

							<p style="color:Green; font-size:18px;" align="center"><?php echo $this->session->flashdata('success');?></p>

							<?php } 
							?> 
							<!-- Success block -->
							
							
									<div class="div card card-secondary">
										<div class="div card-body">
										
										</div>
									</div> 

							</div>
							
			</div>				


						   




						

						
		</div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  
  
  
  
  </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
  <!-- ADD FOOTER HERE -->
  
<br>
<br>
<br>
<?php include APPPATH.'views\layout\footer.php';?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url()."assets/"; ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()."assets/"; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."assets/"; ?>dist/js/adminlte.min.js"></script>




</body>
</html>
