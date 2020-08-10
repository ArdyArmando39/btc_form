<?php
class Madminuser extends CI_Model{

	function __construct()
    {
        parent::__construct();
    }

	function check_ldap($username,$password)
	{
		$query = $this->db->query("SELECT * FROM hola.user where username='$username' AND password='$password'");
		if($query->num_rows()> 0 ){
			return 1;
		}else{
			return 2;
		}
 		
	}

	function get_info($username)
	{
		$query = $this->db->query("SELECT * FROM hola.user WHERE username='$username'");
		return $query->result();
	}


	public function get_user()
	{
		$sql = "SELECT * FROM hola.user order by iduser DESC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function get_user_edit($iduser)
	{
		$sql = "SELECT * FROM hola.user where iduser='$iduser'";
		$query = $this->db->query($sql);
		return $query->result();
	}





}
