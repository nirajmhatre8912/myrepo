<!DOCTYPE html>
<html lang="en">

<head>
<title>User Profile</title>
<!-- Bootstrap core CSS-->
<?php echo link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
<!-- Custom fonts for this template-->
<?php echo link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
<!-- Page level plugin CSS-->
<?php echo link_tag('assests/vendor/datatables/dataTables.bootstrap4.css'); ?>
<!-- Custom styles for this template-->
<?php echo link_tag('assests/css/sb-admin.css'); ?>

  </head>

  <body id="page-top">

   <?php include APPPATH.'views/admin/includes/header.php';?>

    <div id="wrapper">

      <!-- Sidebar -->
  <?php include APPPATH.'views/admin/includes/sidebar.php';?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url('admin/Manage_Users'); ?>">User</a>
            </li>
            <li class="breadcrumb-item active">My Profile</li>
          </ol>

          <!-- Page Content -->
          <h3><?php echo $ud->firstName; ?> <?php echo $ud->lastName; ?>'s Profile</h3>
          <hr>
<!---- Success Message ---->

 <?php echo form_open('admin/Change_password/updatebyadminprofile');?>


<p> <strong>Id :</strong> <?php echo $ud->id; ?>

<?php echo form_hidden('uid',$ud->id); ?>

 <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">

<?php echo form_input(['name'=>'firstname','id'=>'firstname','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('firstname',$ud->firstName)]);?>
<?php echo form_label('Enter your first name', 'firstname'); ?>
<?php echo form_error('firstname',"<div style='color:red'>","</div>");?>

                  </div>
                </div>
              </div>
            </div>

  <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">

<?php echo form_input(['name'=>'lastname','id'=>'lastname','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('lastname',$ud->lastName)]);?>
<?php echo form_label('Enter your last name', 'lastname'); ?>
<?php echo form_error('lastname',"<div style='color:red'>","</div>");?>

                  </div>
                </div>
              </div>
            </div>           


  <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">

<?php echo form_input(['name'=>'emailid','id'=>'emailid','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('emailid',$ud->emailId)]);?>
<?php echo form_label('Enter your emailid', 'emailid'); ?>
<?php echo form_error('emailid',"<div style='color:red'>","</div>");?>

                  </div>
                </div>
              </div>
            </div>           


  <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">

<?php echo form_input(['name'=>'mobilenumber','id'=>'mobilenumber','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('mobilenumber',$ud->mobileNumber)]);?>
<?php echo form_label('Enter your mobilenumber', 'mobilenumber'); ?>
<?php echo form_error('mobilenumber',"<div style='color:red'>","</div>");?>

                  </div>
                </div>
              </div>
            </div>        

<p> <strong>Reg Date :</strong> <?php echo $ud->regDate; ?>
<p> <strong>Last Updation Date :</strong> <?php echo $ud->lastUpdationDate; ?>
  

       <div class="form-row">
            <div class="col-md-6">  
            <?php echo form_submit(['name'=>'Update','value'=>'Update','class'=>'btn btn-primary btn-block']); ?>
            </div>
      </div>  
 <?php echo form_close();?>


             <?php
                if (isset($error)){
                    echo $error;
                }
            ?>


                <br><br>
              <form method="post" enctype="multipart/form-data" action="<?=base_url('index.php/store-image')?>" >
                              <input type="file" id="profile_image" name="profile_image" size="33" />
                              <input type="submit" value="submit" name="submit"/>
							  <input type="hidden" id="uid" name="uid" value="<?php echo $ud->id; ?>"/>
              </form>




        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
     <?php include APPPATH.'views/admin/includes/footer.php';?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

   
 
  <script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assests/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('assests/vendor/chart.js/Chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/datatables/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/datatables/dataTables.bootstrap4.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assests/js/sb-admin.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/js/demo/datatables-demo.js'); ?>"></script>
    <script src="<?php echo base_url('assests/js/demo/chart-area-demo.js'); ?>"></script>

  </body>

</html>
