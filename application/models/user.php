<?php
class user extends CI_Model
{
	const USER_TABLE = 'user';
	
	function __construct()
	{}

	function get_all()
	{
		$query = $this->db->get($this::USER_TABLE);
		return $query->result();
	}
	
	function save($data)
	{
		$this->db->insert($this::USER_TABLE, $data);
	}
	
	function update($data, $username)
	{
		$this->db->where('username', $username);
		$this->db->update($this::USER_TABLE, $data);
	}
	
	function delete($username)
	{
		$this->db->where('username',$username);
		$this->db->delete($this::USER_TABLE);
	}
  
  function password_check($username, $password)
  {
    $query = $this->db->get_where($this::USER_TABLE, array('username' => $username,'password' => $password));
    if( $query->num_rows == 1 ) {
      return TRUE;
      }
      else {
      FALSE;
      }
  }
  
   private function debug($var) {
      echo '<pre>' ;
      print_r($var) ;
      echo '</pre>'; 
      die();
    }
}
?>