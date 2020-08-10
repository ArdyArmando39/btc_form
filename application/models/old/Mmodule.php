<?php
class Mmodule extends CI_Model{

	function __construct()
    {
        parent::__construct();
    }

	// Update
	function update_module($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);

	}

	// insert
	function save_module($data,$table){
		$this->db->insert($table,$data);
	}
	// end  insert




}
