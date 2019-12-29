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
 <script>
 $( document ).ready(function() {

    
             

});
 </script>
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

            </ol>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
      
              <li class="breadcrumb-item"><a href="<?php print site_url(); ?>/Auth/AdLogin/load_dash"><?php echo $this->session->userdata('page_name'); ?></a></li>
              <li class="breadcrumb-item"><a href="<?php print site_url(); ?>/user/Create_User"> Create User </a></li>
              <li class="breadcrumb-item"><a href="<?php print site_url();?>/user/Create_User/showAllUserData"> Show Users</a></li>
              <li class="breadcrumb-item"><a href="<?php print site_url();?>/user/Create_User/showAllGroupData"> Show Groups</a></li>
              <li class="breadcrumb-item"><a href="<?php print site_url();?>/user/Create_User/showRolesMgt"> Roles Mgt</a></li>
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
<div class="col-12">
      <div class="card" style="font-size: 80%;">
            <!-- /.card-header -->
            <div class="card-body">

   <?php if( in_array("crtuser", $roles) ): ?>           
              <table id="example2" class="table table-bordered table-hover tbrr">
                <thead>
                <tr>
                  <th>id</th>
                  <th>group name</th>
                  <th>group description</th>
                  <th>Delete</th>
                  <th>modify</th>
                  <th>Add subgroup</th>
                </tr>
                </thead>
                <tbody>
                <?php
if(count($page_result)) :
$cnt=1; 
foreach ($page_result as $row) :
?>                    
                    <tr>
                              <td><?php echo htmlentities($row->groupID)?></td>
                              <td><?php echo htmlentities($row->groupName);?></td>
                              <td><?php echo htmlentities($row->groupDesc)?></td>
                              <td><button class='btndel btn btn-block btn-outline-danger btn-xs' >delete</button></td>
                              <td><button class='btnmodify btn btn-block btn-outline-info btn-xs' >modify</button></td> 
                              <td><button class='btnaddsub btn btn-block btn-outline-warning btn-xs' >add sub group</button></td>      
                    </tr>
 <?php 
$cnt++;
endforeach;
else : ?>

<tr>
<td colspan="3">No Record found</td>
</tr>
<?php
endif;
?>   

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
<script src="<?php echo base_url()."assets/"; ?>plugins/jquery/jquery.min.js"></script>
<script>
$('.tbrr tbody').on('click','.btndel',function(){


var currow = $(this).closest('tr');
var col1 = currow.find('td:eq(0)').text();
var col2 = currow.find('td:eq(1)').text();
var col3 = currow.find('td:eq(2)').text();

$('#deleteModal').modal({show:true});
$('#grp_d_id').val(col1); //id
$('#grp_d_name').val(col2); //name


});

$('.tbrr tbody').on('click','.btnmodify',function(){
var currow = $(this).closest('tr');
var col1 = currow.find('td:eq(0)').text();
var col2 = currow.find('td:eq(1)').text();
var col3 = currow.find('td:eq(2)').text();

$('#modifyModal').modal({show:true});
$('#grp_u_id').val(col1); //id
$('#grp_u_name').val(col2); //name
$('#grp_u_desc').val(col3); //desc

});


$('.tbrr tbody').on('click','.btnaddsub',function(){

var currow = $(this).closest('tr');
var col1 = currow.find('td:eq(0)').text();
var col2 = currow.find('td:eq(1)').text();
var col3 = currow.find('td:eq(2)').text();

$('#subAddModal').modal({show:true});
$('#grp_s_id').val(col1); //id
$('#grp_s_name').val(col2); //name
$("#sgrp_s_name").val(col2+'_sub'); // sub name
$("#sgrp_s_desc").val(col3+'_sub'); // sub name

});


              function delete_grp()
              {

                var id = $('#grp_u_id').val();
                      $.ajax({
                        url:"deleteGroupAj",
                        method:"POST",
                        data :{
                          'grp_id' : id
                        },
                        dataType: 'JSON',
                        success:function(data){

                            $('#successup').html(data);
                            location.reload(true);
                        },
                        error:function(error){
                          $('#errorup').html(error);
                        },
                      

                      });
              }


              function modify_grp()
              {
                //alert("function got called...");
                var grp_u_id = $('#grp_u_id').val();
                var grp_u_name = $('#grp_u_name').val();
                var grp_u_desc = $('#grp_u_desc').val();

                //alert(grp_u_id+" "+grp_u_name+" "+grp_u_desc);

                      $.ajax({
                        url:"modifyGroupAj",
                        method:"POST",
                        data :{
                          'grp_id' : grp_u_id,
                          'grp_u_name' : grp_u_name,
                          'grp_u_desc' : grp_u_desc,
                        },
                        dataType: 'JSON',
                        success:function(data){

                            $('#successmod').html(data);
                            location.reload(true);
                        },
                        error:function(error){
                          $('#errormod').html(error);
                        },
                      

                      });
              }


              function add_sub_grp()
              {

                var sgrp_s_desc = $('#sgrp_s_desc').val();
                var sgrp_s_name = $('#sgrp_s_name').val();
                var grp_s_name = $('#grp_s_name').val();
                var grp_s_id = $('#grp_s_id').val();

                alert(sgrp_s_desc+" "+sgrp_s_name+" "+grp_s_name+" "+grp_s_id);

                      $.ajax({
                        url:"addsubAJ",
                        method:"POST",
                        data :{
                          'grp_s_id' : grp_s_id,
                          'grp_s_name' : grp_s_name,
                          'sgrp_s_name' : sgrp_s_name,
                          'sgrp_s_desc' : sgrp_s_desc
                        },
                        dataType: 'JSON',
                        success:function(data){

                            $('#successas').html(data);
                            location.reload(true);
                        },
                        error:function(error){
                          $('#erroras').html(error);
                        },
                      

                      });
              }

</script>
<div class="row">
<div class="col-12">

  <!-- general form elements -->
  <div class="card card-secondary" style="width: 45%;font-size: 71%;">
              <div class="card-header">
                <h3 class="card-title">Create Group</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                        <?php if( in_array("crtgrp", $roles) ): ?>     
                        
                                                <?php echo form_open('user/Create_User/insert_group_data');?>
                                                  <div class="card-body">
                                                    

                                                    <!--  Form validation block -->

                                                      <div style='color:red'>
                                                          <?php echo validation_errors(); ?>
                                                      </div>

                                                      <!--  Form validation block -->
                                                  
                                                
                                                    <div class="form-group">

                                                              
                                                                  <label>Work Group Name</label>   
                                                                      <?php echo form_input(['name'=>'groupName','id'=>'groupName','class'=>'form-control form-control-sm','autofocus'=>'autofocus','value'=>set_value('groupName')]);?>
                                                                  <label>Work Group Description</label>
                                                                      <?php echo form_input(['name'=>'groupDesc','id'=>'groupDesc','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('groupDesc')]);?>      
                                                                  <label for="exampleInputEmail1">No of sections</label>
                                                                      <?php echo form_input(['name'=>'groupSection','id'=>'groupSection','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('groupSection')]);?>
                                                                    
                                                                          
                                                                        </div> <!-- /.form-group -->
                                                  </div>

                                                  <!-- /.card-body -->

                                                      <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                      </div>

                                                  <?php echo form_close(); ?> 
                      <?php else: ?>
                                <?= "No access to your role..." ?>
                      <?php endif; ?>          
            </div><!-- /.card -->

</div>
</div>


                <!-- MODAL DELETE -->        
                    <div class="modal fade" id="deleteModal">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h6 class="modal-title">Delete dialogbox</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                                <!-- Error block -->          
                                <p id="errorup" style="color:red; font-size:18px;" align="center"></p>
                                <!-- Error block -->



                                <!-- Success block -->
                                <p id="successup" style="color:Green; font-size:18px;" align="center"></p>
                                <!-- Success block -->  

                                  Ary sure you want to delete group &nbsp;&nbsp;&nbsp; <input type="hidden" id="grp_d_id" value="">  <input type="text"  id="grp_d_name" value="" disabled>    

                            
                          </div>
                          <div class="modal-footer justify-content-between">
                          <button onclick="delete_grp()">delete</button>

                            
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                <!-- MODAL DELETE -->          


                <!-- MODAL MODIFY -->        
                <div class="modal fade" id="modifyModal">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h6 class="modal-title">Modify dialogbox</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                                <!-- Error block -->          
                                <p id="errormod" style="color:red; font-size:18px;" align="center"></p>
                                <!-- Error block -->



                                <!-- Success block -->
                                <p id="successmod" style="color:Green; font-size:18px;" align="center"></p>
                                <!-- Success block -->  
                                <table>
                                <tr>
                                <td>
                                 <labe>group id </label>
                                </td>
                                <td> 
                                 <input type="text" id="grp_u_id" value="" disabled>  
                                </td>
                                 </tr>
                                 <tr>
                                 <td><labe>group name </label></td>
                                 <td><input type="text"  id="grp_u_name" value=""></td>    
                                 </tr>
                                 <tr>
                                 <td><labe>group description </label></td>
                                 <td><input type="text" id="grp_u_desc" value=""></td>
                                 </tr>
                                 </table>
                          </div>
                          <div class="modal-footer justify-content-between">
                          <button onclick="modify_grp()">modify</button>

                            
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                <!-- MODAL MODIFY -->          




                <!-- MODAL ADD-SUB -->        
                <div class="modal fade" id="subAddModal">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h6 class="modal-title">Create Subgroup dialogbox</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                                <!-- Error block -->          
                                <p id="erroras" style="color:red; font-size:18px;" align="center"></p>
                                <!-- Error block -->



                                <!-- Success block -->
                                <p id="successas" style="color:Green; font-size:18px;" align="center"></p>
                                <!-- Success block -->  
                                <table>
                                        <tr>
                                            <td>
                                            <labe>group id </label>
                                            </td>
                                            <td> 
                                            <input type="text" id="grp_s_id" value="" disabled>  
                                            </td>
                                        </tr>
                                        <tr>
                                        <td><labe>group name </label></td>
                                        <td><input type="text"  id="grp_s_name" value="" disabled></td>    
                                        </tr>
                                        <tr>
                                        <td><labe>sub-group name </label></td>
                                        <td><input type="text" id="sgrp_s_name" value=""></td>
                                        </tr>

                                        <tr>
                                        <td><labe>sub-group description </label></td>
                                        <td><input type="text" id="sgrp_s_desc" value=""></td>
                                        </tr>
                                 </table>
                          </div>
                          <div class="modal-footer justify-content-between">
                          <button onclick="add_sub_grp()">add sub-group</button>

                            
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                <!-- MODAL ADD-SUB -->  


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
<!-- AdminLTE App -->
<script src="<?php echo base_url()."assets/"; ?>dist/js/adminlte.min.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url()."assets/"; ?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url()."assets/"; ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

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



</script>


</body>
</html>
