<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menus_model extends CI_Model {

    public function category_save_model($data)
    {
        if($this->db->insert('category',$data))
        {
            return true;
        }else{
            return false;
        }
    }

    public function category_fetch()
    {
        $query = $this->db->query("SELECT * FROM category ORDER BY category_id DESC");
        return $query->result_array();
    }

    public function category_details($id)
    {
        $query = $this->db->query("SELECT * FROM category WHERE category_id = $id");
        return $query->result_array();
    }

    // SUBCATEGORY SECTION START

    public function subcategory_save_model($data)
    {
        if($this->db->insert('subcategory',$data))
        {
            return true;
        }else{
            return false;
        }
    }

    public function subcategory_fetch()
    {
        $query = $this->db->query("SELECT subcategory.display_order as sub_display, subcategory.*, category.* FROM subcategory JOIN category ON subcategory.cat_id=category.category_id");
        return $query->result_array();
    }

    public function active_category_fetch()
    {
        $query = $this->db->query("SELECT * FROM category WHERE category_status = '1' ");
        return $query->result_array();
    }

    public function subcategory_details($id)
    {
        $query = $this->db->query("SELECT subcategory.display_order as sub_display, subcategory.*, category.* FROM subcategory JOIN category ON subcategory.cat_id=category.category_id WHERE subcategory_id = $id");
        return $query->result_array();
    }

    // BUSINESS TYPE FETCH

    public function business_type_save_model($data)
    {
        if($this->db->insert('business_type',$data))
        {
            return true;
        }else{
            return false;
        }
    }

    public function business_type_fetch()
    {
        $query = $this->db->query("SELECT * FROM business_type ORDER BY id DESC");
        return $query->result_array();
    }

    public function business_type_details($id)
    {
        $query = $this->db->query("SELECT * FROM business_type WHERE id = $id");
        return $query->result_array();
    }

    public function privacy_policy_fetch()
    {
        $query = $this->db->query("SELECT * FROM privacy_policy ORDER BY id DESC LIMIT 1");
        return $query->result_array();
    }
    public function terms_condition_fetch()
    {
        $query = $this->db->query("SELECT * FROM terms_condition ORDER BY id DESC LIMIT 1");
        return $query->result_array();
    }

    // BANNER SECTION START

    public function banner_save_model($data)
    {
        if($this->db->insert('banner',$data))
        {
            return true;
        }else{
            return false;
        }
    }

    public function banner_fetch()
    {
        $query = $this->db->query("SELECT * FROM banner ORDER BY id DESC");
        return $query->result_array();
    }

    public function banner_details($id)
    {
        $query = $this->db->query("SELECT * FROM banner WHERE id = $id");
        return $query->result_array();
    }

    // CUSTOMER SECTION START

    public function customer_fetch()
    {
        $query = $this->db->query("SELECT * FROM customer ORDER BY id DESC");
        return $query->result_array();
    }

    public function customer_details($id)
    {
        $query = $this->db->query("SELECT * FROM customer WHERE id = $id");
        return $query->result_array();
    }

    // POST REQUIREMENT SECTION START

    public function post_requirement_fetch()
    {
        $query = $this->db->query("SELECT * FROM post_requirement ORDER BY id DESC");
        return $query->result_array();
    }

    public function post_requirement_details($id)
    {
        $query = $this->db->query("SELECT * FROM post_requirement WHERE id = $id");
        return $query->result_array();
    }

    

    // SUPPLER SECTION START

    public function all_supplier_fetch()
    {
        $query = $this->db->query("SELECT * FROM supplier ORDER BY id DESC");
        return $query->result_array();
    }
    public function pending_supplier_fetch()
    {
        $query = $this->db->query("SELECT * FROM supplier WHERE status='PENDING' ORDER BY id DESC");
        return $query->result_array();
    }
    public function approved_supplier_fetch()
    {
        $query = $this->db->query("SELECT * FROM supplier WHERE status='DONE' ORDER BY id DESC");
        return $query->result_array();
    }
    public function rejected_supplier_fetch()
    {
        $query = $this->db->query("SELECT * FROM supplier WHERE status='CANCELLED' ORDER BY id DESC");
        return $query->result_array();
    }

    public function supplier_details($id)
    {
        $query = $this->db->query("SELECT * FROM supplier WHERE id = $id");
        return $query->result_array();
    }

    
    

}
