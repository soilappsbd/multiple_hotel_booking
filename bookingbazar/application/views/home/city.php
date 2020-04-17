
<!--
<div class="container">
  <div class="row">
     <div class="col-md-12">
        <nav class="breadcrumb breadcrumb_change">
          <a class="breadcrumb-item" href="#">Home</a>
          <a class="breadcrumb-item" href="#">Country</a>
          <a class="breadcrumb-item active" href="#">City</a>
        </nav>
     </div>
  </div>
</div>

<?php // $this->load->view("home/topsearch_view");?>
-->
<div class="cleared"> </div>
		
<div class="container">
	<div class="margin10"> </div>					
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
			<?php $this->load->view("home/sidebar_search");?>
			<?php $this->load->view("home/filter_search");?>
		</div>
		<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
			<div id="hotel_list">
			
			
			</div> 
		</div>
	</div><!-- end of row of serch -->
</div> <!-- end of contatiner-->

<div class="cleared"> </div>

<script>
	var base_url =  "<?php echo base_url();?>";
	var cityid =  "<?php echo $this->uri->segment(3);?>";
</script>
<script src="<?php echo base_url();?>assetshome/js/filter_search.js">
</script>
<!--https://www.w3schools.com/jquery/jquery_filters.asp-->