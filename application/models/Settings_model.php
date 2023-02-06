<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings_model extends CI_Model {

	public function getcmspage($page)
	{   
        $this->db->where("id", 1);
		return $this->db->get($page)->row_array();
		
	}

	public function getbannerimg()
	{   
        $this->db->where("status", 1);
		return $this->db->get('banner')->result_array();
		
	}
	

}
