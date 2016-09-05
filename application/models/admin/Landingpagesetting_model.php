<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Landingpagesetting_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->languageID   = 1;
	}
	public function get_landingpageproducts ()
	{
		$query=$this->db->get('s4k_landingpage_product');
		return $query->result();
	}
	public function getlandingpageproduct($table=false,$where=false)
	{
		$this->db->where($where);
		$query=$this->db->get($table);
		return $query->result();
	}	
	public function insert($table=false,$data=false)
	{
		$this->db->insert($table,$data);
	}
	public function update($table=false, $data=false, $where=false)
	{
		$this->db->where($where);
		$this->db->update($table,$data);		
	}
	public function delete ($table=false,$where=false)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
} 