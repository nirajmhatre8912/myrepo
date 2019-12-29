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
            <h1 class="m-0 text-dark"></h1>
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

<?php     
       $roles = array();

        $pagelist=$this->session->userdata('user_info');    
        
          if ($pagelist){
            foreach ($pagelist as $row) :
                    array_push($roles,$row->role_key); 
            
            endforeach;
          }
         //print_r($roles);  

?>

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          

 
<?php if( in_array("viwdash", $roles) ): ?>                                 

  <div class="col-md-3">

                                                    <!-- PIE CHART -->
                                                    <div class="card card-danger">
                                                          
                                                          <div class="card-header">
                                                            <h3 class="card-title">Pie Chart</h3>

                                                            <div class="card-tools">
                                                              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                              </button>
                                                              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                                            </div>
                                                          </div>
                                                          
                                                          
                                                          <div class="card-body">
                                                            <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                          </div>
                                                          <!-- /.card-body -->
                                                    </div>
                                                    <!-- /.card -->
  </div>
  <div class="col-md-3">


                                                    <!-- DONUT CHART -->
                                                    <div class="card card-danger">
                                                        <div class="card-header">
                                                          <h3 class="card-title">Donut Chart</h3>

                                                          <div class="card-tools">
                                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                                          </div>
                                                        </div>
                                                        <div class="card-body">
                                                          <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                        </div>
                                                        <!-- /.card-body -->
                                                      </div>
                                                      <!-- /.card -->

  </div>
  <div class="col-md-3">
                   <!-- LINE CHART -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Line Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->                                          
  </div>


  <div class="col-md-3">
                    <!-- AREA CHART -->
                    <div class="card card-primary">
                          <div class="card-header">
                            <h3 class="card-title">Area Chart</h3>

                            <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                              </button>
                              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                            </div>
                          </div>
                          <div class="card-body">
                            <div class="chart">
                              <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
  </div>                                    
                          

            <input type="hidden" name="active_user" id="active_user" value="<?php echo $act; ?>">
            <input type="hidden" name="inactive_user" id="inactive_user" value="<?php echo $dct; ?>">
            <input type="hidden" name="dayarr" id="date_array" value="<?php echo $dayarr; ?>">
            <input type="hidden" name="countarr" id="inactive_user" value="<?php echo $countarr; ?>">
       
<?php else: ?>
                <?= "No access to your role..." ?>
<?php endif; ?>
       
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

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
<!-- ChartJS -->
<script src="<?php echo base_url()."assets/"; ?>plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."assets/"; ?>dist/js/adminlte.min.js"></script>




<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()."assets/"; ?>dist/js/demo.js"></script>


<!-- page script -->
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    var act=$("#active_user").val();
    var dct=$("#inactive_user").val();
    var countarr=$("#countarr").val();
    var dayarr=$("#dayarr").val();

    /* var a=JSON.parse(dayarr);
    var b=JSON.parse(countarr);
    alert(a);
    alert(b);
 */
     // Get context with jQuery - using jQuery's .get() method.
     var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

var areaChartData = {
  //labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
  labels  : <?php echo $dayarr; ?>,
  datasets: [
    {
      label               : 'Digital Goods',
      backgroundColor     : 'rgba(60,141,188,0.9)',
      borderColor         : 'rgba(60,141,188,0.8)',
      pointRadius          : false,
      pointColor          : '#3b8bba',
      pointStrokeColor    : 'rgba(60,141,188,1)',
      pointHighlightFill  : '#fff',
      pointHighlightStroke: 'rgba(60,141,188,1)',
      data                : <?php echo $countarr; ?>
    },
    {
      label               : 'Electronics',
      backgroundColor     : 'rgba(210, 214, 222, 1)',
      borderColor         : 'rgba(210, 214, 222, 1)',
      pointRadius         : false,
      pointColor          : 'rgba(210, 214, 222, 1)',
      pointStrokeColor    : '#c1c7d1',
      pointHighlightFill  : '#fff',
      pointHighlightStroke: 'rgba(220,220,220,1)',
      data                :  <?php echo $countarr; ?>
    },
  ]
}

var areaChartOptions = {
  maintainAspectRatio : false,
  responsive : true,
  legend: {
    display: false
  },
  scales: {
    xAxes: [{
      gridLines : {
        display : false,
      }
    }],
    yAxes: [{
      gridLines : {
        display : false,
      }
    }]
  }
}

// This will get the first returned node in the jQuery collection.
var areaChart       = new Chart(areaChartCanvas, { 
  type: 'line',
  data: areaChartData, 
  options: areaChartOptions
})

//-------------
//- LINE CHART -
//--------------
var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
var lineChartOptions = jQuery.extend(true, {}, areaChartOptions)
var lineChartData = jQuery.extend(true, {}, areaChartData)
lineChartData.datasets[0].fill = false;
lineChartData.datasets[1].fill = false;
lineChartOptions.datasetFill = false

var lineChart = new Chart(lineChartCanvas, { 
  type: 'line',
  data: lineChartData, 
  options: lineChartOptions
})

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'total active', 
          'total inactive',
 
      ],
      datasets: [
        {
          data: [act,dct],
          backgroundColor : ['#f56954', '#00a65a'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions      
    })

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions      
    })


   
  })
</script>

</body>
</html>
