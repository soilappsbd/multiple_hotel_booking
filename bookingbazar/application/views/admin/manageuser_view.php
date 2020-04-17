<?php $this->load->view("admin/header_view");?>
<body class="hold-transition skin-blue sidebar-mini">
<?php $this->load->view("admin/head_view");?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
   <?php $this->load->view("admin/sidebar_view");?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add User 
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>Admin"><i class="fa fa-files-o"></i> Dashboard </a></li>
        <li class="active">Add User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
			<div class="col-md-12">
			  <?php if($this->session->flashdata("msg")){
								 echo $this->session->flashdata("msg");
							  }
			  ?>
			  <!-- general form elements -->
			  <div class="box box-primary">
			  
					
			  
				<div class="box-header with-border">
				  <h3 class="box-title">User Add Form</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="<?php echo base_url();?>Admin/manageuser" method="POST">

				  <div class="box-body">
				  
					<div class="form-group">
						  <label for="campaign">Campaign</label>
						  <select name="campaign" class="form-control" >
						  <?php if($campaign){
							  foreach($campaign as $campaigndata):
							?>
							<option value="<?php echo $campaigndata->id;?> "> <?php echo $campaigndata->campaignname;?> (<?php $followup = $campaigndata->followup; if($followup==1){ echo "1st Database";}elseif($followup==2){echo "2nd Database";}else{ echo "NONE";}?>)</option>
						  <?php 
							endforeach;
						  }?>	
						  </select>
					 </div>
					 
					 <div class="form-group">
					  <label for="username">Full Name</label>
					  <input type="text" class="form-control" name="name"  id="name" placeholder="example:Mr. John Doe" required>
					</div>
					 
					<div class="form-group">
					  <label for="username">Username</label>
					  <input type="text" class="form-control" name="username"  id="username" placeholder="example:johndoe" required>
					</div>
					
					<div class="form-group">
					  <label for="password">Password</label>
					  <input type="text" class="form-control" name="password" id="password"  required>
					</div>
					
					<div class="form-group">
					  <label for="privilege">Privilege</label>
					  <select class="form-control" name="privilege" id="privilege">
						<option value="1">Admin</option>
						<?php if($this->session->userdata("admin_login")==TRUE){?>
						<option value="2">Super Admin</option>
						<?php }?>
					  </select>
					</div>
					
				
					<div class="form-group">
					   <input type="radio" class="" name="active" value="1" checked="checked"> Active 
					   <input type="radio" class="" name="active" value="0"> Inactive 
					</div>		

			
				  </div>
				  <!-- /.box-body -->
			
				  
				  
				  <div class="box-footer">
					<input type="submit" class="btn btn-primary" value="Add User">
					<!--
					<a href="https://accounts.google.com/DisplayUnlockCaptcha" target="_blank">Gmail Unblock Captcha</a>
					-->
				  </div>
				</form>
			  </div>
			  <!-- /.box -->
			</div>
			
		</div>	
		
    </section>
    <!-- /.content -->
	
	
	    <section class="content">
		<div class="row">
		 <div class="col-md-12">
			  <div class="box">
				<div class="box-header">
				  <h3 class="box-title">Users </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <table id="example1" class="table table-bordered table-striped">
					<thead>
					<tr>
		
					  <th> Campaign</th>
					  <th> Limit</th>
					  <th> Name</th>
					  <th> Username</th>
					  <th> Password</th>
					  <th> Status</th>
					  <th>Privilege</th>
		
					  <th>Join Date</th>
					  <th>Edit</th>
					  <th>Delete</th>

					</tr>
					</thead>
					<tbody>
					<?php 
					//pd($smtp);
					if($users){
					foreach($users as $usersdata):?>
					<tr>
					  <td><?php echo $usersdata->campaignname; ?> (<?php $followup = $campaigndata->followup; if($followup==1){ echo "1st Database";}elseif($followup==2){echo "2nd Database";}else{ echo "NONE";}?>)</td>
					  <td><?php echo $usersdata->campaignlimit; ?></td>
					  <td><?php echo $usersdata->name; ?></td>
					  <td><?php echo $usersdata->username; ?></td>
					  <td> <?php echo $usersdata->password; ?></td>
					  <td> <?php $flag = $usersdata->flag; if($flag==1){echo '<span style="color:green">Active</span>';}else{ echo '<span style="color:red">Inactive</span>';}?></td>
					  <td> <?php $previlege = $usersdata->privillage; if($previlege==1){ echo "Admin";}elseif($previlege==2){echo "Super Admin";}else{ echo "NONE";}?></td>

					   
					  <td> <?php echo date("d-M-y h:i A",$usersdata->joindate); ?></td>
					  <td><a href="<?php echo base_url();?>Admin/edituser/<?php echo $usersdata->id; ?>" class="btn btn-warning btn-xs">Edit </a></td>
					  <td><a href="<?php echo base_url();?>Admin/deletuser/<?php echo $usersdata->id; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this Mater Mail?');">Delete </a> </td>
					</tr>
					<?php endforeach;
					}?>
				   </tbody>
				  </table>
				</div>
				<!-- /.box-body -->
			  </div>
		 </div>
		
		</div>
    </section>
    <!-- /.content -->
  </div>
  
<script>
$(document).ready(function(){
	
	///Auto Fill hostname
     $("#smtpusername").change(function(){
		var emailid = $(this).val(); 
		 if (emailid.indexOf("@gmail.com") >= 0){
			  $("#hostname").val("smtp.gmail.com");
			  $("#verifiedmail").val(emailid);
			  $("#dailylimit").val("200");
			  
		 }else if(emailid.indexOf("@yahoo") >= 0){
			 $("#hostname").val("smtp.mail.yahoo.com");
			 $("#verifiedmail").val(emailid);
			 $("#dailylimit").val("200");
			   
		 }else if(emailid.indexOf("@ymail.com") >= 0){
			  $("#hostname").val("smtp.mail.yahoo.com");
			  $("#verifiedmail").val(emailid);
			  $("#dailylimit").val("200");
				
		 }else if(emailid.indexOf("@outlook.com") >= 0){
			 $("#hostname").val("smtp-mail.outlook.com");
			 $("#verifiedmail").val(emailid);
			 $("#dailylimit").val("200");
			   
		 }else if(emailid.indexOf("@live.com") >= 0){
			 $("#hostname").val("smtp.live.com");
			 $("#verifiedmail").val(emailid);
			 $("#dailylimit").val("200");
			   
		 }else if(emailid.indexOf("@hotmail.com") >= 0){
			 $("#hostname").val("smtp-mail.outlook.com");
			 $("#verifiedmail").val(emailid);
			  $("#dailylimit").val("200");
			   
		 }else if(emailid.indexOf("@aol.com") >= 0){
			 $("#hostname").val("smtp.aol.com");
			 $("#verifiedmail").val(emailid);
			   $("#dailylimit").val("200");
			   
		 }else if(emailid.indexOf("@yandex.com") >= 0){
			 $("#hostname").val("smtp.yandex.com");
			 $("#verifiedmail").val(emailid);
			$("#dailylimit").val("200");	
			
		 }else if(emailid.indexOf("@mail.ru") >= 0){
			 $("#hostname").val("smtp.mail.ru");
			 $("#verifiedmail").val(emailid);
			 $("#dailylimit").val("200");
			 
		 }else{
			 $("#hostname").val(""); 
		 }
	 });
///Auto Fill hostname end
	 ///https://www.sitepoint.com/use-jquerys-ajax-function/
	  $("#testmail").click(function(){
		var emailid = $("#emailid").val();  
		var emailpassword = $("#emailpassword").val();  
		var hostname = $("#hostname").val();  
		var port = $("#port").val();  
		var protocol = $("#protocol").val();  
			   
			   var informationvar = { "emailid": emailid, "emailpassword": emailpassword, "hostname": hostname, "port": port, "protocol": protocol	}; 
				 
				 
				 
				  $.ajax({
				   type: "POST",
				   url: "<?php echo base_url()?>Admin/testmastermail",
				   data: informationvar,
				   success: function(data) {
					   console.log(data);
					  $("#result").html(data);
					 }, 
				   error: function(data){
					   console.log(data)
					 $("#result").html(data);
					 }
				  });//ajax end here
				  
		 return false; 
		
	  });
});

</script> 
  <!-- /.content-wrapper -->
<?php $this->load->view("admin/footer_view");?>