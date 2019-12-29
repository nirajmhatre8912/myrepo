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

   <!-- DataTables -->
   <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">
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
          <ol class="breadcrumb float-sm-left">
 <!--              <li class="breadcrumb-item"><a href="#">show Users</a></li> -->

           <!--    <li class="breadcrumb-item active">Starter Page</li> -->
            </ol>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            
              <li class="breadcrumb-item"><a href="<?php print site_url(); ?>/Auth/AdLogin/load_dash"><?php echo $this->session->userdata('page_name'); ?></a></li>
              <li class="breadcrumb-item"><a href="<?php print site_url();?>/user/Create_User/showAllProfileData"> Show Profile</a></li>

           <!--    <li class="breadcrumb-item active">Starter Page</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">

<div class="row">
<div class="col-12">
      <div class="card" style="font-size: 80%;">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">

              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>User Id</th>
                  
                </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td><?php echo $ud[0]->firstName; ?></td>
                        <td><?php echo $ud[0]->lastName; ?></td>
                        <td><?php echo $ud[0]->userId; ?></td>
                   </tr>
  

                </tbody>
         

                <thead>
                <tr>
                  <th>Group Name</th>
                  <th>Group Desc</th>
                  <th>Group Id</th>
                  
                </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td><?php echo $ud[0]->groupName; ?></td>
                        <td><?php echo $ud[0]->groupDesc; ?></td>
                        <td><?php echo $ud[0]->id; ?></td>
                   </tr>
  

                </tbody>


                
                <thead>
                <tr>
                  <th>Mobile Number</th>
                  <th>User password</th>
                  <th>User reg. date</th>
                  
                </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td><?php echo $ud[0]->mobileNumber; ?></td>
<td><?php if ($ud[0]->userType == "AD" ):?><?= "NA"   ?><?php else: ?><?=$ud[0]->userPassword ?><?php endif;?></td>
                        <td><?php echo $ud[0]->regDate; ?></td>
                   </tr>
  

                </tbody>



                <thead>
                <tr>
                  <th>Status</th>
                  <th>Last update</th>
                  <th>User type</th>
                  
                </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td><?php if($ud[0]->isActive == 1){echo "Active"; }else{ echo "Inactive";} ?></td>
                        <td><?php echo $ud[0]->lastUpdationDate; ?></td>
                        <td><?php echo $ud[0]->userType; ?></td>
                   </tr>
  

                </tbody>

         
 
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
</div>
</div>

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

<!-- DataTables -->
<script src="<?php echo base_url()."assets/"; ?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url()."assets/"; ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>




</body>
</html>
