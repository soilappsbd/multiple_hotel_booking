
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
				  <h3 class="box-title">Add Location Form</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="<?php echo base_url();?>Admin/locations" method="POST">

				  <div class="box-body">
				  
					<div class="form-group">
						  <label for="country">Country</label>
						  <select name="country" class="form-control" >
								<option value=""> Select Country </option>
								<option value="Bangladesh"> Bangladesh </option>
								<option value="India"> India </option>
								<option value="Nepal"> Nepal </option>
								<option value="Thailand"> Tahiland </option>
								<option value="Srilanka"> Srilanka </option>
								<option value="Maldeves"> Maldeves </option>
						  </select>
					 </div>
					 
					 <div class="form-group">
					  <label for="username">Location Name (City)</label>
					  <input type="text" class="form-control" name="location"  id="location" placeholder="example: Dhaka" required>
					</div>
					 
					
			
				  </div>
				  <!-- /.box-body -->
			
				  
				  
				  <div class="box-footer">
					<input type="submit" class="btn btn-primary" value="Add Location">
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
				  <h3 class="box-title">Locations </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <table id="example1" class="table table-bordered table-striped">
					<thead>
					<tr>
		
					  <th> SL</th>
					  <th> Country</th>
					  <th> Location Name</th>
					  
					  <th>Edit</th>
					

					</tr>
					</thead>
					<tbody>
					<?php 
					//pd($smtp);
					if($locations){
						$i =1;
					foreach($locations as $locationdata){?>
					<tr>
		
					  <td><?php echo $i; ?></td>
					  <td><?php echo $locationdata->country; ?></td>
					  <td><?php echo $locationdata->locationname; ?></td>
				
					  <td><a href="<?php echo base_url();?>Admin/editlocation/<?php echo $locationdata->id; ?>" class="btn btn-warning btn-xs">Edit </a></td>

					</tr>
					<?php 
					$i++;
					};
					}?>
				   </tbody>
				  </table>
				</div>
				<!-- /.box-body -->
			  </div>
		 </div>
		
		</div>
    </section>
   