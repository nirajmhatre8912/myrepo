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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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

<!-- Bootstrap4 Duallistbox -->
<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">

 <!-- Tempusdominus Bbootstrap 4 -->
 <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">


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

.scrollit {
    overflow:scroll;
    height:100px;
}

</style>
 <script>
 $( document ).ready(function() {

    
             

});
 </script>
</head>
<!--    sidebar-mini control-sidebar-slide-open accent-danger text-sm-->
<body class="hold-transition sidebar-mini  text-sm" style="zoom : 90%;">
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
          <div class="col-sm-8">
            <ol class="breadcrumb float-sm-right">
      
              <li class="breadcrumb-item"><a href="<?php print site_url(); ?>/Auth/AdLogin/load_dash"><?php echo $this->session->userdata('page_name'); ?></a></li>
              <li class="breadcrumb-item"><a href="<?php print site_url(); ?>/user/Create_User"> Create User </a></li>
              <li class="breadcrumb-item"><a href="<?php print site_url();?>/user/Create_User/showAllUserData"> Show Users</a></li>
              <li class="breadcrumb-item"><a href="<?php print site_url();?>/user/Create_User/showAllGroupData"> Show Groups</a></li>
              <li class="breadcrumb-item"><a href="<?php print site_url();?>/user/Create_User/showRolesMgt"> Roles Mgt</a></li>
              <li class="breadcrumb-item"><a href="<?php print site_url();?>/user/Create_User/createGroupUI"> Create Group UI</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
	
	 <?php include APPPATH.'views\layout\loadingimg.php';?>  
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

              
      <?php     
            $roles = array();
              $pagelist=$this->session->userdata('user_info');    
              foreach ($pagelist as $row) :
                      array_push($roles,$row->role_key); 
              endforeach;

              //print_r($roles);   
      ?> 




        

        
      </div><!-- /.container-fluid -->

<div class="row">
<div class="col-12" style=" overflow:scroll;height:337px;">
      <div class="card" style="">
            <!-- /.card-header -->
            <div class="card-body">

 <?php if( in_array("accasig", $roles) ): ?>             
              <table id="example2" class="table table-sm tbrr" >
                <thead>
                <tr>
                  <th>page_id</th>
                  <th>page_name</th>
                  <th>page_role</th>
                  <th>page_status</th>
                  <th>page_create_ts</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody id="role_tbl">
                
                </tbody>
              </table>


<?php else: ?>
                <?= "No access to your role..." ?>
<?php endif; ?>                                                  






            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
</div>
</div>
<div class="col-md-12">    
  <div class="card card-secondary" style="width: 50%;font-size: 71%;">
              
      <div class="card-body">


<?php if( in_array("accasig", $roles) ): ?>   

      <p id="successas" style="color:Green; font-size:18px;" align="center"></p>
      <p id="erroras" style="color:red; font-size:18px;" align="center"></p>
      <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                  <label>Work group</label>
                  <select class="form-control" id="Group" name="Group" style="font-size: small;">
                  <option value="">---Select Workgroup---</option>                                        
                                                          <?php foreach($grp_names as $row) { ?>
                                                          <option value="<?=$row->groupID?>@<?=$row->groupName?>"><?=$row->groupName?></option>
                                                          <?php } ?>
                  </select>

              
                </div>
                <button id="sbtbuttom" name="sbtbuttom" onclick="getAllUIData()" class="btnaddsub btn btn-block btn-outline-warning btn-xs">Show Pages</button> 
                <!-- /.form-group -->
                </div>


                <div class="form-group">
              
             </div>   
          </div> <!-- row --> 
<?php else: ?>
                <?= "No access to your role..." ?>
<?php endif; ?> 

      </div> <!-- Card body -->
  </div>
</div> 
<div class="row">
    <div class="col-12">

    <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Role Management</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          
  <?php if( in_array("accasig", $roles) ): ?>                       
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <label>Roles</label>
                  <select class="duallistbox" multiple="multiple" id="roleKey" name="roleKey">
                    <?php foreach($uidata as $row):?>
                      <option value="<?= $row->page_name ?>@<?= $row->page_link?>@<?= $row->page_symbol ?>">
                        <?=$row->page_name?>
                      </option>  
                    <?php endforeach; ?>
                 
                  </select>
                </div>
                <!-- /.form-group -->
                
              </div>
              <!-- /.col -->
            </div>
            <button id="sbtbuttom" name="sbtbuttom" onclick="add_sub_grp_role()" class="btndel btn btn-block btn-outline-success btn-xs">Submit Access</button> 
            
            <!-- /.row -->

            
<?php else: ?>
                <?= "No access to your role..." ?>
<?php endif; ?>                                                  
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
          
          </div>
        </div>
        <!-- /.card -->

    </div>
</div>


  


    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

		<!-- MODAL DELETE -->        
                <div class="modal fade" id="deleteModal">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h6 class="modal-title">Delete dialogbox</h6>
							
							<div id="loading-d-img" style="display:none;hight=50%;">
									  <div class="spinner-grow text-primary" role="status">
										<span class="sr-only">Loading...</span>
									  </div>
									  <div class="spinner-grow text-secondary" role="status">
										<span class="sr-only">Loading...</span>
									  </div>
									  <div class="spinner-grow text-success" role="status">
										<span class="sr-only">Loading...</span>
									  </div>
							</div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="form_load()">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                                <!-- Error block -->          
                                <p id="errordel" style="color:red; font-size:18px;" align="center"></p>
                                <!-- Error block -->



                                <!-- Success block -->
                                <p id="successdel" style="color:Green; font-size:18px;" align="center"></p>
                                <!-- Success block -->  

                                  Ary sure you want to delete Menu &nbsp;&nbsp;&nbsp; <input type="hidden" id="mapId" value="">  <input type="text"  id="mapName" value="" class="form-control form-control-sm" disabled>    

                            
                          </div>
                          <div class="modal-footer justify-content-between">
                          <button onclick="delete_grp_page_map()">delete</button>

                            
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                <!-- MODAL DELETE -->  
				
				
				
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
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo base_url()."assets/"; ?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>

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

<script>
  $(function () {
    //$("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });



function create_data_table()
{
  $("#example1").DataTable();

}

// delete page from group
			  function delete_grp_page_map()
              {
				
			$('#loading-d-img').show();
                var mapId = $('#mapId').val();
                

                if (mapId == "")
                {
                  alert("Please select workgroup...");
                  return false;
                }
                
               

                $('#successdel').html("");
                $('#errordel').html("");
                //alert(workGroup_id+" "+subGroup+" "+roleKey);
				setTimeout(function(){ 
                      $.ajax({
                        url:"<?php echo base_url("index.php/user/Create_User/deleteConfigViewAj"); ?>",
                        method:"POST",
                        data :{
                          'Config_id' : mapId
                        },
                        success:function(data){

                            $('#successdel').html(data);
							$('#loading-d-img').hide();
                            //location.reload(true);
                            getAllUIData();
                        },
                        error:function(error){
                          $('#errordel').html(error);
						  $('#loading-d-img').hide();
                        },
                      

                      });
				}, 400);
              }



  // call function to generate data tables

	$('.tbrr tbody').on('click','.btndel',function(){

	var currow = $(this).closest('tr');
	var col1 = currow.find('td:eq(0)').text(); //id
	$('#deleteModal').modal({show:true});
	$('#mapId').val(col1); //id
	$('#mapName').val(col1);
	});

  // Submit Access

              function add_sub_grp_role()
              {
				$('#loading-img').show();

                var workGroup_id = $('#Group').val();
                var roleKey = $('#roleKey').val();

                if (workGroup_id == "")
                {
                  alert("Please select workgroup...");
                  return false;
                }
                
                if (roleKey == "")
                {
                  alert("Please select role...");
                  return false;
                }

                $('#successas').html("");
                $('#erroras').html("");
                //alert(workGroup_id+" "+subGroup+" "+roleKey);
				setTimeout(function(){ 
                      $.ajax({
                        url:"<?php echo base_url("index.php/user/Create_User/insert_ui_access"); ?>",
                        method:"POST",
                        data :{
                          'groupId' : workGroup_id,
                          'roleKey' : roleKey
                        },
                        success:function(data){

                            $('#successas').html(data);
							$('#loading-img').hide();
                            //location.reload(true);
                            getAllUIData();
                        },
                        error:function(error){
                          $('#erroras').html(error);
						  $('#loading-img').hide();
                        },
                      

                      });
				}, 400);
              }
// show all access 
              function getAllUIData()
              {

                $('#loading-img').show();
                var Group = $('#Group').val();

                if (Group == "")
                {
                    alert("Please select workgroup...");
                    return false;
                }

                $('#successas').html("");
                $('#erroras').html("");
                //alert(subGroup);
setTimeout(function(){ 
                      $.ajax({
                        url:"<?php echo base_url("index.php/user/Create_User/getAllUIData"); ?>",
                        method:"POST",
                        data :{
                          'group' : Group
                        },
                        dataType: 'JSON',
                        success:function(data){

                          var len = data.length;
                            //alert(len);
                            var a="";
                          
                              for(var i = 0; i<len; i++)
                              {
                                    var page_id = data[i]['page_id'];
                                    var page_name = data[i]['page_name'];
                                    var page_role = data[i]['page_role'];
                                    var page_status = data[i]['page_status'];
                                    var page_create_ts = data[i]['page_create_ts'];
                                    a+="<tr>";
                                    a+="<td>"+page_id+"</td>";
                                    a+="<td>"+page_name+"</td>";
                                    a+="<td>"+page_role+"</td>";
                                    a+="<td>"+page_status+"</td>";
                                    a+="<td>"+page_create_ts+"</td>";
                                    a+="<td><button class='btndel btn btn-block btn-outline-danger btn-xs'>Delete</button></td>";
                                    a+="</tr>";
                                    
                                  
                                }
                                //alert(a);
                            $('#role_tbl').html(a);
							$('#loading-img').hide();
                            create_data_table();
                            //location.reload(true);
                        },
                        error:function(error){
                          $('#erroras').html(error);
						  $('#loading-img').hide();
                        },
                      

                      });
				}, 400);
              }


  //Bootstrap Duallistbox
  $('.duallistbox').bootstrapDualListbox()

  $("#Group").change(function(){


$('#loading-img').show();
var workGroup_id = $( "#Group option:selected" ).val();

      //alert("hello="+workGroup_id);
      setTimeout(function(){ 
      $.ajax({
      type : 'POST',
      url : '<?php echo base_url("index.php/user/Create_User/getSubgroup"); ?>',
      dataType: 'JSON',
      data : {
      'workGroup_id' : workGroup_id },
      success:function (data) {
          //alert("success = "+data);
          var len = data.length;
          //alert(len);
          var a="";
         
             for(var i = 0; i<len; i++)
             {
                  var id = data[i]['subGroupId'];
                  var name = data[i]['subGroupName'];
                  a+="<option value='"+id+"'>"+name+"</option>";
                 
              }
              //alert(a);
              $('#subGroup').html(a);
			  $('#loading-img').hide();
              setTimeout(() => { console.log("Timeout!"); }, 2000);
              getAllUIData();


      },
      error : function(error) {
        alert("error = "+error);
		$('#loading-img').hide();
      },
      });
}, 400);	  


});
</script>


</body>
</html>
