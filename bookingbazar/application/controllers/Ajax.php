<?php
defined('BASEPATH') OR exit('No direct script access allowed');
///https://www.sitepoint.com/sending-emails-php-phpmailer/
class Ajax extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_home');
		$this->load->model('Model_common');
		
	}

	///https://amazingslider.com/examples/jquery-slider-with-multiple-rows-thumbnails/
///	dashboard
	public function hotelbycity()
	{
		//echo "Good Response";
		//it();
	
	    $action = $this->input->post("action");
		$cityid = $this->input->post("cityid");
		
		if($action=="all"){
			$data['arr'] = $this->Model_common->databysql("SELECT `hotels`.* FROM `hotels` WHERE `locationid`='$cityid'");
		}elseif($action=="startrating"){
			$cityid = $this->input->post("cityid");
			
			$rating = $this->input->post("rating"); 
		
			
			$data['arr'] = $this->Model_common->databysql("SELECT `hotels`.* FROM `hotels` WHERE `locationid`='$cityid' AND `star` IN (".implode(',',$rating).")");
			echo $this->db->last_query();
		}elseif($action=="hotelfacility"){
			$cityid = $this->input->post("cityid");
			
			$facility = $this->input->post("facility"); 
		
			$data['arr'] = $this->Model_common->databysql("SELECT `hotels`.* FROM `hotels` WHERE `hotels`.locationid='$cityid' AND 
			
															`facilitydetail` LIKE (".implode(',',$facility).")");
			echo $this->db->last_query();
		}

		// View create
		$this->load->view("home/ajax/hotelbycity_view", $data);
		//
	}
	
	
/* 	public function hotelbyrating()
	{
		
		//echo "Good Response";
		it();
		$cityid = $this->input->post("cityid");
		//$star = $this->input->post("rating");
		
		
		//$data['arr'] = $this->Model_common->databysql("SELECT `hotels`.* FROM `hotels` WHERE `locationid`='$cityid' AND `star`='$star'");
		//echo $this->db->last_query();
		//$this->load->view("home/ajax/hotelbycity_view", $data);
		//
	} */
	

}///end of class
