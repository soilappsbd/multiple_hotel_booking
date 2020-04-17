<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_site extends CI_Model {
//Login validation Admin Panel
		function __construct(){
			parent::__construct();
		}
		

	// end of basic data		
	public function startimg($star){
			switch ($star) {
				case 1:
					return "1stars.png";
					break;
				case 2:
					return "2stars.png";
					break;
				case 3:
					return "3stars.png";
					break;
				case 4:
					return "4stars.png";
					break;
				case 5:
					return "5stars.png";
					break;		
				default:
					return "1stars.png";
			}

		
	}
		
		
	
	
}//end of class

