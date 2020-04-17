
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
			<div class="col-md-12">
			  <!-- general form elements -->
			  <div class="box box-primary">
				<div class="box-header with-border">
				  <h3 class="box-title">Add Hotel Rooms</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="<?php echo base_url();?>Admin/rooms" method="POST">

				  <div class="box-body">
					<div class="row"> 
						  <div class="col-md-6">
						  	<div class="form-group">
								  <label for="location">Location</label>
								  <select name="location" class="form-control" id="loaction">
										<option value=""> Select Hotel </option>
										<?php 
										
										foreach($locations as $r){?>
											<option value="<?php echo  $r->id;?>"> <?php echo $r->country;?>-<?php echo $r->locationname;?> </option>
										<?php }?>
								  </select>
							 </div>
						  
							<div class="form-group">
								  <label for="hotel">Hotels</label>
								  <select name="hotelid" class="form-control" id="hotelid" required>
										<option value=""> Select Hotel </option>
									
								  </select>
							 </div>
							 
							 <div class="form-group">
							  <label for="roomname">Room Type Name</label>
								<select name="roomname" class="form-control" required>
									<option value=""> Select Room Type </option>
									<option value="1"> Super Deluxe Double Room </option>
									<option value="2"> Super Deluxe Twin Room </option>
									<option value="3"> Premier Room </option>
									<option value="4"> Executive Suite </option>
									<option value="5"> Deluxe King</option>
									<option value="6"> Deluxe Single Room</option>
									<option value="7"> Deluxe Twin Room</option>
									<option value="8"> Double Room</option>
									<option value="9"> Standard Twin Room</option>
								</select>
							</div>
							
							<div class="form-group">
							   <label for="guestallowed">Guest Allowed</label>
								<select name="guestallowed" class="form-control" required>
									<option value=""> Select Guest  </option>
									<option value="1"> 1 </option>
									<option value="2"> 2 </option>
									<option value="3"> 3 </option>
									<option value="4"> 4 </option>
								</select>
							</div>

							
							<div class="form-group">
								<label for="bed">Bed (Bedroom)</label> <br/>
								<select name="bed_bedroom" class="form-control" required>
									<option value="0">None</option>
									<option value="1 King Bed"> 1 King Bed</option>
									<option value="2 King Bed"> 2 King Bed</option>
									<option value="1 Sofa Bed"> 1 Sofa Bed </option>
									<option value="2 Sofa Bed"> 2 Sofa Bed </option>
									<option value="1 Twin Bed"> 1 Twin Bed</option>
									<option value="2 Twin Bed"> 2 Twin Bed</option>
								</select>
							</div>
							
														
							<div class="form-group">
							  <label for="price">Room Description</label>
							  <textarea class="form-control" name="description" required> </textarea>
							</div>
							
						</div>	
					
						<div class="col-md-6">
							<div class="form-group">
							  <label for="price">Base Price</label>
							  <input type="text" name="baseprice" class="form-control" required> 
							</div>
							
							<div class="form-group">
							  <label for="price">Today Price</label>
							  <input type="text" name="todayprice" class="form-control" required> 
							</div>
							
							
							
							<div class="form-group">
							  <label for="roomsize">Room Size (sqft)</label>
							  <input type="number" name="roomsize" class="form-control" required> 
							</div>
							
						
							
							<div class="form-group">
							  <label for="howmany">How Many Rooms </label>
							  <input type="number" name="howmany" class="form-control" required> 
							</div>

							<div class="form-group">
								<label for="bed">Bed (Living)</label> <br/>
								<select name="bed_livingroom" class="form-control" required>
									<option value="0">None</option>
									<option value="1 King Bed"> 1 King Bed</option>
									<option value="2 King Bed"> 2 King Bed</option>
									<option value="1 Sofa Bed"> 1 Sofa Bed </option>
									<option value="2 Sofa Bed"> 2 Sofa Bed </option>
									<option value="1 Twin Bed"> 1 Twin Bed</option>
									<option value="2 Twin Bed"> 2 Twin Bed</option>
								</select>
							</div>
							
							<div class="form-group">							
								<label for="roomsize">Offer (%)</label>
								<input type="number" name="offerpercent" class="form-control">
							</div>

						</div>
					  </div>
						
						
						<div class="row"> 
							<div class="form-group">
								<div class="col-md-12">
								  <label for="price">Facilities</label>
								  <textarea class="form-control" name="facilities" required> </textarea>
								</div>
							</div>
						</div>
						
							<div class="row"> 
								<div class="form-group">
								  
									<div class="col-md-4">
										<ul>
										  <li><input type="checkbox" name="facility[]" class="form-checkbox" value="Free WiFi"> <label for="Free WiFi"> Free WiFi</label></li>
										  <li><input type="checkbox" name="facility[]" class="form-checkbox" value="FREE cancellation"> <label for="FREE cancellation"> FREE cancellation</label></li>
										  <li><input type="checkbox" name="facility[]" class="form-checkbox" value="Garden View"> <label for="Garden View"> Garden View</label></li>
										  
										 
										</ul>
									</div>
									 
									 <div class="col-md-4">	
										<ul>
										  <li><input type="checkbox" name="facility[]" class="form-checkbox" value="Private bathroom"> <label for="Private bathroom">Private bathroom</label>
										  </li>
										  
										    <li><input type="checkbox" name="facility[]" class="form-checkbox" value="NO PREPAYMENT NEEDED – pay at the property"> <label for="NO PREPAYMENT NEEDED – pay at the property">NO PREPAYMENT NEEDED – pay at ..</label>
										  </li>
										   <li><input type="checkbox" name="facility[]" class="form-checkbox" value="City View"> <label for="City View"> City View</label></li>

										</ul>
									 </div>

									 <div class="col-md-4">	
										<ul>
										  <li><input type="checkbox" name="facility[]" class="form-checkbox" value="Good Breakfast Included"> <label for="Good Breakfast Included">Good Breakfast Included</label>
										  </li>
										  
										   <li><input type="checkbox" name="facility[]" class="form-checkbox" value="Special Conditions"> <label for="Special Conditions">Special Conditions</label>
										  </li>
										   <li><input type="checkbox" name="facility[]" class="form-checkbox" value="Beach View"> <label for="Beach view">Beach View</label></li>
										  

										</ul>
									 </div>						  
								</div>
							</div>
					  </div>
				 </div><!-- /.box-primary-->
						
				 
				  <div class="box-footer">
					<input type="submit" class="btn btn-primary" value="Add Room">
				  </div>
				</form>
				
			  </div><!-- /.col-md-12-->
			  
			</div><!-- /.row-->
    </section><!-- /.content -->
	
	

  </div>
	   <script type = "text/javascript" language = "javascript">
         $(document).ready(function() {
            $("#loaction").on('change', function(event){
				var location = $(this).val();
				var data = {'location':location};
				 $.ajax({
					 type: "POST",
					 data: data,
					 url: "<?php echo base_url();?>admin/appendhotel", 
					 success: function(result){
						 console.log(result);
						$("#hotelid").append(result);
					}
				});
				
					
            });
         });
      </script>