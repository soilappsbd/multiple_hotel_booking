<?php
defined('BASEPATH') OR exit('No direct script access allowed');
///https://www.sitepoint.com/sending-emails-php-phpmailer/
class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_home');
		$this->load->model('Model_common');
		$this->load->model('Model_site');
		
	}

	///https://amazingslider.com/examples/jquery-slider-with-multiple-rows-thumbnails/
///	dashboard
	public function index()
	{
		$data['title'] = "Home Page";	
		$data['hotels'] = $this->Model_home->hotels();	
		$data['location'] = $this->Model_common->databysql("SELECT * FROM `location`");	
		$data['content'] = $this->load->view("home/home", $data, true);
		$this->load->view("home/common/main", $data);
	}
	

		
	public function city()
	{
		$data['title'] = "City Page";
		$cityid = $this->uri->segment(3);	
		$data['arr'] = $this->Model_common->databysql("SELECT `hotels`.* FROM `hotels` WHERE `locationid`='$cityid'");	
	
		$data['location'] = $this->Model_common->databysql("SELECT * FROM `location`");	
		$data['content'] = $this->load->view("home/city", $data, true);
		$this->load->view("home/common/main", $data);
	}
	
	
	public function hoteldetail()
	{
		$data['title'] = "Hotel Detail";
		$hotelid = $this->uri->segment(3);	
		$data['arr'] = $this->Model_common->databysql("SELECT `hotels`.* FROM `hotels` WHERE hotels.id='$hotelid'");	
		$data['hotelphoto'] = $this->Model_common->databysql("SELECT `hotelphoto`.photo FROM `hotelphoto` WHERE hotelphoto.hotelid='$hotelid'");	
		
		$data['rooms'] = $this->Model_common->databysql("SELECT * FROM `rooms` WHERE `hotelid`='$hotelid'");	
		
		// facility
		$data['gfacility'] = $this->Model_common->databysql("SELECT `facilities`.* FROM `facilities` WHERE facilities.hotelid='$hotelid' AND `facilityname`='gfacility'");	
		$data['forntdesk'] = $this->Model_common->databysql("SELECT `facilities`.* FROM `facilities` WHERE facilities.hotelid='$hotelid' AND `facilityname`='forntdesk'");	
		$data['Services'] = $this->Model_common->databysql("SELECT `facilities`.* FROM `facilities` WHERE facilities.hotelid='$hotelid' AND `facilityname`='Services'");	
		$data['bathroom'] = $this->Model_common->databysql("SELECT `facilities`.* FROM `facilities` WHERE facilities.hotelid='$hotelid' AND `facilityname`='bathroom'");	
		$data['media'] = $this->Model_common->databysql("SELECT `facilities`.* FROM `facilities` WHERE facilities.hotelid='$hotelid' AND `facilityname`='media'");	
		
		
		$data['location'] = $this->Model_common->databysql("SELECT * FROM `location`");	
		$data['content'] = $this->load->view("home/hoteldetail", $data, true);
		$this->load->view("home/common/main", $data);
	}



	public function signup(){
		if($this->input->post()){
		
			$fullname = $this->input->post("fullname");
			$email = $this->input->post("email");
			$password = $this->input->post("password");
			$phone = $this->input->post("phone");
			
			$data = array(
							'fullname'=>$fullname,
							'email'=>$email,
							'phone'=>$phone,
							'password'=>$password,
							'privillage'=>1,
							'joindate'=>time(),
							'campaignid'=>0,
							'updatetime'=>time(),
							'flag'=>1,
						);
			
			
			$insert_userdata =$this->Model_common->insertdata("users",$data);
	
				if($insert_userdata){
						
					$this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible">
														<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
														 Thanks ! Sisgnup Success
													  </div>');
				}else{
					$this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible">
														<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
														 Something Goes Wrong
													  </div>');
				}

			redirect('home'); 		
			
		}
		
		
	}
	
	
// Login	
	public function login(){
		it();
	}
	
}///end of class
