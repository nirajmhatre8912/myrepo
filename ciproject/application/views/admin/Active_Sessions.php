<!DOCTYPE html>
<html>
    <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Serverside jQuery Datatable</title>
    <link href="<?php echo base_url('assests/datatables/css/jquery.dataTables.min.css')?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Bootstrap core CSS-->
<?php echo link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
<!-- Custom fonts for this template-->
<?php echo link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
<!-- Page level plugin CSS-->
<?php echo link_tag('assests/vendor/datatables/dataTables.bootstrap4.css'); ?>
<!-- Custom styles for this template-->
<?php echo link_tag('assests/css/sb-admin.css'); ?>

    </head> 
<body>
   
    <?php include APPPATH.'views/admin/includes/header.php';?>

    <div id="wrapper">
      <!-- Sidebar -->
      <?php include APPPATH.'views/admin/includes/sidebar.php';?>

      <div id="content-wrapper">

        <div class="container-fluid">

   
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url('admin/Dashboard'); ?>">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Login Audit</li>
          </ol>

        <h3>&nbsp;&nbsp;&nbsp;Login Audit Data</h3>
        <br />
       
        <table id="table" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>TID</th>
                    <th>IP</th>
                    <th>Session ID</th>
                    <th>Timestamp</th>
                    <th>Out_ts</th>
                    <th>Role</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            </tbody>

            <tfoot>
                <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>TID</th>
                    <th>IP</th>
                    <th>Session ID</th>
                    <th>Timestamp</th>
                    <th>Out_ts</th>
                    <th>Role</th>
                    <th>Status</th>
                </tr>
            </tfoot>
        </table>
        </div> <!--   container-fluid -->
		
		
		
             <!-- Sticky Footer -->
    <?php include APPPATH.'views/admin/includes/footer.php';?>
        
		
		</div> <!-- content-wrapper -->
        
		</div> 
		<!-- wrapper -->
 

<script src="<?php echo base_url('assests/jquery/jquery-2.2.3.min.js')?>"></script>
<script src="<?php echo base_url('assests/datatables/js/jquery.dataTables.min.js')?>"></script>


<script type="text/javascript">



$(document).ready(function(){
var table;
    //datatables
    table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('admin/Active_Sessions/ajax_list')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],

    });

});

</script>

</body>
</html>