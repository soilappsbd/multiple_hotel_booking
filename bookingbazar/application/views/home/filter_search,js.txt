$(document).ready(function() {
	                                          
			   $.ajax({
                     method: "POST",                                         
                     url: "<?php echo base_url();?>ajax/hotelbycity", 
					 data :{cityid:<?php echo $this->uri->segment(3);?>,action:"all"},   					 
					 success: function(data){
						$("#hotel_list").html(data);										
                     },
					  error: function(data){
                        // error message on unsuccess                          
                     }
               });//end of ajax 
                                
        
 	var ratingArr = [];
		
	 	$("#starrating5").change(function(){
			
			var starrating = $(this).val();
			
			// Push korlam
			ratingArr.push(starrating);
			
			$.ajax({
                     method: "POST",                                         
                     url: "<?php echo base_url();?>ajax/hotelbyrating", 
					 data :{cityid:<?php echo $this->uri->segment(3);?>,rating:ratingArr,action:"startrating"},   					 
					 success: function(data){
						$("#hotel_list").html(data);	
						console.log(ratingArr);						
                     },
					  error: function(data){
                        // error message on unsuccess                          
                     }
               });//end of ajax
			
		}); 
		
		
		$("#starrating4").change(function(){
			
			var starrating = $(this).val();
			
			// Push korlam
			ratingArr.push(starrating);
			
			$.ajax({
                     method: "POST",                                         
                     url: "<?php echo base_url();?>ajax/hotelbyrating", 
					 data :{cityid:<?php echo $this->uri->segment(3);?>,rating:ratingArr,action:"startrating"},   					 
					 success: function(data){
						$("#hotel_list").html(data);	
						console.log(ratingArr);						
                     },
					  error: function(data){
                        // error message on unsuccess                          
                     }
               });//end of ajax
			
		}); 
		 
		
		$("#starrating3").change(function(){
			
			var starrating = $(this).val();
			
			// Push korlam
			ratingArr.push(starrating);
			
			$.ajax({
                     method: "POST",                                         
                     url: "<?php echo base_url();?>ajax/hotelbyrating", 
					 data :{cityid:<?php echo $this->uri->segment(3);?>,rating:ratingArr,action:"startrating"},   					 
					 success: function(data){
						$("#hotel_list").html(data);	
						console.log(ratingArr);						
                     },
					  error: function(data){
                        // error message on unsuccess                          
                     }
               });//end of ajax
			
		}); 
		
		$("#starrating2").change(function(){
			
			var starrating = $(this).val();
			
			// Push korlam
			ratingArr.push(starrating);
			
			$.ajax({
                     method: "POST",                                         
                     url: "<?php echo base_url();?>ajax/hotelbyrating", 
					 data :{cityid:<?php echo $this->uri->segment(3);?>,rating:ratingArr,action:"startrating"},   					 
					 success: function(data){
						$("#hotel_list").html(data);	
						console.log(ratingArr);						
                     },
					  error: function(data){
                        // error message on unsuccess                          
                     }
               });//end of ajax
			
		}); 
		
		$("#starrating1").change(function(){
			
			var starrating = $(this).val();
			
			// Push korlam
			ratingArr.push(starrating);
			
			$.ajax({
                     method: "POST",                                         
                     url: "<?php echo base_url();?>ajax/hotelbyrating", 
					 data :{cityid:<?php echo $this->uri->segment(3);?>,rating:ratingArr,action:"startrating"},   					 
					 success: function(data){
						$("#hotel_list").html(data);	
						console.log(ratingArr);						
                     },
					  error: function(data){
                        // error message on unsuccess                          
                     }
               });//end of ajax
			
		}); 
		
		$("#starrating0").change(function(){
			
			var starrating = $(this).val();
			
			// Push korlam
			ratingArr.push(starrating);
			
			$.ajax({
                     method: "POST",                                         
                     url: "<?php echo base_url();?>ajax/hotelbyrating", 
					 data :{cityid:<?php echo $this->uri->segment(3);?>,rating:ratingArr,action:"startrating"},   					 
					 success: function(data){
						$("#hotel_list").html(data);	
						console.log(ratingArr);						
                     },
					  error: function(data){
                        // error message on unsuccess                          
                     }
               });//end of ajax
			
		});

		  
		   

}); //end of documentready
