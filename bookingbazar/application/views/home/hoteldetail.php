<div class="container" >
<!--
  <div class="row">
     <div class="col-md-12">
        <nav class="breadcrumb breadcrumb_change">
          <a class="breadcrumb-item" href="#">Home</a>
          <a class="breadcrumb-item" href="#">Country</a>
          <a class="breadcrumb-item active" href="#">City</a>
        </nav>
     </div>
  </div>
  https://www.jssor.com/demos/image-gallery-with-vertical-thumbnail.slider
 --> 
</div>

<?php // $this->load->view("home/topsearch_view");?>

<div class="container" >

	 

  <div class="row">
	 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <?php $this->load->view("home/sidebar_search");?>
     </div>
  
     <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
		<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
			Photo gallery
			https://tympanus.net/Tutorials/ResponsiveImageGallery/
			http://sachinchoolur.github.io/lightslider/
			https://www.jqueryscript.net/gallery/Simple-Responsive-jQuery-Gallery-with-Thumbnail-Navigation.html= 
			https://www.jqueryscript.net/demo/Simple-Responsive-jQuery-Gallery-with-Thumbnail-Navigation/
			https://www.learningjquery.com/2017/01/how-to-create-a-simple-image-slider-using-jquery
			
				
				
				
		</div>
	 </div>
	 
	 
	  <?php // pd($arr);?>
				   <?php if($arr){
							foreach($arr as $dt){
					   ?>
					<span class="boldfont font-20"> <?php echo $dt->hotelname;?> </span> 
					<span class="red boldfont">
						<img src="<?php echo base_url()?>assetshome/images/icon/<?php echo $this->Model_site->startimg($dt->star);?>" class="startrating" >  
					</span>
					<p class="font-12"> <?php echo $dt->address;?> </p>	
					<!--https://developers.google.com/maps/documentation/javascript/mysql-to-maps-->
		
			 <div class="row">

				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<p class="font-12"><?php echo $dt->description;?></p>
				</div>
			 
			 
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				
					<div style="overflow: hidden; ">
				
	<div class="mapouter"><div class="gmap_canvas"><iframe width="300" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=way%20dhaka%20hotel&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div>



				 
					
					</div>	
				</div>	
				
				 	
			</div>	
		
		
		<?php }
			}
		?>
		
	
		
		 <div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			
				 <div class="row">
				 
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 facility">
						<h5> General Facilities</h5>
						 <?php //pd($gfacility);
						 if($gfacility){
						
							$gfacility_arr = explode( "," , $gfacility[0]->facilitydetail); 
							$gfcount = count($gfacility_arr);
							echo '<ul class="facilitylist">';
							for($i=0 ; $i < $gfcount ;  $i++){
								echo '<li> <i class="fa fa-check-circle" aria-hidden="true"></i> '. $gfacility_arr[$i] .'</li>';
							}
							echo '</ul>';
						}
					  
					  
					  ?>
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 facility">
						<h5> What’s around </h5>
						 <?php //pd($gfacility);
						 echo "What around hobe";
					  
					  ?>
					</div>
					
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 facility">
						<h5> Guest Review </h5>
							<p>
								<span style="color: darkblue"> Its a nice hotel I ever seen in dhaka </span>
								<br/>
								<span style="  font-style: italic;font-size: 11px">Tarique Mosharraf</span> 
								<br/>
								<span style="font-size: 10px;"> 25 July 2017 </span>
							</p>
								<p>
								<span style="color: darkblue"> I feel bore becaus I dont find any boy friend for dating</span>
								<br/>
								<span style="font-style: italic; font-size: 11px">Jessica Alba</span> 
								<br/>
								<span style="font-size: 10px;"> 25 July 2017 </span>
							</p>
					</div>
					

				</div>
				 
				 
			</div>
		</div>
		
		
		

		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	 
				
				<table id="rooms">
				  <tr>
					<th style="width:10%">Seeps</th>
					<th style="width: 70%">Room Type</th>
					<th></th>
				  </tr>
				  <tr>
					<td style="width: 10%"><i class="fa fa-user-circle" aria-hidden="true"></i> <i class="fa fa-user-circle" aria-hidden="true"></i></td>
					<td style="widht: 70%"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i><strong> Suits </strong><br/> 1 full bed <i class="fa fa-bed" aria-hidden="true"></i></td>
					<td><span class="btn btn-primary">Show prices</span></td>
				  </tr>
				  
				  	 <tr>
					<td style="width: 10%"><i class="fa fa-user-circle" aria-hidden="true"></i></td>
					<td style="widht: 70%"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i><strong> Executive Club with Airport Transfers </strong><br/> 1 full bed <i class="fa fa-bed" aria-hidden="true"></i></td>
					<td><span class="btn btn-primary">Show prices</span></td>
				  </tr>
				  
				</table>
				
				
			</div>	 
		</div>	 

		<br/>
		<br/>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h4> Hotel Facilities </h4>
			<div class="row">
				<?php //pd($gfacility);
						 if($forntdesk!=""){
				?>			 
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 facility">
						<h5> Front Desk</h5>
						
						<?php 			
							$forntdesk_arr = explode( "," , $forntdesk[0]->facilitydetail); 
							$fdcount = count($forntdesk_arr);
							echo '<ul class="facilitylist">';
							for($i=0 ; $i < $fdcount ;  $i++){
								echo '<li> <i class="fa fa-check-circle" aria-hidden="true"></i> '. $forntdesk_arr[$i] .'</li>';
							}
							echo '</ul>';
						
					  
					  
					  ?>
					</div>
				<?php }?>	
				
				<?php //pd($gfacility);
					 if($Services!=""){
				?>				
					 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 facility">
						<h5> Services</h5>
						
						<?php 	 
						
							$Services_arr = explode( "," , $Services[0]->facilitydetail); 
							$count = count($Services_arr);
							echo '<ul class="facilitylist">';
							for($i=0 ; $i < $count ;  $i++){
								echo '<li> <i class="fa fa-check-circle" aria-hidden="true"></i> '. $Services_arr[$i] .'</li>';
							}
							echo '</ul>';
					    ?>
					</div>
				<?php
				    }
				?>	
				<?php
					if(!empty($bathroom)){				
				?>				
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 facility">
						<h5> Bathroom</h5>
						 <?php //pd($bathroom);
						 
						
							$bathroom = explode( "," , $bathroom[0]->facilitydetail); 
							$count = count($bathroom);
							echo '<ul class="facilitylist">';
							for($i=0 ; $i < $count ;  $i++){
								echo '<li> <i class="fa fa-check-circle" aria-hidden="true"></i> '. $bathroom[$i] .'</li>';
							}
							echo '</ul>';

					  ?>
					</div>
				<?php 
					}
				?>				
					
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 facility">
						<h5> Media</h5>
						 <?php //pd($gfacility);
						 if($media){
						
							$media = explode( "," , $media[0]->facilitydetail); 
							$count = count($media);
							echo '<ul class="facilitylist">';
							for($i=0 ; $i < $count ;  $i++){
								echo '<li> <i class="fa fa-check-circle" aria-hidden="true"></i> '. $media[$i] .'</li>';
							}
							echo '</ul>';
						}
					  
					  
					  ?>
					</div>
					
				</div>	
					
			</div>
		</div>	
		

		
     </div>
  </div>

</div>



		
<div class="cleared"> </div>
	