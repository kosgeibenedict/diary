<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_model extends CI_Model {
	public function insert_data($table,$data){
		$this->db->insert($table,$data); 
	}
}