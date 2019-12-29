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
<?php     
      $roles = array();
        $pagelist=$this->session->userdata('user_info');    
         foreach ($pagelist as $row) :
                array_push($roles,$row->role_key); 
         endforeach;

        //print_r($roles);   
?> 
	  
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


           <!--     <div class="row"> -->



          

               <!-- general form elements -->
               <div class="col-md-12">    
            <div class="card card-secondary" style="width: 50%;font-size: 71%;">
              <div class="card-header">
                <h3 class="card-title">Create User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

    <?php if( in_array("crtuser", $roles) ): ?>        
                                <?php echo form_open('user/Create_User/insert_data');?>
                                  <div class="card-body">
                                    
                            <!--  Form validation block -->

                            <div style='color:red'>
                                <?php echo validation_errors(); ?>
                            </div>

                            <!--  Form validation block -->
                            <div class="row">
                              <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                              <label>Authentication Type</label>
                                                          <select class="custom-select" id="userType" name="userType" style="font-size: small;">
                                                          <option value="">---Select User Type---</option>
                                                            <option value="AD">Active Directory</option>
                                                            <option value="DB">Local User</option>
                                                          
                                                          </select>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                                
                                </div>
                              </div>
                            </div>
      
                                
                            <div class="row">
                              <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                <label>First Name</label>   
                                      <?php echo form_input(['name'=>'firstName','id'=>'firstName','class'=>'form-control form-control-sm','autofocus'=>'autofocus','value'=>set_value('firstName')]);?>

                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                <label>Last Name</label>
                                                  <?php echo form_input(['name'=>'lastName','id'=>'lastName','class'=>'form-control form-control-sm','autofocus'=>'autofocus','value'=>set_value('lastName')]);?>      
                                                 
                                </div>
                              </div>
                            </div>


                            <div class="row">
                              <div class="col-sm-6">
                                    <div class="form-group">

                                                  <label for="exampleInputEmail1">User id / Username</label>
                                                  <?php echo form_input(['name'=>'userId','id'=>'userId','class'=>'form-control form-control-sm','autofocus'=>'autofocus','value'=>set_value('userId')]);?>
                                                   
                                    </div>
                              </div>
                              <div class="col-sm-6">
                                    <div class="form-group">

                                                  <label>Mobile Number</label>
                                                  <?php echo form_input(['name'=>'mobileNumber','id'=>'mobileNumber','class'=>'form-control form-control-sm','autofocus'=>'autofocus','value'=>set_value('mobileNumber')]);?>
                                              
                                    </div>
                              </div>
                            </div>  

                          
                            <div class="row">
                              <div class="col-sm-6">
                                    <div class="form-group">
                                        <div id="passworddiv">
                                                      <label for="exampleInputPassword1">User Password</label>
                                                      <?php echo form_input(['name'=>'userPassword','id'=>'userPassword','class'=>'form-control form-control-sm','autofocus'=>'autofocus','value'=>'Test@12345']);?>
                                        </div>


                                        
                                    </div>
                              </div>
                              <div class="col-sm-6">
                                    <div class="form-group">

                                    <div id="domainDiv">
                                                  <label for="exampleInputPassword1">User Domain</label>
                                                  <select class="custom-select" id="domain" name="domain" style="font-size: small;">
                                                            <option value="">---Select domain---</option>
                                                            <option value="RGCOM.com">RGCOM.com</option>
                                                            <option value="RGCOM ">RGCOM</option>
                                                          
                                                  </select>

                                        </div>     
                                    </div>
                              </div>
                            </div>  
                      

                            <div class="row">
                              <div class="col-sm-6">
                                    <div class="form-group">
                                    <label>User Status</label>
                                                          <select class="custom-select" id="isActive" name="isActive" style="font-size: small;">
                                                            <option value="">---Select Status---</option>
                                                            <option value="1">Active</option>
                                                            <option value="0">Inactive</option>
                                                          
                                                  </select>
                                    </div>
                              </div>
                              <div class="col-sm-6">
                                    <div class="form-group">
                                    
                                    </div>
                              </div>
                            </div>  
                            <div class="row">
                              <div class="col-sm-6">
                                    <div class="form-group">
                                    <label>Group Name</label>
                                                          <select class="custom-select" id="workGroup_id" name="workGroup_id" style="font-size: small;">
                                                          <option value="">---Select Workgroup---</option>                                        
                                                          <?php foreach($grp_names as $row) { ?>
                                                          <option value="<?=$row->groupID?>"><?=$row->groupName?></option>
                                                          <?php } ?>
                                                          
                                                          </select>
                                             
                                    </div>
                              </div>
                              <div class="col-sm-6">
                                    <div class="form-group">
                                    <label>Subgroup Name</label>
                                                          <select class="custom-select" id="subGroup" name="subGroup" style="font-size: small;">
                                                          <option value="">---Select Subgroup---</option>                                        
                                                         
                                                          </select>
                                             
                                    </div>
                              </div>
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
            </div> <!-- . col-md-6  -->


              &nbsp;&nbsp;&nbsp;

             

   <!-- </div> /.row -->
           




        

        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script>
  $("#userType").change(function(){
    var txt = $( "#userType option:selected" ).val();
		if (txt == "AD")
		{
		$("#passworddiv").hide();
    $("#domain").show();
		}else{
		$("#passworddiv").show();
    $("#domain").hide();
		}

    if (txt == "")
    {
      $("#passworddiv").hide();
      $("#domain").hide(); 
    }
 });

 $("#workGroup_id").change(function(){


  var workGroup_id = $( "#workGroup_id option:selected" ).val();
  alert("hello="+workGroup_id);
        $.ajax({
        type : 'POST',
        url : 'Create_User/getSubgroup',
        dataType: 'JSON',
        data : {
        'workGroup_id' : workGroup_id },
        success:function (data) {
            alert("success = "+data);
            var len = data.length;
            alert(len);
            var a="";
           
               for(var i = 0; i<len; i++)
               {
                    var id = data[i]['subGroupId'];
                    var name = data[i]['subGroupName'];
                    a+="<option value='"+id+"'>"+name+"</option>";
                   
                }
                alert(a);
                $('#subGroup').html(a);


        },
        error : function(error) {
          alert("error = "+error);
        },
        });     


 });


 </script>

  <!-- Main Footer -->
  <!-- ADD FOOTER HERE -->
  

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url()."assets/"; ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()."assets/"; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."assets/"; ?>dist/js/adminlte.min.js"></script>




</body>
</html>
