<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landingpagesetting extends CI_Controller 
{
		function __construct() 
		{
			parent::__construct();		
			$this->data[]="";
			$this->data['url'] = base_url();
			if (!$this->session->userdata('searchb4kharchadmin')){ $this->session->set_flashdata('category_error_login', " Your Session Is Expired!! Please Login Again. "); redirect("Login/Admin");}
			$this->userinfo=$this->data['userinfo']=$this->session->userdata('searchb4kharchadmin');
			$this->load->model('admin/Landingpagesetting_model');
		}	
		public function display($template_file)
		{
			$this->parser->parse('admin/Header',$this->data);
			$this->load->view($template_file, $this->data);
			$this->parser->parse('admin/Footer',$this->data);
		}
		public function index($url=false) 
		{
			$this->data['Landingpageproduct']=$this->Landingpagesetting_model->get_landingpageproducts();		
			$this->display('admin/Landingpageproductlist', $this->data);
		}
		public function Landingpage_product()
		{
			$inventoryID=$this->input->post('inventoryID');
				$data=array(				
					'inventoryHedding'=>$this->input->post('inventoryHedding'),					
					'categoryName'=>$this->input->post('categoryName'),			
					'quantity'=>$this->input->post('quantity'),				
					'Status'=>$this->input->post('status'),				
				);	
			if(!empty($inventoryID))
			{
				$this->Landingpagesetting_model->update('s4k_landingpage_product',$data, array('inventoryID'=>$inventoryID));
				$this->session->set_flashdata('message_type', 'success');			
				$this->session->set_flashdata('message', $this->config->item("Setting") . "Successfully Update!!");
			}
			else{
				$this->Landingpagesetting_model->insert('s4k_landingpage_product',$data);
				$this->session->set_flashdata('message_type', 'success');			
				$this->session->set_flashdata('message', $this->config->item("Setting") . "Successfully Add!!");
			}			
			redirect ('Landingpagesetting');
						
		}
	public function landingpageproduct($id=false)
	{
		if(!empty ($id)){
			$this->data['product']=$this->Landingpagesetting_model->getlandingpageproduct('s4k_landingpage_product',array('inventoryID'=>$id));
		}			
		$this->load->view('admin/Landingpageproduct', $this->data);
	}
	public function landingpageproductdelete ($inventoryid=false)
	{
		$this->Landingpagesetting_model->delete('s4k_landingpage_product',array('inventoryid'=>$inventoryid));
		$this->session->set_flashdata('message_type', 'success');		
		$this->session->set_flashdata('message', $this->config->item("Setting") . "Successfully Delete!!");			
		redirect ('Landingpagesetting');
	}
	
	
}