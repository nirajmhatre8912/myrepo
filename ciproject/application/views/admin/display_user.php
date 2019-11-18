<!DOCTYPE html>
<html lang="en">

  <head>

<title>Admin - Dashboard</title>

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
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Manage Users</li>
			<li class="breadcrumb-item active">Users Upload</li>
			<li class="breadcrumb-item active">Display Users</li>
		  </ol>


			<!-- container --> 
<!-- container --> 
<section class="showcase">
    <div class="container">
      <div class="pb-2 mt-4 mb-2 border-bottom">
        <h2>View Uplaoded Users</h2>
      </div>
      <div class="row padall border-bottom">  
      <div class="col-lg-12">
      <div class="float-right">  
          <a href="<?php print site_url();?>/admin/Upload_users/index" class="btn btn-info btn-sm"><i class="fa fa-file-upload"></i> Back to Upload</a>
        </div> 
      </div>
      </div>
      <div class="row padall">
        
        <table class="table table-striped">
          <thead>
            <tr class="table-primary">          
            <th scope="col">firstName</th>
            <th scope="col">lastName</th>
              <th scope="col">emailId</th>
              <th scope="col">mobileNumber</th>
              <th scope="col">userPassword</th>
              <th scope="col">isActive</th>
              <th scope="col">lastUpdationDate</th>
            </tr>
          </thead>
          <tbody>

            <?php 
            if (count($dataInfo))
            {
            foreach($dataInfo as $key=>$element) { ?>
            <tr>
              <td><?php print $element['firstName'];?></td>
              <td><?php print $element['lastName'];?></td>
              <td><?php print $element['emailId'];?></td>
              <td><?php print $element['mobileNumber'];?></td>
              <td><?php print $element['userPassword'];?></td>
              <td><?php print $element['isActive'];?></td>
              <td><?php print $element['lastUpdationDate'];?></td>
            </tr>
          <?php } 
            }else{
              ?>
                  </tr><td colspan="7">No records found...</td> </tr>
              <?php
            }
          ?>
          </tbody>
        </table>
        
      </div>
    </div>
  </section>


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
