
	    <section class="content">
		<div class="row">
		 <div class="col-md-12">
			  <div class="box">
				<div class="box-header">
				  <h3 class="box-title">Hotels </h3>
				  <a href="<?php echo base_url();?>admin/addhotel" class="btn btn-primary pull-right">Add Hotel </a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					  <div class="table-responsive" >
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
						<tr>
						  <th> SL</th>
						  <th> Hotel Name</th>
						  <th> Address </th>
						  <th> Image</th>
						  <th> Add Img</th>
						  <th> Edit</th>
						</tr>
						</thead>
						<tbody>
						<?php 
						//pd($smtp);
						if($hotels){
							$i =1;
						foreach($hotels as $hotelsdata){?>
						<tr>
			
						  <td><?php echo $i; ?></td>
						  <td><?php echo $hotelsdata->hotelname; ?></td>
						  <td>
							<?php echo substr($hotelsdata->address, 0, 10); ?>&nbsp;&nbsp;
						  </td>
						  
					
						  
						  <td>
						  	<?php
								$photodata = $this->Model_admin->hotelphotobyid($hotelsdata->id);
								foreach($photodata as $phlist){
									echo  ' <img src="'.base_url() ."hotelphoto/".$phlist->photo .'" width="30px">';
									echo '<a href="'. base_url(). 'admin/deletehotelphoto/'. $phlist->id .'"> X </a>';
								}						
							
							?>
						  </td>
						  <td><a href="<?php echo base_url();?>admin/addphotohotel/<?php echo $hotelsdata->id; ?>" class="fa fa-image btn" > Add </a></td>
					
						  <td><a href="<?php echo base_url();?>Admin/edithotel/<?php echo $hotelsdata->id; ?>" class="fa fa-edit"> Edit </a></td>

						</tr>
						<?php 
						$i++;
						};
						}?>
					   </tbody>
					  </table>
					 </div> <!--table responseive->
				</div>
				<!-- /.box-body -->
			  </div>
		 </div>
		
		</div>
    </section>
    <!-- /.content -->
  <script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>