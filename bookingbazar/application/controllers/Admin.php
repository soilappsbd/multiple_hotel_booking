<?php
defined('BASEPATH') OR exit('No direct script access allowed');
///https://www.sitepoint.com/sending-emails-php-phpmailer/
class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_admin');
		$this->check_isvalidated();
	}

	
///	dashboard
	public function index()
	{
		$data['pagetitle'] = "Dashboard";
		$this->load->model('Model_stats');
		$data['content'] = $this->load->view("admin/dashboard_view", $data, true);
		$this->load->view("admin/main_view", $data); 
	}
	
//Add Location
	public function locations(){
		if($this->input->post()){
			$query = $this->Model_admin->addlocation();
			if($query){
			$this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible">
														<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
														<h4><i class="icon fa fa-check"></i> Success !!!</h4>
														 Location Added 
													  </div>');
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible">
														<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
														<h4><i class="icon fa fa-check"></i> Congratulation !!!</h4>
														 Signup Success
													  </div>');
			}										 
				redirect('Admin/locations');
		}else{
			$data['pagetitle'] = "Locations";
			$data['locations'] = $this->Model_admin->locations();
			$data['content'] = $this->load->view("admin/location_view", $data, true);
			$this->load->view("admin/main_view", $data);
		}
	}
	

//Hotel Listing

//Add Location
	public function hotellisting(){
		$data['pagetitle'] = "Hotel Listing";
		$data['hotels'] = $this->Model_admin->hotels();
		$data['content'] = $this->load->view("admin/hotellisting_view", $data, true);
		$this->load->view("admin/main_view", $data);
	}

	
// Add Hotel
public function addhotel(){
		if($this->input->post()){
//pd($this->input->post());
			 $hotelid = $query = $this->Model_admin->addhotel();
			 $query = $this->Model_admin->addfacility($hotelid);
			if($query){
					$this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible">
														<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
														<h4><i class="icon fa fa-check"></i> Success !!!</h4>
														 Hotel Added 
													  </div>');
			}else{
					$this->session->set_flashdata('msg','<div class="alert alert-warning alert-dismissible">
														<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
														<h4><i class="icon fa fa-check"></i> Notice !!!</h4>
														 Hotel already Added
													  </div>');
			}										
				redirect('Admin/hotellisting');
			
			
		}else{
			$data['pagetitle'] = "Add Hotel";
			$data['locations'] = $this->Model_admin->locations();
			$data['hotels'] = $this->Model_admin->hotels();
			$data['content'] = $this->load->view("admin/addhotel_view", $data, true);
			$this->load->view("admin/main_view", $data);
		}
}
		
//Hotel Edit
	
	
	
//Add Hotel Photo
public function addphotohotel(){
		if($this->input->post()){
			$id 	= $this->input->post("id");
		
			
			   $config = array(
					'upload_path' => './hotelphoto/',
					'allowed_types' => 'jpg|gif',
					'max_size' => '2048',
					'multi' => 'all'
				);

				// load Upload library
				$this->load->library('upload',$config);
				
				if($this->upload->do_upload('uploadedimages')){
					$uploaded = $this->upload->data();
					$filecount =  count($uploaded);
					
					for($i = 0; $i  < $filecount ; $i++){
						
							$data[] = array(
								'hotelid'=>$id,
								'photo'=>$uploaded[$i]['file_name'],
								'uploadtime'=>time(),
								'flag'=>1,
							);
					}
					
						$query = $this->Model_admin->addphotohotel($data);
						if($query){
						
							$this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible">
														<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
														<h4><i class="icon fa fa-check"></i> Success !!!</h4>
														 Hotel Added 
													  </div>');
						}else{
								$this->session->set_flashdata('msg','<div class="alert alert-warning alert-dismissible">
																	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
																	<h4><i class="icon fa fa-check"></i> Notice !!!</h4>
																	 Hotel already Added
																  </div>');
						}										 
						
						redirect('Admin/hotellisting'); 
					
				}
	
			
			
		}else{
			$data['pagetitle'] = "Add Hotel Photo";
			$data['id'] =  $this->uri->segment(3);
			if( $this->uri->segment(3)==NULL){
				redirect('Admin/hotellisting');
			}
			$data['content'] = $this->load->view("admin/addphotohotel_view", $data, true);
			$this->load->view("admin/main_view", $data);
		}
}	
	
//Add Rooms
public function rooms(){
		if($this->input->post()){
			pd($this->input->post());
 			$query = $this->Model_admin->addroom();
			if($query){
					$this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible">
														<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
														<h4><i class="icon fa fa-check"></i> Success !!!</h4>
														 Room Added 
													  </div>');
			}else{
					$this->session->set_flashdata('msg','<div class="alert alert-warning alert-dismissible">
														<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
														<h4><i class="icon fa fa-check"></i> Notice !!!</h4>
														 Room already Added
													  </div>');
			}										 
				redirect('Admin/rooms');  
			
		}else{
			$data['pagetitle'] = "Hotel Rooms";
			$data['rooms'] = $this->Model_admin->rooms();
			$data['locations'] = $this->Model_admin->locations();
			$data['content'] = $this->load->view("admin/rooms_view", $data, true);
			$this->load->view("admin/main_view", $data);
		}
		
}	


//Add Hotel Photo
public function addphotoroom(){
		if($this->input->post()){
			$id 	= $this->input->post("id");
		
			
			   $config = array(
					'upload_path' => './roomphoto/',
					'allowed_types' => 'jpg|gif',
					'max_size' => '2048',
					'multi' => 'all'
				);

				// load Upload library
				$this->load->library('upload',$config);
				
				if($this->upload->do_upload('uploadedimages')){
					$uploaded = $this->upload->data();
					$filecount =  count($uploaded);
					
					for($i = 0; $i  < $filecount ; $i++){
						
							$data[] = array(
								'roomid'=>$id,
								'photo'=>$uploaded[$i]['file_name'],
								'uploadtime'=>time(),
								'flag'=>1,
							);
					}
					
						$query = $this->Model_admin->addphotoroom($data);
						if($query){
						
							$this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible">
														<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
														<h4><i class="icon fa fa-check"></i> Success !!!</h4>
														 Room Photo Uploaded 
													  </div>');
						}else{
								$this->session->set_flashdata('msg','<div class="alert alert-warning alert-dismissible">
																	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
																	<h4><i class="icon fa fa-check"></i> Notice !!!</h4>
																	 Something Goes Wrong
																  </div>');
						}										 
						
						redirect('Admin/rooms'); 
					
				}
	
			
			
		}else{
			$data['pagetitle'] = "Upload Room Photo";
			$data['id'] =  $this->uri->segment(3);
			if( $this->uri->segment(3)==NULL){
				redirect('Admin/rooms');
			}
			$data['content'] = $this->load->view("admin/addphotoroom_view", $data, true);
			$this->load->view("admin/main_view", $data);
		}
}





/// Hotel Phto Gallery
public function hotelphoto(){
		if($this->input->post()){
			 
				$hotelid = $this->input->post("hotelid");
			 
				$config['upload_path']   = './hotelphoto/';
				$config['allowed_types'] = 'gif|jpg|png';
	
				$this->load->library('upload', $config);

				if( ! $this->upload->do_upload()){
					$error = array('error' => $this->upload->display_errors());
				}
				else{
					$filename = $_FILES["userfile"]['name'];
					$time = time();
					$this->db->query("INSERT INTO `hotelphoto` SET `hotelid`='$hotelid',`photo`='$filename',`uploadtime`='$time'");	
				}      

			$this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible">
														<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
														<h4><i class="icon fa fa-check"></i> Success !!!</h4>
														 Hotel Phtoto Added 
													  </div>');
			redirect('Admin/hotelphoto');
			
		}else{
			$data['hotelphoto'] = $this->Model_admin->hotelphoto();
			$data['pagetitle'] = "Hotel Photo";
			$data['locations'] = $this->Model_admin->locations();
			$data['hotels'] = $this->Model_admin->hotels();
			$data['content'] = $this->load->view("admin/hotelphoto_view", $data , true);
			$data['content'] = $this->load->view("admin/main_view", $data);
		}
		
}


	public function deletehotelphoto(){
		$id =  $this->uri->segment(3);
		$this->db->query("DELETE FROM `hotelphoto` WHERE `id`=$id");
		$this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible">
														<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
														<h4><i class="icon fa fa-check"></i> Success !!!</h4>
														 Hotel Phtoto Added 
													  </div>');
			redirect('Admin/hotelphoto');
	}
	
	
	
//Ajax Load for Room Add	
	public function appendhotel(){
		$location = $this->input->post("location");
		$hotels = $this->Model_admin->hotelbylocation($location);
		
		foreach($hotels as $r){
			echo '<option value="'.$r->id.'">' .$r->hotelname. '</option>';
		}
		
	}	
	
	
	
	
	
	

//Check login valid
	private function check_isvalidated(){
		if(!$this->session->userdata('admin_login')){
			$url = base_url()."admin_login";
		    redirect($url);
		}
	}
	
///Signout	
	public function signout(){
		$this->session->sess_destroy(); 
		$destination = base_url();
		redirect($destination);
	}
	
	
	
}///end of class
