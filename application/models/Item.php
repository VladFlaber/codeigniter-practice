<?php 
/**
 * 
 */
class Item extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}
	public function getItems()
	{
		$res = $this->db->get('items');
		return $res->result_array();
	}
	public function getItemById($id)
	{
	$query = $this->db->get_where('items',array('id' => $id));
	return $query->result_array();
	}

	
	public function addImages($data)
	{
	$insert = $this->db->insert("Images",$data);
	if($insert)
	{
	return $this->db->insert_id();
	}
	else
	{
	return false;
	}
	}


}