<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_admin extends CI_Model {
//Login validation Admin Panel
	public function validate(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
	
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('admin');
	
			if($query->num_rows() > 0)
			{
						$row = $query->row();
						$data = array(
							'id' => $row->id,
							'name' => $row->name,
							'username' => $row->username,
							'admin_login' => true
						);		
			  $this->session->set_userdata($data);
			  return $data;		
			}
	}
	
	
	
	//LOCATION
		//select location
		public function locations(){
			return $query = $this->db->query("SELECT * FROM `location`")->result();
		}
		
		
//Add Location		
		public function addlocation(){
	
			$location = $this->input->post('location');

			$check = $this->db->query("SELECT `id` FROM `location` WHERE `locationname`='$location'")->num_rows();
			
			if($check < 1){
				
				$data = array(
						'country' => $this->input->post('country'),
						'locationname'=> $this->input->post('location'),
						'flag'=>1
					);
					
				 $this->db->insert("location",$data);	
				 return true;
			}else{
				return false;
			}
		}
	
//All Hotel	
		public function hotels(){
			return $query = $this->db->query("SELECT `hotels`.*,`location`.locationname as location FROM `hotels` 
												LEFT JOIN `location` ON `location`.id=`hotels`.locationid")->result();
		}

// Hotel  By location		
   function hotelbylocation($location){
	 return $this->db->query("SELECT * FROM `hotels` WHERE `locationid`=$location")->result(); 
   }		
		
		
//Add Hotel		
		public function addhotel(){
			$hotel = $this->input->post('hotelname');

			$check = $this->db->query("SELECT `id` FROM `hotels` WHERE `hotelname`='$hotel'")->num_rows();

			if($check < 1){
				
				$data = array(
						'locationid' => $this->input->post('location'),
						'hotelname' => $this->input->post('hotelname'),
						'address'=> $this->input->post('address'),
						'description'=> $this->input->post('description'),
						'subway'=> $this->input->post('subway'),
						'star'=> $this->input->post('star'),
						'flag'=>1
					);
					
				 $this->db->insert("hotels",$data);	
				 
				 return $this->db->insert_id();
			}else{
				return false;
			}
		}
		
	
//Add Facility for hotel	
	public function addfacility($hotelid){
					
		$gfacility = $this->input->post('gfacility');
		$gf =  implode(",",$gfacility);
		
		$this->db->query("INSERT INTO `facilities` SET `hotelid`='$hotelid',`facilityname`='gfacility',`facilitydetail`='$gf',`flag`=1");		
				 
		$languagespoken = $this->input->post('languagespoken');
		$lan =  implode(",",$languagespoken);
			
		$this->db->query("INSERT INTO `facilities` SET `hotelid`='$hotelid',`facilityname`='language',`facilitydetail`='$lan',`flag`=1");
			
		$parking = $this->input->post('parking');
		$park =  implode(",",$parking);
		
		$this->db->query("INSERT INTO `facilities` SET `hotelid`='$hotelid',`facilityname`='parking',`facilitydetail`='$park',`flag`=1");
				 
		$view = $this->input->post('view');
		$vi =  implode(",",$view);
		
		$this->db->query("INSERT INTO `facilities` SET `hotelid`='$hotelid',`facilityname`='view',`facilitydetail`='$vi',`flag`=1");
			
				 
		$Outdoors = $this->input->post('outdoor');
		$outd =  implode(",",$Outdoors);
		$this->db->query("INSERT INTO `facilities` SET `hotelid`='$hotelid',`facilityname`='outdoor',`facilitydetail`='$outd',`flag`=1");
			
			
		$internet = $this->input->post('internet');
		$inter =  implode(",",$internet);
		$this->db->query("INSERT INTO `facilities` SET `hotelid`='$hotelid',`facilityname`='internet',`facilitydetail`='$inter',`flag`=1");
		

		$kitchen = $this->input->post('kitchen');
		$kit =  implode(",",$kitchen);
		$this->db->query("INSERT INTO `facilities` SET `hotelid`='$hotelid',`facilityname`='kitchen',`facilitydetail`='$kit',`flag`=1");
		
		$accessibility = $this->input->post('accessibility');
		$access =  implode(",",$accessibility);
		$this->db->query("INSERT INTO `facilities` SET `hotelid`='$hotelid',`facilityname`='accessibility',`facilitydetail`='$access',`flag`=1");
		
		$activities = $this->input->post('activities');
		$acti =  implode(",",$activities);
		$this->db->query("INSERT INTO `facilities` SET `hotelid`='$hotelid',`facilityname`='activities',`facilitydetail`='$acti',`flag`=1");
					
		$entertainment = $this->input->post('entertainment');
		$entertain =  implode(",",$entertainment);
		$this->db->query("INSERT INTO `facilities` SET `hotelid`='$hotelid',`facilityname`='entertainment',`facilitydetail`='$entertain',`flag`=1");
		
		$transport = $this->input->post('transport');
		$trans =  implode(",",$transport);
		$this->db->query("INSERT INTO `facilities` SET `hotelid`='$hotelid',`facilityname`='transport',`facilitydetail`='$trans',`flag`=1");
					
		$hotelamenities = $this->input->post('hotelamenities');
		$hotelameni =  implode(",",$hotelamenities);
		$this->db->query("INSERT INTO `facilities` SET `hotelid`='$hotelid',`facilityname`='hotelamenities',`facilitydetail`='$hotelameni',`flag`=1");
		
		$pets = $this->input->post('pets');
		$pets =  implode(",",$pets);
		$this->db->query("INSERT INTO `facilities` SET `hotelid`='$hotelid',`facilityname`='pets',`facilitydetail`='$pets',`flag`=1");
		
			
			
				 	
	}


	
	
	
	//All Rooms	
		public function rooms(){
			return $query = $this->db->query("SELECT `rooms`.*,`hotels`.hotelname FROM `rooms` 
												LEFT JOIN `hotels` ON `hotels`.id=`rooms`.hotelid")->result();
		}
	
	//Add Rooms
		public function addroom(){		
				$hotelid = $this->input->post('hotelid');
				$roomtype = $this->input->post('roomname');

				$check = $this->db->query("SELECT `id` FROM `rooms` WHERE `hotelid`=$hotelid AND `roomname`=$roomtype ")->num_rows();
				
				if($check < 1){
					
					$data = array(
							'hotelid' => $hotelid ,
							'roomname'=> $roomtype,
							'description'=> $this->input->post('description'),
							'baseprice'=> $this->input->post('baseprice'),
							'todayprice'=> $this->input->post('todayprice'),
							'guestallowed'=> $this->input->post('guestallowed'),
							'roomsize'=> $this->input->post('roomsize'),
							'howmany'=> $this->input->post('howmany'),
							'bed_bedroom'=> $this->input->post('bed_bedroom'),
							'bed_livingroom'=> $this->input->post('bed_livingroom'),
							'offerpercent'=> $this->input->post('offerpercent'),
							'offerpercent'=> $this->input->post('offerpercent'),
							'facilities'=> $this->input->post('facilities'),
							'facility'=> implode(",",$this->input->post('facility')),
							'flag'=>1
						);
						
					 $this->db->insert("rooms",$data);	
					 return true;
				}else{
					return false;
				}
			}


// Add Hotel Photo		

		
//Hotle Photos
   function hotelphoto(){
	   return $this->db->query("SELECT  hotelphoto.* , hotels.hotelname FROM  hotelphoto
								LEFT JOIN hotels ON hotels.id = hotelphoto.hotelid
								")->result();
   }	


   
		
//Add Hotel Photo		
   function addphotohotel($data){
	  $this->db->insert_batch('hotelphoto', $data); 
	  return true;
   }
   
//Add Hotel Photo By Id		
   function hotelphotobyid($id){
	 return $this->db->query("SELECT * FROM `hotelphoto` WHERE `hotelid`=$id")->result(); 
   }
   
   
//Add Room Photo		
   function addphotoroom($data){
	  $this->db->insert_batch('roomphoto', $data); 
	  return true;
   }
    
	
//Add Hotel Photo By Id		
   function roomphotobyid($id){
	 return $this->db->query("SELECT * FROM `roomphoto` WHERE `roomid`=$id")->result(); 
   }	
	
	
	
}//end of class

