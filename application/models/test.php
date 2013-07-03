<?php
class test extends CI_Model
{
	const MESSAGE_TABLE = 'testTable';
	
	function __construct()
	{}

	function get_all()
	{
		$query = $this->db->get($this::MESSAGE_TABLE);
		return $query->result();
	}
	
	function save($data)
	{
		$this->db->insert($this::MESSAGE_TABLE, $data);
	}
	
	function update($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update($this::MESSAGE_TABLE, $data);
	}
	
	function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete($this::MESSAGE_TABLE);
	}
}
?>