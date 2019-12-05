<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href=https://www.globalcloudxchange.com/wp-content/uploads/favicon.png>
  <title>ONE OSS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<style>
body {
		text-align: center;
		padding: 100px 0 0 0;
		color: #fff;
		background: #1d1f20;
}

#loading {
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
<body class="hold-transition login-page">
<div style="background-image: url('<?php echo base_url()."assets/"; ?>img/map.jpeg');">

<!-- Error block -->

      <?php if ($this->session->flashdata('error')) { ?>

              <p style="color:red; font-size:18px;" align="center"><?php echo $this->session->flashdata('error');?></p>

      <?php } 
           ?> 
<!-- Error block -->


<div class="login-box">
  <div class="login-logo">
          <!-- style="width: 101px;" -->
         <img id="loading" src="https://www.globalcloudxchange.com/wp-content/uploads/favicon.png"> </img>
         <a href="../../index2.html"><b>ONE</b>OSS</a> 
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <?php echo form_open('Auth/AdLogin/getAuth');?>

      <form action="../../index3.html" method="post">
        <div class="input-group mb-3">
      <!--    <input type="email" class="form-control" placeholder="Email"> -->
          <?php echo form_input(['name'=>'emailid','id'=>'emailid','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('emailid')]);?>
          <?php echo form_error('emailid',"<div style='color:red'>","</div>");?>
        </div>
        <div class="input-group mb-3">
          <!-- <input type="password" class="form-control" placeholder="Password">  -->
          <?php echo form_password(['name'=>'password','id'=>'password','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('password')]);?>
          <?php echo form_error('password',"<div style='color:red'>","</div>");?>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
          <?php echo form_submit(['name'=>'login','value'=>'Sign In','class'=>'btn btn-primary btn-block']); ?>
           
          </div>
          <!-- /.col -->
        </div>
        <?php echo form_close(); ?>

      <div class="loading-icon spin"></div>

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url()."assets/"; ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()."assets/"; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."assets/"; ?>dist/js/adminlte.min.js"></script>

</body>
</html>
