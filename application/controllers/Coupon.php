<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Coupon extends CI_Controller 
{
	function __construct() 		
	{		
		parent::__construct();			
		$this->data[]="";			
		$this->data['url'] = base_url();		
		if (!$this->session->userdata('searchb4kharchadmin')){ $this->session->set_flashdata('category_error_login', " Your Session Is Expired!! Please Login Again. "); redirect("admin");}		
		$this->userinfo=$this->data['userinfo']=$this->session->userdata('searchb4kharchadmin');		
		$this->load->model('admin/Coupon_model');		
	}
	public function display($template_file)		
	{		
		$this->parser->parse('admin/Header',$this->data);			
		$this->load->view($template_file, $this->data);			
		$this->parser->parse('admin/Footer',$this->data);		
	}		
	public function index()	
	{
		$status=$this->input->get('status');
		$this->data['redeemrequestdata']=$this->Coupon_model->get_redeemrequestlist(array('t1.Status'=>$status));		
		$this->display('admin/Redeemrequest', $this->data);	
	}
	public function changestatus()
	{
		$status=$this->input->post('data');
		$id=$this->input->post('id');		
		$this->Coupon_model->update('s4k_user_redeem_request',array('Status'=>$status),array('redeemRequestID'=>$id));		
	}
	
}
?>