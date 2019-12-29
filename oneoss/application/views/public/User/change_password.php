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
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
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
<body class="hold-transition sidebar-mini">
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
          
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php print site_url(); ?>/Auth/AdLogin/load_dash"><?php echo $this->session->userdata('page_name'); ?></a></li>
           <!--    <li class="breadcrumb-item active">Starter Page</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">


      <?php     
      $roles = array();
        $pagelist=$this->session->userdata('user_info');    
         foreach ($pagelist as $row) :
                array_push($roles,$row->role_key); 
         endforeach;

        // print_r($roles);   
      ?> 


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

</div>


               <div class="row">



          





              &nbsp;&nbsp;&nbsp;

               <!-- general form elements -->
               <div class="card card-secondary" style="width: 45%;font-size: 71%;">
              <div class="card-header">
                <h3 class="card-title">Change password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->


		



           

            <?php if( in_array("chgpass", $roles) ): ?>           
             <?php echo form_open('user/Change_Password');?>
                                <div class="card-body">
                                
                                
                            
                                            <div class="form-group">

                                                        
                                                            <label>Current Password</label>   
                                                            
                                                            <?php echo form_password(['name'=>'currentpassword','id'=>'password','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('currentpassword')]);?>
                                                            
                                                            <?php echo form_error('currentpassword',"<div style='color:red'>","</div>");?>
                                                        
                                                        
                                                            <label>New password</label>
                                
                                                                <?php echo form_password(['name'=>'password','id'=>'password','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('password')]);?>
                                                                 <?php echo form_error('password',"<div style='color:red'>","</div>");?>
                                                        
                                                            <label for="exampleInputEmail1">Confirm password</label>
                                                                 <?php echo form_password(['name'=>'confirmpassword','id'=>'confirmpassword','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('confirmpassword')]);?>
                                                                 <?php echo form_error('confirmpassword',"<div style='color:red'>","</div>");?>
                                                                    
                                            </div> <!-- /.form-group -->
                                </div>

                <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                <?php echo form_close(); ?> 
              <?php else: ?>
                <?= "No access to your role..." ?>
              <?php endif; ?>
               
            </div><!-- /.card -->

            </div>  <!-- /.row -->
           




        

        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <!-- Main Footer -->
  <!-- ADD FOOTER HERE -->
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
