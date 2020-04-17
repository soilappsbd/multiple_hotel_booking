<?php $this->load->view("home/common/head");?>
    <!-- Navigation -->
<?php $this->load->view("home/common/navigation");?>


    <!-- Page Content -->
<?php echo $content;?>
    <!-- /.container -->

	
<!-- Modal -->
<div id="signup_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Register</h4>
      </div>
      <div class="modal-body">
        <p>
			
			<form action="home/signup" method="POST">
			  
			  <div class="form-group">
				<label for="full name">Full Name :</label>
				<input type="text" name="fullname" class="form-control" id="fullname" required>
			  </div>
			
			  <div class="form-group">
				<label for="email">Email Address:</label>
				<input type="email" name="email" class="form-control" id="email" required>
			  </div>
			  <div class="form-group">
				<label for="pwd">Create Password:</label>
				<input type="password" name="password" class="form-control" id="password" required>
			  </div>
			  
			  <div class="form-group">
				<label for="phone">Phone Number :</label>
				<input type="text" name="phone" class="form-control" id="phone" required>
			  </div>
			  
			  <div class="checkbox">
				<label><input type="checkbox"> Remember me</label>
			  </div>
			
			
			
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
		<input type="submit" class="btn btn-primary">
      </div>
	  </form>
    </div>

  </div>
</div>	



<!-- signin modal-->

<!-- Modal -->
<div id="signin_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sign In</h4>
      </div>
      <div class="modal-body">
        <p>
			
			<form action="home/login" method="POST">
			  <div class="form-group">
				<label for="email">Email Address:</label>
				<input type="email" name="email" class="form-control" id="email" required>
			  </div>
			  <div class="form-group">
				<label for="pwd"> Password:</label>
				<input type="password" name="password" class="form-control" id="pwd" required>
			  </div>
			  <div class="checkbox">
				<label><input type="checkbox"> Remember me</label>
			  </div>
			
			
			
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
		<input type="submit" class="btn btn-primary">
      </div>
	  </form>
    </div>

  </div>
</div>	
	
	
<?php $this->load->view("home/common/footer");?>
