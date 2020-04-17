
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
				  <h3 class="box-title">Add Hotel List</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" action="<?php echo base_url();?>Admin/addhotel" method="POST">

				  <div class="box-body">
				  
				   <div class="col-md-6">
				   
						<div class="form-group">
							  <label for="location">Location</label>
							  <select name="location" class="form-control" >
									<option value=""> Select Location </option>
									<?php foreach($locations as $locationdata){?>
										<option value="<?php echo $locationdata->id;?>"> <?php echo $locationdata->country;?>-<?php echo $locationdata->locationname;?> </option>
									<?php }?>
							  </select>
						 </div>
						 

						 
						<div class="form-group">
						  <label for="Hotel">Hotel Name</label>
						  <input type="text" class="form-control" name="hotelname"  id="hotelname" placeholder="example: Hotel Name" required>
						</div>
						
						 <div class="form-group">
						  <label for="Subway">Subway Access</label>
						  <input type="text" class="form-control" name="subway"  id="subway" placeholder="example:National Stedium is 50 KM " required>
						</div>
						
						
						
						<div class="form-group">
						  <label for="petallow">Pet Allowed</label>
						  <select name="petallow" class="form-control">
							<option value="1">Yes</option>
							<option value="2">No</option>
							<option value="3">Upon Request </option>
						  </select>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="form-group">
						  <label for="address">Hotel Address</label>
						  <input type="text" class="form-control" name="address"  id="address" placeholder="example: Hotel Address" required>
						</div>
						
						<div class="form-group">
						  <label for="address">Star Rating</label>
						  <select name="star" class="form-control">
						    <option value="0"> Undifined </option>
						    <option value="1">1 Start </option>
						    <option value="2">2 Start </option>
						    <option value="3">3 Start </option>
						    <option value="4">4 Start </option>
						    <option value="5">5 Start </option>
						  </select>
						</div>
						
						
						<div class="form-group">
						  <label for="ptype">Property Type</label>
						  <select name="star" class="form-control">
						    <option value="1"> Hotel </option>
						    <option value="2"> Apartments </option>
						    <option value="3"> Hostels </option>
						    <option value="4"> Guesthouses </option>
						    <option value="5"> Bed and Breakfast </option>
						    <option value="6"> Home Stays </option>
						    <option value="7"> Motels </option>
						    <option value="8"> Resorts </option>
						    <option value="9"> Vacation Homes </option>
						    <option value="10"> Lodges </option>
						    <option value="11"> Economy Hotel </option>
						    <option value="12"> Capsule Hotel </option>
						    <option value="13"> Villas </option>
						    <option value="14"> Ryokans </option>
						  </select>
						</div>
						
						<div class="form-group">
						  <label for="petallow">Pet Allowed</label>
						  <select name="petallow" class="form-control">
							<option value="1">Yes</option>
							<option value="2">No</option>
							<option value="3">Upon Request </option>
						  </select>
						</div>
						
						
					</div>
					
				
					
					<div class="form-group">
					  <label for="address">Description</label>
					  <textarea name="description" class="textarea form-control" required> </textarea>
					</div>
					
				<!-- General Factility--->	
					<div class="form-group">
					  <h3>General Facility </h3>
					  <div class="col-md-4">
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="gfacility[]" class="form-checkbox" value="Hypoallergenic"> <label for="Hypoallergenic"> Hypoallergenic </label></li>
						  
						  <li>  <input type="checkbox" name="gfacility[]" class="form-checkbox" value="Vending machine (snacks)"> <label for="Vending machine (snacks)">  Vending machine (snacks) </label></li>
						  <li> <input type="checkbox" name="gfacility[]" class="form-checkbox" value="Vending machine (drinks)"> <label for="Vending machine (drinks)"> Vending machine (drinks)</label></li>
						  <li>   <input type="checkbox" name="gfacility[]" class="form-checkbox" value="Facilities for disabled guests"> <label for="Facilities for disabled guests"> Facilities for disabled guests </label></li>
						 
						</ul>
					 </div>
					 
					  <div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="gfacility[]" class="form-checkbox" value="Non-smoking rooms"> <label for="Non-smoking rooms">  Non-smoking rooms </label></li>
						  <li>  <input type="checkbox" name="gfacility[]" class="form-checkbox" value="Newspapers"> <label for="Newspapers"> Newspapers </label></li>
						  <li> <input type="checkbox" name="gfacility[]" class="form-checkbox" value="Designated smoking area"> <label for="Designated smoking area">Designated smoking area </label></li>
						  <li>  <input type="checkbox" name="gfacility[]" class="form-checkbox" value="Non-smoking throughout"> <label for="Non-smoking throughout">  Non-smoking throughout </label></li>
						
						</ul>
					  </div>

					  <div class="col-md-4">	
						<ul class="list-unstyled">
						  <li> <input type="checkbox" name="gfacility[]" class="form-checkbox" value="Hardwood/Parquet floors"> <label for="Elevator"> Hardwood/Parquet floors </label></li>
						  <li>   <input type="checkbox" name="gfacility[]" class="form-checkbox" value="Laptop safe"> <label for="forLaptop safe">  Laptop safe </label></li>
						
						  <li> <input type="checkbox" name="gfacility[]" class="form-checkbox" value="Packed lunches"> <label for="Packed lunches"> Packed lunches </label></li>
						  <li> <input type="checkbox" name="gfacility[]" class="form-checkbox" value="Interconnected room(s) available"> <label for="Interconnected room(s) available">  Interconnected room(s) available</label></li>
						</ul>
					  </div>

					  <div class="col-md-4">	
						<ul class="list-unstyled">
						  <li>  <input type="checkbox" name="gfacility[]" class="form-checkbox" value="Carpeted"> <label for="Carpeted">  Carpeted</label></li>
						  <li> <input type="checkbox" name="gfacility[]" class="form-checkbox" value="Bridal suite"> <label for="Bridal suite">  Bridal suite </label></li>
						    <li> <input type="checkbox" name="gfacility[]" class="form-checkbox" value="Wake Up Service/Alarm Clock"> <label for="Wake Up Service/Alarm Clock"> Wake Up Service/Alarm Clock </label></li>
						  <li>   <input type="checkbox" name="gfacility[]" class="form-checkbox" value="Grocery deliveries(Additional charge)"> <label for="Lift">  Grocery deliveries(Additional charge) </label></li>
						</ul>
					  </div>


					 <div class="col-md-4">	
						<ul class="list-unstyled">
						  <li>  <input type="checkbox" name="gfacility[]" class="form-checkbox" value="Grocery deliveries(Additional charge)"> <label for="Grocery deliveries(Additional charge)">  Grocery deliveries(Additional charge)</label></li>
						  <li> <input type="checkbox" name="gfacility[]" class="form-checkbox" value="Mini-market on site"> <label for="Mini-market on site">  Mini-market on site </label></li>
						    <li> <input type="checkbox" name="gfacility[]" class="form-checkbox" value="Wake-up service"> <label for="Wake-up service"> Wake-up service </label></li>
						  <li>   <input type="checkbox" name="gfacility[]" class="form-checkbox" value="Tile/Marble floor"> <label for="Tile/Marble floor">  Tile/Marble floor </label></li>
						</ul>
					  </div>
					  
					  
					   <div class="col-md-4">	
						<ul class="list-unstyled">
						  <li>  <input type="checkbox" name="gfacility[]" class="form-checkbox" value="Soundproof rooms"> <label for="Soundproof rooms">  Soundproof rooms</label></li>
						  <li> <input type="checkbox" name="gfacility[]" class="form-checkbox" value="Soundproofing"> <label for="Soundproofing"> Soundproofing </label></li>
						  <li> <input type="checkbox" name="gfacility[]" class="form-checkbox" value="Wake Up Service/Alarm Clock"> <label for="Wake Up Service/Alarm Clock"> Family rooms</label></li>
						  <li>   <input type="checkbox" name="gfacility[]" class="form-checkbox" value="Grocery deliveries(Additional charge)"> <label for="Lift"> Heating</label></li>
						</ul>
					  </div>
					  
				
					  
					 
					  
					</div>
				<!--- General facility end-->
				
				
				<!--- Language of staff-->
				<div class="form-group">
					  <h3>Languages Spoken</h3>
					  <div class="col-md-3">
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="languagespoken[]" class="form-checkbox" value="Chinese"> <label for="Chineseg">  Chinese</label>
						  </li>
						   <li><input type="checkbox" name="languagespoken[]" class="form-checkbox" value="Hindi"> <label for="Hindi">  Hindi</label>
						  </li>
						</ul>
					 </div>
					 
					  <div class="col-md-3">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="languagespoken[]" class="form-checkbox" value="Malay"> <label for="Malay">  Malay </label>
						  </li>
						   <li><input type="checkbox" name="languagespoken[]" class="form-checkbox" value="Spanish"> <label for="Spanish">  Spanish </label>
						  </li>
						  
	
						</ul>
					  </div>

					  <div class="col-md-3">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="languagespoken[]" class="form-checkbox" value="Korean"> <label for="Korean"> Korean </label>
						  </li>
						  
						  <li><input type="checkbox" name="languagespoken[]" class="form-checkbox" value="French"> <label for="French"> French </label>
						  </li>

						</ul>
					  </div>	

					<div class="col-md-3">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="languagespoken[]" class="form-checkbox" value="English"> <label for="English"> English </label>
						  </li>
						   <li><input type="checkbox" name="languagespoken[]" class="form-checkbox" value="Russian"> <label for="Russian"> Russian </label>
						  </li>

						</ul>
					  </div>					  
					</div>
					<!--- Language of staff end-->
					
					<!--- Language of staff end-->
					<div class="form-group">
					  <h3>Front Desk Services</h3>
					  <div class="col-md-3">
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="frontdesk[]" class="form-checkbox" value="Lockers"> <label for="Lockers">  Lockers</label>
						  </li>
						   <li><input type="checkbox" name="frontdesk[]" class="form-checkbox" value="Baggage Storage"> <label for="Baggage Storage">  Baggage Storage </label>
						  </li>
						</ul>
					 </div>
					 
					  <div class="col-md-3">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="frontdesk[]" class="form-checkbox" value=" Ticket Service "> <label for=" Ticket Service ">  Ticket Service </label>
						  </li>
						   <li><input type="checkbox" name="frontdesk[]" class="form-checkbox" value="Tour Desk"> <label for="Tour Desk">  Tour Desk </label>
						  </li>
						  
	
						</ul>
					  </div>

					  <div class="col-md-3">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="frontdesk[]" class="form-checkbox" value="Currency Exchange "> <label for="Currency Exchange "> Currency Exchange </label>
						  </li>
						  
						  <li><input type="checkbox" name="frontdesk[]" class="form-checkbox" value="Express Check-in/Check-out"> <label for="Express Check-in/Check-out"> Express Check-in/Check-out </label>
						  </li>

						</ul>
					  </div>	

					<div class="col-md-3">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="frontdesk[]" class="form-checkbox" value="24-Hour Front Desk"> <label for="24-Hour Front Desk"> 24-Hour Front Desk </label>
						  </li>
						   <li><input type="checkbox" name="frontdesk[]" class="form-checkbox" value="Concierge Service"> <label for="Concierge Service"> Concierge Service </label>
						  </li>

						</ul>
					  </div>					  
					</div>
					
					
					<div class="form-group">
					  <h3>Cleaning Services</h3>
					  <div class="col-md-6">
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="cleaning[]" class="form-checkbox" value=" Dry Cleaning (free of charge)"> <label for="Dry Cleaning (free of charge)"> Dry Cleaning (free of charge)</label>
						  </li>
						</ul>
					 </div>
					 
					  <div class="col-md-6">
						<ul class="list-unstyled">
						   <li><input type="checkbox" name="cleaning[]" class="form-checkbox" value="Dry Cleaning (additional charge)"> <label for="Dry Cleaning (additional charge)">  Dry Cleaning (additional charge) </label>
						  </li>
						</ul>
					 </div>
					 
									  
					</div>
					
					<div class="form-group">
					  <h3>Bathroom</h3>
					  <div class="col-md-3">
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="bathroom[]" class="form-checkbox" value="Toilet"> <label for="Toilet"> Toilet</label>
						  </li>
						   <li><input type="checkbox" name="bathroom[]" class="form-checkbox" value="Toilet paper"> <label for="Toilet paper"> Toilet paper </label>
						  </li>
						  
						</ul>
					 </div>
					 
					  <div class="col-md-3">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="bathroom[]" class="form-checkbox" value="Hairdryer"> <label for="Hairdryer">  Hairdryer </label>
						  </li>
						   <li><input type="checkbox" name="bathroom[]" class="form-checkbox" value="Towels"> <label for="Towels"> Towels </label>
						  </li>
						</ul>
					  </div>

					  <div class="col-md-3">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="bathroom[]" class="form-checkbox" value="Shower"> <label for="Shower"> Shower </label>
						  </li>
						  
						  <li><input type="checkbox" name="bathroom[]" class="form-checkbox" value="Free toiletries"> <label for="Free toiletries"> Free toiletries </label>
						  </li>

						</ul>
					  </div>	

					<div class="col-md-3">	
						<ul class="list-unstyled">
						 <li><input type="checkbox" name="bathroom[]" class="form-checkbox" value="Bath"> <label for="Bath"> Bath </label>
						  </li>
						  
						  <li><input type="checkbox" name="bathroom[]" class="form-checkbox" value="Other"> <label for="Other"> Other </label>
						  </li>

						</ul>
					  </div>					  
					</div>
					
					<div class="form-group">
					  <h3>Services</h3>
					  <div class="col-md-3">
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="Services[]" class="form-checkbox" value="Luggage storage"> <label for="Luggage storage"> Luggage storage</label>
						  </li>
						   <li><input type="checkbox" name="Services[]" class="form-checkbox" value="Toilet paper"> <label for="Toilet paper"> Toilet paper </label>
						  </li>
						  
						</ul>
					 </div>
					 
					  <div class="col-md-3">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="Services[]" class="form-checkbox" value="Currency exchange"> <label for="Currency exchange">  Currency exchange</label>
						  </li>
						   <li><input type="checkbox" name="Services[]" class="form-checkbox" value="Towels"> <label for="Towels"> Towels </label>
						  </li>
						</ul>
					  </div>

					  <div class="col-md-3">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="Services[]" class="form-checkbox" value="Express check-in/check-out "> <label for="Express check-in/check-out "> Express check-in/check-out </label>
						  </li>
						  
						  <li><input type="checkbox" name="Services[]" class="form-checkbox" value="Free toiletries"> <label for="Free toiletries"> Free toiletries </label>
						  </li>

						</ul>
					  </div>	

					<div class="col-md-3">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="Services[]" class="form-checkbox" value="24-Hour Front Desk"> <label for="24-Hour Front Desk"> 24-hour front desk</label>
						  </li>
						   <li><input type="checkbox" name="Services[]" class="form-checkbox" value="Concierge Service"> <label for="Concierge Service"> Concierge Service </label>
						  </li>

						</ul>
					  </div>					  
					</div>
			
					<div class="form-group">
					  <h3>Media & Technology</h3>
					  <div class="col-md-3">
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="media[]" class="form-checkbox" value="Flat-screen TV"> <label for="Flat-screen TV"> Flat-screen TV </label>
						  </li>
						</ul>
					 </div>
					 
					  <div class="col-md-3">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="media[]" class="form-checkbox" value="Satellite Channels"> <label for="Satellite Channels">  Satellite Channels </label>
						  </li>
						
						</ul>
					  </div>

					  <div class="col-md-3">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="media[]" class="form-checkbox" value="Telephone"> <label for="Telephone"> Telephone </label>
						  </li>
						  
					

						</ul>
					  </div>	

					<div class="col-md-3">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="media[]" class="form-checkbox" value="Pay-per-view Channels"> <label for="Pay-per-view Channels">Pay-per-view Channels</label>
						  </li>
						
						</ul>
					  </div>					  
					</div>
					
					
						
					<div class="form-group">
					  <h3>Parking</h3>
					  <div class="col-md-4">
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="parking[]" class="form-checkbox" value="Free parking"> <label for="parking"> Free parking </label>
						  </li>
						</ul>
					 </div>
					 
					  <div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="parking[]" class="form-checkbox" value="Free valet parking"> <label for="parking"> Free valet parking </label>
						  </li>
						
						</ul>
					  </div>

					  <div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="parking[]" class="form-checkbox" value="Onsite Parking (Free)"> <label for="parking"> Onsite Parking (Free)</label>
						  </li>
						  
						</ul>
					  </div>

					<div class="col-md-4">
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="parking[]" class="form-checkbox" value="Onsite Parking (Additional charge)"> <label for="parking"> Onsite Parking (Additional charge)</label>
						  </li>
						</ul>
					 </div>
					 
					  <div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="parking[]" class="form-checkbox" value="Outside Parking "> <label for="parking">  Outside Parking </label>
						  </li>
						
						</ul>
					  </div>

					  <div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="parking[]" class="form-checkbox" value="Parking with Security Guard "> <label for="parking"> Parking with Security Guard </label>
						  </li>
						  
						</ul>
					  </div>					  
					</div>
					
					
					
					<div class="form-group">
					  <h3>View</h3>
					  <div class="col-md-3">
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="view[]" class="form-checkbox" value="City view"> <label for="view"> City view </label>
						  </li>
						</ul>
					 </div>
					 
					  <div class="col-md-3">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="view[]" class="form-checkbox" value="Landmark view"> <label for="view"> Landmark view </label>
						  </li>
						
						</ul>
					  </div>

					  <div class="col-md-3">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="view[]" class="form-checkbox" value="Garden"> <label for="view"> Garden </label>
						  </li>
						  
						</ul>
					  </div>

					<div class="col-md-3">
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="view[]" class="form-checkbox" value="Sea View"> <label for="view"> Sea View </label>
						  </li>
						</ul>
					 </div>
					 
					  <div class="col-md-3">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="view[]" class="form-checkbox" value="Mountain View "> <label for="view"> Mountain View </label>
						  </li>
						
						</ul>
					  </div>

					  <div class="col-md-3">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="view[]" class="form-checkbox" value="Hill View"> <label for="view"> Hill View </label>
						  </li>
						  
						</ul>
					  </div>

					  <div class="col-md-3">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="view[]" class="form-checkbox" value="Beach View"> <label for="view"> Beach View </label>
						  </li>
						  
						</ul>
					  </div>

					  <div class="col-md-3">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="view[]" class="form-checkbox" value=" Lake View"> <label for="view"> Lake View </label>
						  </li>
						  
						</ul>
					  </div>					  
					</div>
					
			
					<div class="form-group">
					  <h3>Outdoors</h3>
					  <div class="col-md-4">
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="outdoor[]" class="form-checkbox" value="Sun terrace"> <label for="Sun terrace"> 	Sun terrace </label>
						  </li>
						</ul>
					 </div>
					 
					  <div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="outdoor[]" class="form-checkbox" value="BBQ facilities (Additional charge)"> <label for="BBQ facilities (Additional charge)"> 	BBQ facilities (Additional charge) </label>
						  </li>
						
						</ul>
					  </div>

					  <div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="outdoor[]" class="form-checkbox" value="Terrace"> <label for="Terrace"> Terrace </label>
						  </li>
						</ul>
					  </div>	

						<div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="outdoor[]" class="" value="Garden"> <label for="Garden">Garden</label>
						  </li>
						</ul>
					  </div>

					 <div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="outdoor[]" class="" value="Beachfront"> <label for="Beachfront">Beachfront</label>
						  </li>
						</ul>
					  </div>	

					   <div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="outdoor[]" class="" value="Balcony"> <label for="Balcony">Balcony</label>
						  </li>
						</ul>
					  </div>	
				</div>
					
					
					
				<div class="form-group">
					  <h3>Kitchen</h3>
					  <div class="col-md-4">
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="kitchen[]" class="form-checkbox" value="Electric kettle"> <label for="Electric kettle "> Electric kettle </label>
						  </li>
						</ul>
					 </div>
					 
					  <div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="kitchen[]" class="form-checkbox" value="Coffee machine"> <label for="Coffee machine"> Coffee machine </label>
						  </li>
						
						</ul>
					  </div>

					  <div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="kitchen[]" class="form-checkbox" value="Dining table "> <label for="Dining table "> Dining table </label>
						  </li>
						</ul>
					  </div>	

					 <div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="kitchen[]" class="" value="Cleaning products"> <label for="Cleaning products">Cleaning products</label>
						  </li>
						
						</ul>
					  </div>

					  <div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="kitchen[]" class="" value="Cleaning products"> <label for="Cleaning products">Cleaning products</label>
						  </li>
						
						</ul>
					  </div>					  
				</div>
					
					
					
					
				<div class="form-group">
					  <h3>Internet</h3>
					  <div class="col-md-6">
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="internet[]" class="form-checkbox" value="No internet access available "> <label for="internet"> No internet access available </label>
						  </li>
						</ul>
					 </div>
					 
					  <div class="col-md-6">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="internet[]" class="form-checkbox" value="Available in all rooms: Free WiFi , Free wired high-speed Internet"> <label for="internet">  Available in all rooms: Free WiFi , Free wired high-speed Internet </label>
						  </li>
						
						</ul>
					  </div>

					  <div class="col-md-6">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="internet[]" class="form-checkbox" value="Available in some public areas: Free WiFi , Free wired high-speed Internet"> <label for="internet"> Available in some public areas: Free WiFi , Free wired high-speed Internet </label>
						  </li>
						</ul>
					  </div>	

					<div class="col-md-6">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="internet[]" class="" value="Free wifi"> <label for="Pay-per-view Channels">Free Wifi</label>
						  </li>
						
						</ul>
					  </div>					  
				</div>
				
				
				<div class="form-group">
					  <h3>Accessibility</h3>
					 
					 <div class="col-md-3">
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="accessibility[]" class="form-checkbox" value="Entire unit wheelchair accessible"> <label for="Entire unit wheelchair accessible"> Entire unit wheelchair accessible</label>
						  </li>
						</ul>
					 </div>
					 
					  <div class="col-md-3">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="accessibility[]" class="form-checkbox" value="Upper floors accessible by lift"> <label for="Upper floors accessible by lift">  Upper floors accessible by lift </label>
						  </li>
						
						</ul>
					  </div>

					  <div class="col-md-3">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="accessibility[]" class="form-checkbox" value="Accessible bathroom "> <label for="Accessible bathroom "> Accessible bathroom  </label>
						  </li>
						</ul>
					  </div>	

					<div class="col-md-3">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="accessibility[]" class="" value="In-room accessibility"> <label for="In-room accessibility">In-room accessibility</label>
						  </li>
						</ul>
					 </div>					  
				</div>
				
				
				<div class="form-group">
					  <h3>Activities</h3>
					 
					 <div class="col-md-4">
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="activities[]" class="form-checkbox" value="Evening entertainment(Additional charge)"> <label for="Evening entertainment(Additional charge)">Evening entertainment(Additional charge)</label>
						  </li>
						</ul>
					 </div>
					 
					  <div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="activities[]" class="form-checkbox" value="Library"> <label for="Library">  Library </label>
						  </li>
						
						</ul>
					  </div>

					  <div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="activities[]" class="form-checkbox" value="Karaoke"> <label for="Karaoke"> Karaoke </label>
						  </li>
						</ul>
					  </div>


					<div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="activities[]" class="form-checkbox" value="Karaoke"> <label for="Karaoke"> Karaoke </label>
						  </li>
						</ul>
					 </div>


					<div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="activities[]" class="form-checkbox" value="Golf course (within 3 km)(Additional charge)"> <label for="Golf course (within 3 km)(Additional charge)"> 	Golf course (within 3 km)(Additional charge) </label>
						  </li>
						</ul>
					</div>

					<div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="activities[]" class="form-checkbox" value="Mini golf (Additional charge)"> <label for="Mini golf (Additional charge)"> Mini golf (Additional charge) </label>
						  </li>
						</ul>
					</div>	


					

					<div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="activities[]" class="form-checkbox" value="Billiards (Additional charge)"> <label for="Billiards (Additional charge)"> Billiards (Additional charge) </label>
						  </li>
						</ul>
					 </div>


					<div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="activities[]" class="form-checkbox" value="Golf course (within 3 km)(Additional charge)"> <label for="Golf course (within 3 km)(Additional charge)"> Kids club (Additional charge </label>
						  </li>
						</ul>
					</div>

					<div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="activities[]" class="form-checkbox" value="Table tennis (Additional charge)"> <label for="Table tennis (Additional charge)"> Table tennis (Additional charge) </label>
						  </li>
						</ul>
					</div>
					

					<div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="activities[]" class="form-checkbox" value="Games room"> <label for=""> Games room </label>
						  </li>
						</ul>
					 </div>


					<div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="activities[]" class="form-checkbox" value="Tennis court (Additional charge)"><label for=""> Tennis court (Additional charge) </label>
						  </li>
						</ul>
					</div>

					<div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="activities[]" class="form-checkbox" value="T"> <label for="-"> - </label>
						  </li>
						</ul>
					</div>					

									  
				</div>
				
				
				<div class="form-group">
					  
					  <h3>Entertainment and family services</h3>
					 
					 <div class="col-md-3">
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="entertainment[]" class="form-checkbox" value="Children television networks"> <label for="Children television networks"> Children television networks</label>
						  </li>
						</ul>
					 </div>
					 
					  <div class="col-md-3">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="entertainment[]" class="form-checkbox" value="Books, DVDs, music for children"> <label for="Books, DVDs, music for children">  Books, DVDs, music for children </label>
						  </li>
						
						</ul>
					  </div>

					  <div class="col-md-3">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="entertainment[]" class="form-checkbox" value="Babysitting/child services(Additional charge)"> <label for="Babysitting/child services(Additional charge)"> Babysitting/child services(Add. charge) </label>
						  </li>
						</ul>
					  </div>

					  <div class="col-md-3">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="entertainment[]" class="form-checkbox" value="Indoor play area"> <label for="Indoor play area"> Indoor play area </label>
						  </li>
						</ul>
					  </div>					  

									  
				</div>
				
				
				
				--
				<div class="form-group">
					  <h3>Transport</h3>
					 
					 <div class="col-md-4">
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="pets[]" class="form-checkbox" value="Pets are not allowed"> <label for="Pets are not allowed">Airport shuttle (additional charge)</label>
						  </li>
						</ul>
					 </div>
					 
					  <div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="pets[]" class="form-checkbox" value="Pets are allowed. Charges may be applicable"> <label for="Pets are allowed. Charges may be applicable">  Pets are allowed. Charges may be applicable </label>
						  </li>
						
						</ul>
					  </div>

					  <div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="pets[]" class="form-checkbox" value="Pets are allowed on request. Charges may be applicable"> <label for="Pets are allowed on request. Charges may be applicable">Pets are allowed on request. Charges may be applicable </label>
						  </li>
						</ul>
					  </div>	

									  
					</div>
				
				
				
				--
				
				
				
				
					<div class="form-group">
					  <h3>Pets</h3>
					 
					 <div class="col-md-4">
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="pets[]" class="form-checkbox" value="Pets are not allowed"> <label for="Pets are not allowed"> Pets are not allowed</label>
						  </li>
						</ul>
					 </div>
					 
					  <div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="pets[]" class="form-checkbox" value="Pets are allowed. Charges may be applicable"> <label for="Pets are allowed. Charges may be applicable">  Pets are allowed. Charges may be applicable </label>
						  </li>
						
						</ul>
					  </div>

					  <div class="col-md-4">	
						<ul class="list-unstyled">
						  <li><input type="checkbox" name="pets[]" class="form-checkbox" value="Pets are allowed on request. Charges may be applicable"> <label for="Pets are allowed on request. Charges may be applicable">Pets are allowed on request. Charges may be applicable </label>
						  </li>
						</ul>
					  </div>	

									  
					</div>
					
					
					
					
					
			
					<div class="form-group">
					  <h3>Checkin  and Checkout</h3>
					  <div class="col-md-3">
						<select class="form-control" name="checkinfrom">
							<option value="11 AM"> 11 AM </option>
							<option value="11 PM"> 11 PM </option>
							<option value="12 AM"> 12 AM </option>
							<option value="12 PM"> 12 PM </option>
						</select>
					 </div>
					 
					  <div class="col-md-3">	
						<select class="form-control" name="checkinto">
							<option value="11 AM"> 11 AM </option>
							<option value="11 PM"> 11 PM </option>
							<option value="12 AM"> 12 AM </option>
							<option value="12 PM"> 12 PM </option>
						</select>
					  </div>
					
			
					  <div class="col-md-3">
						<select class="form-control" name="checkoutfrom">
							<option value="11 AM"> 11 AM </option>
							<option value="11 PM"> 11 PM </option>
							<option value="12 AM"> 12 AM </option>
							<option value="12 PM"> 12 PM </option>
						</select>
					 </div>
					 
					  <div class="col-md-3">	
						<select class="form-control" name="checkoutto">
							<option value="11 AM"> 11 AM </option>
							<option value="11 PM"> 11 PM </option>
							<option value="12 AM"> 12 AM </option>
							<option value="12 PM"> 12 PM </option>
						</select>
					  </div>
			
					
					
					
					
				  </div>
				  <!-- /.box-body -->
			
				  
				  
				  <div class="box-footer">
					<input type="submit" class="btn btn-primary pull-right" value="Add Hotel">
				  </div>
				</form>
			  </div>
			  <!-- /.box -->
			</div>
			
		</div>	
		
    </section>
    <!-- /.content -->