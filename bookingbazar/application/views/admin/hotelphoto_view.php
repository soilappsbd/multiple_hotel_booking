
	    <section class="content">
		<div class="row">
		 <div class="col-md-12">
			  <div class="box">
				<div class="box-header">
				  <h3 class="box-title">Hotels Photo</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
				  <table id="example1" class="table table-bordered table-striped">
					<thead>
					<tr>
					  <th> SL</th>
					  <th> Hotel Name</th>
					  <th> Photo</th>
					  <th> Delete</th>
					</tr>
					</thead>
					<tbody>
					<?php 
					//pd($smtp);
					if($hotelphoto){
						//pd($hotelphoto);
						$i =1;
					foreach($hotelphoto as $hphoto){?>
					<tr>
		
					  <td><?php echo $i; ?></td>
					  <td><?php echo $hphoto->hotelname; ?></td>
					  <td><img src="<?php echo base_url();?>/hotelphoto/<?php echo $hphoto->photo; ?>" width="50px"></td>
				
					  <td><a href="<?php echo base_url();?>Admin/deletehotelphoto/<?php echo $hphoto->id; ?>" class="btn btn-danger btn-xs">Delete </a></td>

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
    <!-- /.content -->
  </div>
  
<script>
$(document).ready(function(){

});
</script> 
  <!-- /.content-wrapper -->
