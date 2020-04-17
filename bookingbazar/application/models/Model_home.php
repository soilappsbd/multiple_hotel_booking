<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_home extends CI_Model {
//Login validation Admin Panel
		function __construct(){
			parent::__construct();
		}
		

	// end of basic data		
	public function hotels(){
			return $query = $this->db->query("SELECT `hotels`.*,`location`.locationname as location FROM `hotels` 
												LEFT JOIN `location` ON `location`.id=`hotels`.locationid")->result();
	}
		
		
	public function randomthumhotel($id){
			$query = $this->db->query("SELECT `hotelphoto`.photo FROM `hotelphoto` WHERE `hotelid`=$id LIMIT 1")->result();
			
			foreach($query as $row){
				return $row->photo;
			}
	}


		
		
		
	
	
}//end of class

