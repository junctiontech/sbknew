<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->database();
		$this->languageID=1;
	}
	
	public function insert_deals($dealdata=false,$promo_id=false)
	{
		$dealID=0;
		$query1=$this->db->get_where('s4k_deals',array('promo_id'=>$promo_id));
			$result1=$query1->result();
			if(empty($result1)){
				$this->db->insert('s4k_deals',$dealdata);
				$dealID=$this->db->insert_id();
			}else{
				$dealID=$result1[0]->dealID;
				$this->db->where(array('dealID'=>$dealID));
				$this->db->update('s4k_deals',$dealdata);
			}
		
		return $dealID;
	}
	
	public function insert_dealsbanner($dealbannerdata=false,$dealID=false)
	{
		
		$query1=$this->db->get_where('s4k_deals_banner',array('dealID'=>$dealID));
			$result1=$query1->result();
			if(empty($result1)){
				$this->db->insert('s4k_deals_banner',$dealbannerdata);
				
			}else{
				
			}
	}
	
	
}

?>