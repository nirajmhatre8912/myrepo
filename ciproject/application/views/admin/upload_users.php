<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Manage Users</title>

<!-- Bootstrap core CSS-->
<?php echo link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
<!-- Custom fonts for this template-->
<?php echo link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
<!-- Page level plugin CSS-->
<?php echo link_tag('assests/vendor/datatables/dataTables.bootstrap4.css'); ?>
<!-- Custom styles for this template-->
<?php echo link_tag('assests/css/sb-admin.css'); ?>


<script>
/*
              $(document).ready(function(){
              function load_data()
              {
                $.ajax({
                url:"echo base_url(); excel_import/fetch",
                method:"POST",
                success:function(data){
                  $('#customer_data').html(data);
                }
                })
              }

            $('#import_form').on('submit', function(event){
              event.preventDefault();
              $.ajax({
              url:"echo base_url(); excel_import/import",
              method:"POST",
              data:new FormData(this),
              contentType:false,
              cache:false,
              processData:false,
              success:function(data){
                $('#file').val('');
                load_data();
                alert(data);
              }
              })
            });
});
*/
</script>
  </head>

  <body id="page-top">
    <?php include APPPATH.'views/admin/includes/header.php';?>

    <div id="wrapper">

        <?php include APPPATH.'views/admin/includes/sidebar.php';?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url('admin/Upload_users'); ?>">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Manage Users</li>
          </ol>

          <!---- Success Message ---->
          <?php if ($this->session->flashdata('success')) { ?>
          <p style="color:green; font-size:18px;"><?php echo $this->session->flashdata('success'); ?></p>
          </div>
          <?php } ?>

          <!-- Error Message --->              
          <?php if ($this->session->flashdata('error')) { ?>
          <p style="color:red; font-size:18px;"><?php echo $this->session->flashdata('error'); ?></p>
          </div>
          <?php } ?>                

          <?php if(form_error('fileURL')) {?>    
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php print form_error('fileURL'); ?>
        </div>       
        <?php } ?>

        <a href="<?php print site_url();?>/assests/uploads/sample-xlsx.xlsx" class="btn btn-info btn-sm"><i class="fa fa-file-excel"></i> Sample .XLSX</a>
          <a href="<?php print site_url();?>/assests/uploads/sample-xls.xls" class="btn btn-info btn-sm"><i class="fa fa-file-excel"></i> Sample .XLS</a>
          <a href="<?php print site_url();?>/assests/uploads/sample-csv.csv" class="btn btn-info btn-sm" target="_blank" ><i class="fa fa-file-csv"></i> Sample .CSV</a>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
             Users Upload</div>


            <div class="card-body">

            <form action="<?php print site_url();?>/admin/Upload_users/upload" class="excel-upl" id="excel-upl" enctype="multipart/form-data" method="post" accept-charset="utf-8">

            <input type="file" name="fileURL" id="validatedCustomFile" value="file" size="20" required accept=".xls, .xlsx" />

            <br /><br />

            <input type="submit" value="import" value="import"  class= "btn btn-info"/>

            </form>

              <div class="table-responsive">





              </div>
            </div>

          </div>


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
