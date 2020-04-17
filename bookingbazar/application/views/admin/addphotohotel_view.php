    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
			<div class="col-md-12">
			  <!-- general form elements -->
			  <div class="box box-primary">
				<div class="box-header with-border">
				  <h3 class="box-title"><?php echo $pagetitle; ?></h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="<?php echo base_url();?>Admin/addphotohotel" method="POST" enctype="multipart/form-data">
					<input type="hidden" value="<?php echo $id;?>" name="id">
				  <div class="box-body">
				  
					 <div class="form-group">
					  <label for="vendorname">Photo List</label>
					 <?php echo form_upload('uploadedimages[]','','multiple'); ?>
					</div>

				  </div>
				  <!-- /.box-body -->
			
				  
				  
				  <div class="box-footer">
					<input type="submit" class="btn btn-primary" value="Add Photo">
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
	
	