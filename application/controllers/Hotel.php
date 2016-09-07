<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel extends CI_Controller {
	
	function __construct() {
		parent::__construct();		
		$this->data[]="";
		$this->data['url'] = base_url();
		$timezone = "Asia/Calcutta";
		if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
		$this->userinfos=$this->data['userinfos']=$this->session->userdata('searchb4kharch');
		$this->load->model('frontend/Landingpage_model');
		$this->search_index = APPPATH . 'search/index';
		if($this->userinfos){
		$this->load->model('frontend/User_model');
		$wishlist=$this->User_model->get_wishlistcount('s4k_user_wishlist',array('userID'=>$this->userinfos['userID'],'Status'=>'Active'));
		$this->data['whislist']=count($wishlist);
		$this->data['whislistproduct']=array();
		foreach($wishlist as $wishlists){
		$this->data['whislistproduct'][]=$wishlists->productID;
		}
		
		}
	}
	
	
	public function display($template_file){
		$this->parser->parse('frontend/Header',$this->data);
		$this->load->view($template_file, $this->data);
		$this->parser->parse('frontend/Footer',$this->data);
	}
	
	public function index()
	{
		$app=$this->input->get('app');
		$jsonarray=array();
		
		if($this->input->get())
		{
			$where=$this->data['where']=$this->input->get('where');
			$checkIn=$this->data['checkin']=$this->input->get('checkIn');
			$checkOut=$this->data['checkout']=$this->input->get('checkOut');
			$noOfGuests=$this->data['guests']=$this->input->get('noOfGuests');
			$noOfRoom=$this->data['rooms']=$this->input->get('noOfRoom');
			
			$jsonData = json_decode(file_get_contents("http://partners.api.skyscanner.net/apiservices/hotels/liveprices/v2/IN/INR/en-GB/$where/$checkIn/$checkOut/$noOfGuests/$noOfRoom?apiKey=prtl6749387986743898559646983194"),true);
			
			
			if(!empty($jsonData['urls']['hotel_details'])){
				$hotelsDetailUrl=$jsonData['urls']['hotel_details'];
			}
			
			if(!empty($jsonData['hotels'])){
				
				$hotelsID='';
				
				foreach($jsonData['hotels'] as $hotel)
				{ 
					$hotelsID[]=$hotel['hotel_id'];
					
				}
			}
			
			if(!empty($hotelsDetailUrl) && !empty($hotelsID)){
				
				$hotelsID=implode(",",$hotelsID);
				$getHotelsDetail = json_decode(file_get_contents("http://partners.api.skyscanner.net$hotelsDetailUrl&hotelIds=$hotelsID"),true);
				//print_r($getHotelsDetail);die;
				$this->data['getHotelsDetail']=$getHotelsDetail;
				
			}
			
		}
		
		
		if($app=='true'){
			if(!empty($categories)){
				$jsonarray['categories']=$categories;
				//$jsonarray['featureproduct']=$featureproduct;
				//$jsonarray['newproduct']=$newproduct;
				//$jsonarray['lshproduct']=$lshproduct;
				//$jsonarray['topbrand']=$topbrand;
				$jsonarray['hotels']=$getHotelsDetail;
				//$jsonarray['deals']=$deals;
				//$jsonarray['dealsgategorys']=$dealsgategorys;
				echo json_encode($jsonarray);
			}else{
				echo "No category found";
			}
		}else{
			
			$this->display ('frontend/Hotel');
				
		}
	}
	
	public function getplaceID()
	{
		$app=$this->input->get('app');
		if($this->input->post())
		{
			$placekey=$this->input->post('placekey');
			
			$jsonData = json_decode(file_get_contents("http://partners.api.skyscanner.net/apiservices/hotels/autosuggest/v2/IN/INR/en-GB/$placekey?apiKey=se891278314094529612719886766340"),true);

			if(!empty($jsonData['results'])){
				if($app==true){
					echo json_encode($jsonData['results']);exit;
				}else{
					//echo "<option  value=\"\">where</option> ";
					foreach($jsonData['results'] as $place)
					{ 
						$placeID='';$placeName='';
						$placeID=$place['individual_id'];$placeName=$place['display_name'];
						echo "<option  value=\"$placeID\">$placeName</option> ";
					}
				}
			}else{
				if($app==true){
				echo "No result found";exit;
				}
			}
		}
	}
	
	public function gethotels()
	{
		$app=$this->input->get('app');
		if($this->input->get())
		{
			$where=$this->input->get('where');
			$checkIn=$this->input->get('checkIn');
			$checkOut=$this->input->get('checkOut');
			$noOfGuests=$this->input->get('noOfGuests');
			$noOfRoom=$this->input->get('noOfRoom');
			
			$jsonData = json_decode(file_get_contents("http://partners.api.skyscanner.net/apiservices/hotels/liveprices/v2/IN/INR/en-GB/$where/$checkIn/$checkOut/$noOfGuests/$noOfRoom?apiKey=prtl6749387986743898559646983194"),true);
			
			
			if(!empty($jsonData['urls']['hotel_details'])){
				$hotelsDetailUrl=$jsonData['urls']['hotel_details'];
			}
			
			if(!empty($jsonData['hotels'])){
				
				$hotelsID='';
				
				foreach($jsonData['hotels'] as $hotel)
				{ 
					$hotelsID[]=$hotel['hotel_id'];
					
				}
			}
			
			if(!empty($hotelsDetailUrl) && !empty($hotelsID)){
				
				$hotelsID=implode(",",$hotelsID);
				$getHotelsDetail = json_decode(file_get_contents("http://partners.api.skyscanner.net$hotelsDetailUrl&hotelIds=$hotelsID"),true);
				if($app=true){
					echo json_decode($getHotelsDetail);exit;
				}else{
				$this->data['getHotelsDetail']=$getHotelsDetail;
				}
			}
			
		}
	}
	
}
