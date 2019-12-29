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
              
      <!-- GET ALL ACCESS -->
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
                  <th>first name</th>
                  <th>last name</th>
                  <th>user</th>
                  <th>mobile</th>
                  <th>RegDate</th>
                  <th>status</th>
                  <th>Workgroup </th>
                  
                  <th>User type</th>
                  <th>Domain</th>
                  <th>Sub-group</th>
                  <th>Action</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
if(count($page_result)) :
$cnt=1; 
foreach ($page_result as $row) :
?>                    
                    <tr>
                    <td><?php echo htmlentities($row->id)?></td>
                      <td><?php echo htmlentities($row->firstName);?></td>
                      <td><?php echo htmlentities($row->lastName)?></td>
                      
                      <td><?php echo htmlentities($row->userId)?></td>
                      <td><?php echo htmlentities($row->mobileNumber)?></td>
                      <td><?php echo htmlentities($row->regDate)?></td>
                      <td><?php echo htmlentities($row->isActive)?></td>
                      <td><?php echo htmlentities($row->workGroup_id)?></td>
                      
                      <td><?php echo htmlentities($row->userType)?></td>
                      <td><?php echo htmlentities($row->domainName)?></td>
                      <td><?php echo htmlentities($row->subGroup)?></td>
                      <td><button  class="btndel btn btn-block btn-outline-danger btn-xs">delete</button></td>
                      <td><button  class="btnmodify btn btn-block btn-outline-primary btn-xs">modify</button></td>
                    
                    </tr>
 <?php 
$cnt++;
endforeach;
else : ?>

<tr>
<td colspan="13">No Record found</td>
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








                <!-- MODAL DELETE -->        
                <div class="modal fade" id="deleteModal">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h6 class="modal-title">Delete dialogbox</h6>
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

                                  Ary sure you want to delete user &nbsp;&nbsp;&nbsp; <input type="hidden" id="duserid" value="">  <input type="text"  id="dusername" value="" disabled>    

                            
                          </div>
                          <div class="modal-footer justify-content-between">
                          <button onclick="delete_cust()">delete</button>

                            
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
                            <button type="button" class="close" data-dismiss="modal" onclick="form_load()" aria-label="Close">
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

                              
                              
  
                                <table>
                                <tr>
                                <td>
                                 <labe>group id </label>
                                </td>
                                <td> 
                                 <input type="text" id="id" name="id" value="" disabled>  
                                </td>
                                 </tr>
                                 <tr>
                                 <td><labe>first name </label></td>
                                 <td><input type="text" name="firstname" id="firstname" class="form-control form-control-sm" value=""></td>    
                                 </tr>
                                 <tr>
                                 <td><labe>last name</label></td>
                                 <td><input type="text" id="lastname" name="lastname" value=""></td>
                                 </tr>
                                 <tr>
                                 <td><labe>user id</label></td>
                                 <td><input type="text" id="user" name="user" value=""></td>
                                 </tr>
                                 <tr>
                                 <td><labe>mobile number</label></td>
                                 <td><input type="text" id="mobile" name="mobile" value=""></td>
                                 </tr>
                                 <tr>
                                 <td><labe>status</label></td>
                                 <td><select  class="custom-select" id="status" name="status">
                                       <option value="0">inactive</option>
                                       <option value="1">active</option>
                                      
                                    </select></td>
                                 </tr>
                                
                                 <tr>
                                 <td><labe>work group</label></td>
                                 
                                 
                                 <td>
                                                <select class="custom-select" id="workgroup" name="workgroup" style="font-size: small;">
                                                                                                  
                                                          <?php foreach($grp_names as $row) { ?>
                                                          <option value="<?=$row->groupID?>"><?=$row->groupName?></option>
                                                          <?php } ?>
                                 
                                 </td>
                                 </tr>
                                 <tr>
                                 <td><labe>user type</label></td>
                                 <td> 
                                 <select id="loginusertype" name="loginusertype" class="custom-select">                  
                                          <option value="DB">Local User</option>
                                          <option value="AD">Active Directory</option>                                                         
                                 </select>
                                 </td>
                                 </tr>


                                 <tr>
                                 <td><labe>domain</label></td>
                                 <td> 
                                 <select id="domain" name="domain" class="custom-select">                  
                                                    <option value="RGCOM.com">RGCOM.com</option>
                                                    <option value="RGCOM ">RGCOM</option>                                                      
                                 </select>
                                 </td>
                                 </tr>


                                 <tr>
                                 <td><labe>subgroup</label></td>
                                 <td> 
                                 <select id="subgroup" name="subgroup" class="custom-select">                  
                                                                                         
                                 </select>
                                 </td>
                                 </tr>
                                 
                                 </table>
                            
                          </div>
                          <div class="modal-footer justify-content-between">
                          <input type="button" onclick="modify_cust()" class="btn btn-block btn-outline-primary btn-xs" value="modify">
                         
                            
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                <!-- MODAL MODIFY -->

<!-- JSQUERY LOADING -->
<script src="<?php echo base_url()."assets/"; ?>plugins/jquery/jquery.min.js"></script>
<!-- JSQUERY LOADING -->
<script>

function form_load()
{
  location.reload(true);
}

function delete_cust()
{
  var id = $('#duserid').val();
  var username = $('#dusername').val();
                      $.ajax({
                        url:"deleteUserAj",
                        method:"POST",
                        data :{
                          'id' : id,
                          'username' : username
                        },
                        //dataType: 'JSON',
                        success:function(data){

                            $('#successdel').html(data);
  
                        },
                        error:function(error){
                          $('#errordel').html(error);
                        },
                      

                      });

}

function modify_cust()
{

//alert("modify customer got called...");

  var firstName=$('#firstname').val();
  var lastName = $('#lastname').val();
  var userId = $('#user').val();
  var mobileNumber = $('#mobile').val();
  var isActive = $('#status').val();
  var workGroup_id = $('#workgroup').val();
  var userType = $('#loginusertype').val();
  var id = $('#id').val();
  var domain =$('#domain').val();
  var subgroup =$('#subgroup').val();
  

                      $.ajax({
                        url:"inserUserAj",
                        method:"POST",
                        data :{
                          'id' : id,
                          'firstName' : firstName,
                          'lastName' : lastName,
                          'userId' : userId,
                          'mobileNumber' : mobileNumber,
                          'isActive' : isActive,
                          'workGroup_id' : workGroup_id,
                          'userType' : userType,
                          'subgroup' : subgroup,
                          'domain' : domain


                        },
                        //dataType: 'JSON',
                        success:function(data){

                            $('#successup').html(data);
                           // location.reload(true);
                        },
                        error:function(error){
                          $('#errorup').html(error);
                        },
                      

                      });
}


$('.tbrr tbody').on('click','.btndel',function(){

//alert("button delete");
var currow = $(this).closest('tr');
var col1 = currow.find('td:eq(0)').text(); //id
var col2 = currow.find('td:eq(1)').text(); //firstname

$('#deleteModal').modal({show:true});
$('#duserid').val(col1); //id
$('#dusername').val(col2); //firstname





});

$('.tbrr tbody').on('click','.btnmodify',function(){

var currow = $(this).closest('tr');
var col1 = currow.find('td:eq(0)').text(); //id
var col2 = currow.find('td:eq(1)').text(); //firstname
var col3 = currow.find('td:eq(2)').text(); // lastname
var col4 = currow.find('td:eq(3)').text(); // user
var col5 = currow.find('td:eq(4)').text(); // mobile


var col6 = currow.find('td:eq(5)').text(); // Regdate
var col7 = currow.find('td:eq(6)').text(); // status
var col8 = currow.find('td:eq(7)').text(); // workgroup
var col9 = currow.find('td:eq(8)').text(); // usertype
var col10 = currow.find('td:eq(9)').text(); // domain
var col11 = currow.find('td:eq(10)').text(); // subgroup 

$('#modifyModal').modal({show:true});
$('#id').val(col1); //id
$('#firstname').val(col2); //firstname
$('#lastname').val(col3); //lastname
$('#user').val(col4); //user
$('#mobile').val(col5); //mobile

$('#Regdate').val(col6); //Regdate
$('#status').val(col7); //status
$('#workgroup').val(col8); //workgroup
$('#loginusertype').val(col9); //usertype
$('#domain').val(col9); //domain
$('#subgroup').val(col9); //subgroup



});

</script>


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




  $("#workgroup").change(function(){


var workGroup_id = $( "#workgroup option:selected" ).val();
//alert("hello="+workGroup_id);
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
            //  alert(a);
              $('#subgroup').html(a);


      },
      error : function(error) {
        alert("error = "+error);
      },
      });     


});


$('#modifyModal').on('show.bs.modal', function () {
  //alert("modal loaded successfully...");

  setTimeout(function(){  
  var workGroup_id = $( "#workgroup option:selected" ).val();
      //alert("hello="+workGroup_id);
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
              $('#subgroup').html(a);


      },
      error : function(error) {
        alert("error = "+error);
      },
      });    //ajax closed

    }, 5000); // timeout closesed

})  // modal on load
</script>


</body>
</html>
