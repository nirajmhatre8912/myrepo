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
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-4 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5"><?php echo htmlentities($tcount);?> Users</div>
                </div>
                <a class="card-footer text-white clearfix small z-1">
                  <span class="float-left">Total Registered Users</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5"><?php echo htmlentities($tsevencount);?> Users</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">Registred in Last 10 Days</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5"><?php echo htmlentities($tthirycount);?> Users</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">Registered in last 30 days</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
      
         </div>
		  <div class="row">
          <div class="col-xl-4 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5"><?php echo htmlentities($total_dups_number); ?> Total Duplicates Users</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">Found in Database </span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
		  </div>		
          <div class="col-xl-4 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5"><?php echo $total_active_sessions;?> Total Online Users</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">Found in Database </span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
			 


		  </div> <!-- row -->
		  

                    <div class="row"> <!-- row -->

              <div class="col-xl-6 col-sm-6 mb-3">  <!-- Data tables-->

              <!-- DataTables Example -->
                  <div class="card mb-3">
                    <div class="card-header">
                      <i class="fas fa-table"></i>
                      Data Table Example</div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                            <tr>
                              <th>id</th>
                              <th>firstName</th>
                              <th>Lastname</th>
                              <th>emailId</th>
                              <th>count</th>
                            </tr>
                          </thead>
                          <tfoot>
                            <tr>
                              <th>id</th>
                              <th>firstName</th>
                              <th>Lastname</th>
                              <th>emailId</th>
                              <th>count</th>
                              
                            </tr>
                          </tfoot>
                          <tbody>

                          <?php
                            if(count($total_dups)) :
                            $cnt=1; 
                            foreach ($total_dups as $row) :
                            ?>                    
                                                <tr>
                                                  <td><?php echo htmlentities($cnt);?></td>
                                                  <td><?php echo htmlentities($row->firstName)?></td>
                                                  <td><?php echo htmlentities($row->lastName)?></td>
                                                  <td><?php echo htmlentities($row->emailId)?></td>
                                                  <td><?php echo htmlentities($row->total)?></td>

                                                </tr>
                            <?php 
                            $cnt++;
                            endforeach;
                            else : ?>

                            <tr>
                            <td colspan="6">No Record found</td>
                            </tr>
                            <?php
                            endif;
                            ?>                

                      
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                  </div>

                
              </div> <!-- data tables -->

                      <!--  PIE CHART -->         
                              <div class="col-lg-4">
                                <div class="card mb-3">
                                  <div class="card-header">
                                    <i class="fas fa-chart-pie"></i>
                                    Pie Chart Example</div>
                                  <div class="card-body">
                                    <canvas id="myPieChart" width="100%" height="100"></canvas>
                                  </div>
                                  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                                </div>
                              </div>  
                      <!--  PIE CHART -->        
              </div> <!-- row -->



      
			 
          </div>  <!-- Container-fluid -->

         
      
          </div> <!-- Content-wrapper -->


        </div>
        <!-- wrapper -->

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
