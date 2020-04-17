 <div class="row">
	<div class="col-md-12">
		<div id="demo" class="carousel slide" data-ride="carousel">

		  <!-- Indicators -->
		  <ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
		  </ul>
		  
		  <!-- The slideshow -->
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img src="<?php echo base_url();?>uploadimage/home_slider/1528613846_BD-Travel-Book.jpg" alt="Los Angeles" width="100%" height="500">
			</div>
			<div class="carousel-item">
			  <img src="<?php echo base_url();?>uploadimage/home_slider/1528614068_BD-Travel-Book.com.jpg" alt="Chicago" width="100%" height="500">
			</div>
			<div class="carousel-item">
			  <img src="<?php echo base_url();?>uploadimage/home_slider/1527409667_BD-Travel-Book.jpg" alt="New York" width="100%" height="500">
			</div>
		  </div>
		  
		  <!-- Left and right controls -->
		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		  </a>
		</div>
	</div>
</div>


<div class="container" style="margin-top: -400px">
  <div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 planner">
      <?php $this->load->view("home/searchbox");?>    
    </div>
						
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <?php $this->load->view("home/infobox");?>  
		</div>

  </div>
        <!-- /.row -->
		
	<div class="" style="margin-top: 60px;"> &nbsp; </div>	
	
	<div class="row">
		  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
				<div class="location_entry" style="">
					<img src="<?php echo base_url();?>uploadimage/locationphoto/dhaka_front.jpg" width="100%">	
				    <div class="location_name">Dhaka</div>
				</div>
		  </div>
		  
		   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
				<div class="location_entry">
				<img src="<?php echo base_url();?>uploadimage/locationphoto/dhaka_front.jpg" width="100%">	
				 <div class="location_name">Chittagong</div>
				</div>
		  </div>
		  
		   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
				<div class="location_entry">
				<img src="<?php echo base_url();?>uploadimage/locationphoto/dhaka_front.jpg" width="100%">	
				 <div class="location_name">Khulna</div>
				</div>
		  </div>
		  
		   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
				<div class="location_entry">
				<img src="<?php echo base_url();?>uploadimage/locationphoto/dhaka_front.jpg" width="100%">	
				  <div class="location_name">Barisal</div>
				</div>
		  </div>
	</div>   
		
		
		
  <div class="row">
      <?php // pd($location);
          foreach($location as $hd){
        ?>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        	<div class="popular_location_box">
						<div class="popular_locationthumb_box">
							<img class="popular_locationthumb" src="<?php  echo base_url()."uploadimage/locationphoto/".$hd->image; ?>" width="150x;">
						</div>
						<div class="poppular_location_name">
							<h4>
                <a href="<?php echo base_url();?>home/city/<?php  echo $hd->id; ?>/<?php  echo $hd->locationname; ?>"><?php  echo $hd->locationname; ?></a>
              </h4>
							<span class="popular_location_country">
                  <a href="<?php echo base_url();?>home/country/<?php  echo $hd->id; ?>"><?php  echo $hd->country; ?>
                  </a>
              </span>
						</div>
            <div class="popular_location_stats">
              <a href="<?php echo base_url();?>home/city/<?php  echo $hd->id; ?>">122 guesthouses, 40 apartments, 20 bed and breakfasts, 8 inns, 7 homestays</a>
            </div>
              <div class="pull-right popular_location_arrow"> <img src="<?php echo base_url()?>assetshome/icons/rightarrow.png"> </div>
					</div>
					 
      </div>

      <?php 
         }
      ?>
  </div><!-- end of row of locaton -->

</div>