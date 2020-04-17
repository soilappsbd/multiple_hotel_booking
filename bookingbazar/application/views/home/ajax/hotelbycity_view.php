		<div class="row">
            <div class="col-md-12">
			<!--	<span id="" class="hotelcount"><span class="result_count">163</span> Property Found</span>-->
				<span id="" class="hotelcount"><span class="result_count">Properties in </span> Dhaka City</span>
				 <div class="pull-right">
				   <select name="mf-select-sortby" id="mf-select-sortby" class="form-control" title="Sort by">
					  <option value="relevance">Sort by Popularity</option>
					  <option value="rating-relevance">Focus on Rating</option>
					  <option value="price-relevance">Focus on Price</option>
					  <option value="distance-relevance" data-category="distance" class="">Focus on Distance</option>
					  <option value="overall_liking">Sort only by Rating</option>
					  <option value="price">Sort only by Price</option>
					  <option value="distance" data-category="distance" class="">Sort only by Distance</option>
					  <option value="favorites" disabled="">Sort by Favourites</option>
				   </select>
				  </div>
            </div>
        </div>


  <div class="row">
            <div class="col-md-12">    
                <?php 
                if($arr){
                    foreach($arr as $dt){
                  ?>
                  
                    <div class="hotel_box" style="">
						<div class="row">    
							<div class="col-md-4">
							  <div class="hotelthump">
								<img class="property_thumb" src="<?php echo base_url()?>uploadimage/hotelphoto/samplephoto.jpeg">
							  </div>
							</div>
							<div class="col-md-6">
								<div class="item__details">
									<div class="">
										<span class="hotelname">
											<a href="<?php echo base_url();?>home/hoteldetail/<?php echo $dt->id ;?>/<?php echo $dt->hotelname ;?>"><?php echo urldecode($dt->hotelname) ;?></a>
										</span> 
										<span class="hotelstar"> <?php echo $dt->star ;?> start Hotel 
										</span>	 
										<i class="fa fa-thumbs-o-up"></i>
									</div>
									<p class="font-12"> <span> <a href="hotel er link">Rmeo , dhaka, Bangladesh </a></span> <a href="hotel er link"> 3000 feet from center </a></p>
							  
									<div class="hotel_dexription">
										Marina Bay Sands is located in the Marina Bay neighborhood in Singapore, just 15 miles from Johor Bahru. There is a casino on site and guests can enjoy the on-site restaurant and bar.
									</div>	
								</div>  
							</div>
							<div class="col-md-2 text-right">
								<div class="hotellist-rightpan">
									<span  class="rating text-right "> Wonderful </span> <span class="blue-badge">9.0</span><br/>
									<span  class="text-right " > 20 reviews</span>
									<div><a class="btn btn-primary " style="color: white"> Reserve </a></div>
							   </div>
							</div> 
						</div> 
					  <div class="row">
					    
					  </div>
                  </div>  
                <?php 
                   }
				}
                ?>
            </div>
         </div>