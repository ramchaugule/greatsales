<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

	
	public function getCategories()
	{   
        $this->db->where("category_status", 1);
		return $this->db->get("category")->result_array();
		
	}



	// public function getJobDetails($id,$limit,$offset){
    //     $this->db->where("status", 'ACTIVE');
	// 		$this->db->limit($limit, $offset);
	// 	return $this->db->where('job_category_id',$id)->get("job_details")->result_array();
	// }

	public function getSubCategories($id)
	{   
        $this->db->where("subcategory_status", 1);
		return $this->db->where('cat_id',$id)->get("subcategory")->result_array();
		
	}

    

	


}
