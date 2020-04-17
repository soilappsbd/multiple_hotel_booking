 <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel" style="height: 73px;">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/img_moneylover.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?php   echo $this->session->userdata("name");?> </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		  <p></p>
        </div>
      </div>
      <!-- search form -->

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
 
        <li class="active treeview">
          <a href="<?php echo base_url();?>Admin">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

	
		
		
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-hotel "></i> <span>Hotel Managment</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
			<li>
				<a href="<?php echo base_url();?>Admin/hotellisting"><i class="fa fa-list"></i> Hotel Listing</a>
				<span class="pull-right-container">
				  <small class="label pull-right bg-green">100</small>
				</span>
			</li>
			
     
            <li><a href="<?php echo base_url();?>Admin/rooms"><i class="fa fa-circle-o"></i> Rooms & Price</a></li>
            <!--
			<li><a href="<?php echo base_url();?>Admin/hotelfacility"><i class="fa fa-circle-o"></i> Hotel Xtra Facilities </a></li>
            <li><a href="<?php echo base_url();?>Admin/roomfacility"><i class="fa fa-circle-o"></i> Hotel Xtra Facilities </a></li>
			-->
            <li><a href="<?php echo base_url();?>Admin/nearby"><i class="fa fa-circle-o"></i> Hotel Nearby </a></li>
			<li><a href="<?php echo base_url();?>Admin/hotelpolicy"><i class="fa  fa-tags"></i> Hotel Policy</a></li>
          </ul>
        </li>

		 <li class="treeview">
            <li><a href="<?php echo base_url();?>Admin/locations"><i class="fa   fa-location-arrow"></i> Locations</a></li>
        </li>
		
		 <li class="treeview">
            <li><a href="<?php echo base_url();?>Admin/bookingmanage"><i class="fa  fa-tags"></i> Manage Booking</a></li>
        </li>
		
		
		
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-hotel "></i> <span>Photo Gallery</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Admin/hotelphoto"><i class="fa fa-circle-o"></i> Hotel Photo</a></li>
            <li><a href="<?php echo base_url();?>Admin/hotelphoto"><i class="fa fa-circle-o"></i> Room Photo</a></li>

          </ul>
        </li>
		
		 <li class="treeview">
            <li><a href="<?php echo base_url();?>Admin/usernamane"><i class="fa  fa-users"></i> Manage Users</a></li>
        </li>
		
		 <li class=" treeview">
          <a href="<?php echo base_url();?>Admin/documentation">
            <i class="fa   fa-book"></i> <span>Documentation</span>
          </a>
        </li>

		
      </ul>
    </section>