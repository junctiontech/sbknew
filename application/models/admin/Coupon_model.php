<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Coupon_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->languageID   = 1;
	}	
	public function get_coupon($table)
	{
		$this->db->order_by('couponID','DESC');
		$query=$this->db->get($table);		
		return $query->result();		
	}	
	public function get_redeemrequestlist($where)
	{
		$this->db->select('t1.redeemRequestID,Type,Number,Opretor,States,t1.Status,t2.userFirstName');
		$this->db->from('s4k_user_redeem_request t1');
		$this->db->join('s4k_user t2','t1.userID=t2.userID','left');
		$this->db->where($where);
		$this->db->order_by('redeemRequestID','DESC');
		$query=$this->db->get();		
		return $query->result();	
	}
	public function update($table=false,$data=false,$where=false)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
}
?>