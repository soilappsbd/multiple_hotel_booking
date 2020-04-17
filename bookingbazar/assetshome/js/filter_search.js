

$(document).ready(function() {
	                                
			   $.ajax({
                     method: "POST",                                         
                     url: base_url+"ajax/hotelbycity", 
					 data :{cityid:cityid,action:"all"},   					 
					 success: function(data){
						$("#hotel_list").html(data);										
                     },
					  error: function(data){
                        // error message on unsuccess                          
                     }
               });//end of ajax 
                                
        
 	var ratingArr = [];
 	var hotelfacilityArr = [];
		
	 	$("#starrating5").change(function(){
			var starrating = $(this).val();
			
			// Push korlam
			ratingArr.push(starrating);
			
			$.ajax({
                     method: "POST",                                         
                     url: base_url+"ajax/hotelbycity", 
					 data :{cityid:cityid,rating:ratingArr,action:"startrating"},   					 
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
                     url: base_url+"ajax/hotelbycity", 
					 data :{cityid:cityid,rating:ratingArr,action:"startrating"},  					 
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
                     url: base_url+"ajax/hotelbycity", 
					 data :{cityid:cityid,rating:ratingArr,action:"startrating"},   					 
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
                     url: base_url+"ajax/hotelbycity", 
					 data :{cityid:cityid,rating:ratingArr,action:"startrating"},    					 
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
                     url: base_url+"ajax/hotelbycity", 
					 data :{cityid:cityid,rating:ratingArr,action:"startrating"},   					 
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
                     url: base_url+"ajax/hotelbycity", 
					 data :{cityid:cityid,rating:ratingArr,action:"startrating"},    					 
					 success: function(data){
						$("#hotel_list").html(data);	
						console.log(ratingArr);						
                     },
					  error: function(data){
                        // error message on unsuccess                          
                     }
               });//end of ajax
			
		});

		  
		$("#freewifi").change(function(){
			
			var facility = $(this).val();
			
			// Push korlam
			hotelfacilityArr.push(facility);
			
			$.ajax({
                     method: "POST",                                         
                     url: base_url+"ajax/hotelbycity", 
					 data :{cityid:cityid,facility:hotelfacilityArr,action:"hotelfacility"},    					 
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







/*

https://stackoverflow.com/questions/5767325/how-do-i-remove-a-particular-element-from-an-array-in-javascript
*/