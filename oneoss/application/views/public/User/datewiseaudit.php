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


  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>dist/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="<?php echo base_url()."assets/"; ?>dist/css/fontfamily.css" rel="stylesheet">

  <link href="<?php echo base_url()."assets/"; ?>dist/css/unpkg.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">




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
<?php     
      $roles = array();
        $pagelist=$this->session->userdata('user_info');    
         foreach ($pagelist as $row) :
                array_push($roles,$row->role_key); 
         endforeach;

        //print_r($roles);   
?> 
	  
<body class="hold-transition sidebar-mini  text-smsidebar-mini  text-sm" style="zoom: 95%;">
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
          <div class="col-sm-9">
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
      

               <!-- general form elements -->
               <div class="col-md-12">    
					<div class="card card-secondary" style="width: 100%;font-size: 95%;">
					  
					  <!-- /.card-header -->
					  <!-- form start -->
							<!--crtuser,viaudi -->
								<?php if( in_array("viaudi", $roles) ): ?>        
											   
														<!--  Form validation block -->

													   

														<!--  Form validation block -->
														<div class="row">
														  
															<!-- text input -->
															&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <div class="form-group" style="padding-left=20px;zoom: 80%;">

                                                                                                <!-- Date and time range -->
                                                                                                 
                                                                                                    <label>Date and time range:</label>

                                                                                                    <div class="input-group">
                                                                                                        <div class="input-group-prepend">
                                                                                                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                                                                                                        </div>
                                                                                                        <input type="text" class="form-control float-right" id="reservationtime" name="reservationtime">
                                                                                                    </div>


                                                            
                                                                                                    <!-- /.input group -->
                                                                                                 
															
																   
							   

																			
															</div>
                                                            <div class="form-group">
                                                            &nbsp;&nbsp;&nbsp;
                                                            </div>
                                                            <div class="form-group">
                                                            <br>
                                                                <button id="sbtbutton" name="sbtbutton" class="form-control btndel btn btn-block btn-outline-danger btn-xs" onclick="date_wise_search()">submit</button>
                                                            </div>
                                                            
                                                           
				                                              
                                                                          
														</div>


                                                        <div class="row">
                                                                <div class="form-group">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                </div>

                                                                <div class="form-group" >
                                                                        <table class="table table-sm" id="example2" style="zoom : 93%;">

                                                                            <thead>
                                                                                <tr>
                                                                                    <th>audit id</th>
                                                                                    <th>user</th>
                                                                                    <th>page name</th>
                                                                                    <th>hostname</th>
                                                                                    <th>hostip</th>
                                                                                    <th>session id</th>
                                                                                    <th>action</th>
                                                                                    <th>event desc</th>
                                                                                    <th>timestamp</th>
                                                                                </tr>
                                                                            </thead>  
                                                                            <tbody id="result"></tbody>
                                                                            </table>
                                                            </div>
                                                        
                                                        </div>
								  
															
													   


														

													  
													   
														  
											  
												  

														


													   
														

															  <!-- /.card-body -->

															  
															
										
								<?php else: ?>
											<?= "No access to your role..." ?>
								<?php endif; ?>                                                  

					</div><!-- /.card -->
            </div> <!-- . col-md-12  -->


              &nbsp;&nbsp;&nbsp;

             


           




        

        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->







<br>
<br>
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
<!-- jQuery -->
<script src="<?php echo base_url()."assets/"; ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()."assets/"; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url()."assets/"; ?>plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo base_url()."assets/"; ?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url()."assets/"; ?>plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url()."assets/"; ?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url()."assets/"; ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url()."assets/"; ?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url()."assets/"; ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo base_url()."assets/"; ?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."assets/"; ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()."assets/"; ?>dist/js/demo.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url()."assets/"; ?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url()."assets/"; ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>


<script>

            $( document ).ready(function() {
            

            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'YYYY/MM/DD H:mm'
                    }
                });






            }); //document.ready

                function date_wise_search()
                {

                    var dateTime = $("#reservationtime").val();

                    $.ajax({
                        type : 'POST',
                        url : '<?php echo base_url("index.php/user/Create_User/get_datewise_audit"); ?>',
                        data : {
                            'dateTime' : dateTime
                        },
                        success : function (data){
                            //alert("Success :- "+data);
                            $("#result").html(data);
                            $("#example2").DataTable();
                        },
                        error : function (error){
                            alert("Error :- "+error);
                        },
                    });
                }

</script>

</body>
</html>
