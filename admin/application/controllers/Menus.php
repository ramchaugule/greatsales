<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menus extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("Menus_model", 'mm');
		
	}
	
	public function category_list()
	{
		$data[] = array();
		$data['category'] = $this->mm->category_fetch();
		$this->load->view('header');
		$this->load->view('category/category_list',$data);
		$this->load->view('footer');
	}
	public function category_add()
	{
		$this->load->view('header');
		$this->load->view('category/category_add');
		$this->load->view('footer');
	}

	public function category_save()
	{
		$category_name = $this->input->post('category_name');
		$display_order = $this->input->post('display_order');
		$status = $this->input->post('status');
		$show_on_home = $this->input->post('show_on_home');

		$config['upload_path']          = './assets/img/category/';
		$config['allowed_types']        = '*';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('image')) {
			$error = array('error' => $this->upload->display_errors());
		} else {
			$data = $this->upload->data();
			$image =  $data['file_name'];
		}

		if (!$this->upload->do_upload('ads')) {
			$error = array('error' => $this->upload->display_errors());
		} else {
			$data = $this->upload->data();
			$ads =  $data['file_name'];
		}

		$this->load->helper('text');
		$this->load->helper('url');
		$slug = url_title(convert_accented_characters($category_name),'dash',true);


		$data = array('category_name'=>$category_name, 'display_order'=>$display_order, 'category_image'=>$image,'slug'=>$slug, 'ads'=>$ads, 'category_status'=>$status,'show_on_home'=>$show_on_home);

		if($this->mm->category_save_model($data))
		{
			?>
			<script>
				alert("Category Successfully Added..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/category_list";
			</script>
			<?php
		}else{
			?>
			<script>
				alert("Oops.. Something Went Wrong..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/category_list";
			</script>
			<?php
		}

	}

	public function delete_category($id)
	{
		$this->db->where('category_id',$id);
		if($this->db->delete('category'))
		{
			?>
			<script>
				alert("Category Successfully Deleted..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/category_list";
			</script>
			<?php
		}else{
			?>
			<script>
				alert("Oops.. Something Went Wrong..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/category_list";
			</script>
			<?php
		}
	}

	public function edit_category($id)
	{
		$data[] = array(); 
		$data['category_details'] = $this->mm->category_details($id);
		$this->load->view('header');
		$this->load->view('category/category_edit',$data);
		$this->load->view('footer');
	}

	public function category_edit_save()
	{
		$id = $this->input->post('id');
		$category_name = $this->input->post('category_name');
		$display_order = $this->input->post('display_order');
		$status = $this->input->post('status');
		$show_on_home = $this->input->post('show_on_home');
		$old_image = $this->input->post('old_image');
		$old_ads = $this->input->post('old_ads');

		$config['upload_path']          = './assets/img/category/';
		$config['allowed_types']        = '*';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('image')) {
			$error = array('error' => $this->upload->display_errors());
		} else {
			$data = $this->upload->data();
			$image =  $data['file_name'];
		}

		if (!$this->upload->do_upload('ads')) {
			$error = array('error' => $this->upload->display_errors());
		} else {
			$data = $this->upload->data();
			$ads =  $data['file_name'];
		}


		if (!empty($image)) {
			$image = $image;
		} else {
			$image = $old_image;
		}

		if (!empty($ads)) {
			$ads = $ads;
		} else {
			$ads = $old_ads;
		}

		


		$data = array('category_name'=>$category_name, 'display_order'=>$display_order, 'category_image'=>$image, 'ads'=>$ads,'show_on_home'=>$show_on_home, 'category_status'=>$status);

		$this->db->where('category_id',$id);
		if($this->db->update('category',$data))
		{
			?>
			<script>
				alert("Category Successfully Updated..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/category_list";
			</script>
			<?php
		}else{
			?>
			<script>
				alert("Oops.. Something Went Wrong..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/category_list";
			</script>
			<?php
		}

	}


	// SUBCATEGORY SECTION START

	public function subcategory_list()
	{
		$data[] = array();
		$data['subcategory'] = $this->mm->subcategory_fetch();
		$this->load->view('header');
		$this->load->view('sub_category/subcategory_list',$data);
		$this->load->view('footer');
	}

	public function subcategory_add()
	{
		$data[] = array();
		$data['active_category'] = $this->mm->active_category_fetch();
		$this->load->view('header');
		$this->load->view('sub_category/subcategory_add',$data);
		$this->load->view('footer');
	}

	public function subcategory_save()
	{
		$category_id = $this->input->post('category_id');
		$subcategory_name = $this->input->post('subcategory_name');
		$display_order = $this->input->post('display_order');
		$status = $this->input->post('status');

		$config['upload_path']          = './assets/img/subcategory/';
		$config['allowed_types']        = '*';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('image')) {
			$error = array('error' => $this->upload->display_errors());
		} else {
			$data = $this->upload->data();
			$image =  $data['file_name'];
		}


		$this->load->helper('text');
		$this->load->helper('url');
		$slug = url_title(convert_accented_characters($subcategory_name),'dash',true);


		$data = array('cat_id'=>$category_id,'subcategory_name'=>$subcategory_name,'slug'=>$slug, 'display_order'=>$display_order, 'subcategory_image'=>$image, 'subcategory_status'=>$status);

		if($this->mm->subcategory_save_model($data))
		{
			?>
			<script>
				alert("Subategory Successfully Added..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/subcategory_list";
			</script>
			<?php
		}else{
			?>
			<script>
				alert("Oops.. Something Went Wrong..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/subcategory_list";
			</script>
			<?php
		}

	}

	public function delete_subcategory($id)
	{
		$this->db->where('subcategory_id',$id);
		if($this->db->delete('subcategory'))
		{
			?>
			<script>
				alert("Subcategory Successfully Deleted..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/subcategory_list";
			</script>
			<?php
		}else{
			?>
			<script>
				alert("Oops.. Something Went Wrong..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/subcategory_list";
			</script>
			<?php
		}
	}

	public function edit_subcategory($id)
	{
		$data[] = array(); 
		$data['subcategory_details'] = $this->mm->subcategory_details($id);
		$data['active_category'] = $this->mm->active_category_fetch();
		$this->load->view('header');
		$this->load->view('sub_category/subcategory_edit',$data);
		$this->load->view('footer');
	}

	public function subcategory_edit_save()
	{
		$id = $this->input->post('id');
		$category_id = $this->input->post('category_id');
		$subcategory_name = $this->input->post('subcategory_name');
		$display_order = $this->input->post('display_order');
		$status = $this->input->post('status');
		$old_image = $this->input->post('old_image');

		$config['upload_path']          = './assets/img/subcategory/';
		$config['allowed_types']        = '*';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('image')) {
			$error = array('error' => $this->upload->display_errors());
		} else {
			$data = $this->upload->data();
			$image =  $data['file_name'];
		}

		if (!empty($image)) {
			$image = $image;
		} else {
			$image = $old_image;
		}
		


		$data = array('cat_id'=>$category_id ,'subcategory_name'=>$subcategory_name, 'display_order'=>$display_order, 'subcategory_image'=>$image, 'subcategory_status'=>$status);

		$this->db->where('subcategory_id',$id);
		if($this->db->update('subcategory',$data))
		{
			?>
			<script>
				alert("Subcategory Successfully Updated..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/subcategory_list";
			</script>
			<?php
		}else{
			?>
			<script>
				alert("Oops.. Something Went Wrong..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/subcategory_list";
			</script>
			<?php
		}

	}

	// BUSINESS TYPE SECTION START

	public function business_type_list()
	{
		$data[] = array();
		$data['business_type'] = $this->mm->business_type_fetch();
		$this->load->view('header');
		$this->load->view('business_type/business_type_list',$data);
		$this->load->view('footer');
	}

	public function business_type_add()
	{
		$this->load->view('header');
		$this->load->view('business_type/business_type_add');
		$this->load->view('footer');
	}

	public function business_type_save()
	{
		$business_type = $this->input->post('business_type');
		$status = $this->input->post('status');

		$data = array('business_type'=>$business_type, 'business_type_status'=>$status);

		if($this->mm->business_type_save_model($data))
		{
			?>
			<script>
				alert("Business Type Successfully Added..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/business_type_list";
			</script>
			<?php
		}else{
			?>
			<script>
				alert("Oops.. Something Went Wrong..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/business_type_list";
			</script>
			<?php
		}

	}

	public function delete_business_type($id)
	{
		$this->db->where('id',$id);
		if($this->db->delete('business_type'))
		{
			?>
			<script>
				alert("Business Type Successfully Deleted..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/business_type_list";
			</script>
			<?php
		}else{
			?>
			<script>
				alert("Oops.. Something Went Wrong..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/business_type_list";
			</script>
			<?php
		}
	}

	public function edit_business_type($id)
	{
		$data[] = array(); 
		$data['business_type_details'] = $this->mm->business_type_details($id);
		$this->load->view('header');
		$this->load->view('business_type/business_type_edit',$data);
		$this->load->view('footer');
	}

	public function business_type_edit_save()
	{
		$id = $this->input->post('id');
		$business_type = $this->input->post('business_type');
		$status = $this->input->post('status');
		
		$data = array('business_type'=>$business_type, 'business_type_status'=>$status);

		$this->db->where('id',$id);
		if($this->db->update('business_type',$data))
		{
			?>
			<script>
				alert("Business Type Successfully Updated..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/business_type_list";
			</script>
			<?php
		}else{
			?>
			<script>
				alert("Oops.. Something Went Wrong..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/business_type_list";
			</script>
			<?php
		}

	}

	// PRIVACY POLICY START
	
	public function privacy_policy()
	{
		$data[] = array();
		$data['privacy_policy_details'] = $this->mm->privacy_policy_fetch();
		$this->load->view('header');
		$this->load->view('privacy_policy',$data);
		$this->load->view('footer');
	}

	public function privacy_policy_update()
	{
		$id = $this->input->post('id');
		$privacy_policy_content = $this->input->post('privacy_policy_content');

		$data = array('privacy_policy_content'=>$privacy_policy_content);

		$this->db->where('id',$id);
		if($this->db->update('privacy_policy',$data))
		{
			?>
			<script>
				alert("Privacy Policy Successfully Updated..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/privacy_policy";
			</script>
			<?php
		}else{
			?>
			<script>
				alert("Oops.. Something Went Wrong..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/privacy_policy";
			</script>
			<?php
		}

	}

	// TERMS AND CONDITION START

	public function terms_condition()
	{
		$data[] = array();
		$data['terms_condition_details'] = $this->mm->terms_condition_fetch();
		$this->load->view('header');
		$this->load->view('terms_condition',$data);
		$this->load->view('footer');
	}

	public function terms_condition_update()
	{
		$id = $this->input->post('id');
		$terms_condition_content = $this->input->post('terms_condition_content');

		$data = array('terms_condition_content'=>$terms_condition_content);

		$this->db->where('id',$id);
		if($this->db->update('terms_condition',$data))
		{
			?>
			<script>
				alert("Terms & Condition Successfully Updated..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/terms_condition";
			</script>
			<?php
		}else{
			?>
			<script>
				alert("Oops.. Something Went Wrong..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/terms_condition";
			</script>
			<?php
		}

	}

	// BANNER SECTION START

	public function banner_list()
	{
		$data[] = array();
		$data['banner'] = $this->mm->banner_fetch();
		$this->load->view('header');
		$this->load->view('banner/banner_list',$data);
		$this->load->view('footer');
	}
	public function banner_add()
	{
		$this->load->view('header');
		$this->load->view('banner/banner_add');
		$this->load->view('footer');
	}

	public function banner_save()
	{
		$display_order = $this->input->post('display_order');
		$status = $this->input->post('status');

		$config['upload_path']          = './assets/img/banner/';
		$config['allowed_types']        = '*';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('banner_image')) {
			$error = array('error' => $this->upload->display_errors());
		} else {
			$data = $this->upload->data();
			$banner_image =  $data['file_name'];
		}


		$data = array('display_order'=>$display_order, 'banner_image'=>$banner_image, 'status'=>$status);

		if($this->mm->banner_save_model($data))
		{
			?>
			<script>
				alert("banner Successfully Added..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/banner_list";
			</script>
			<?php
		}else{
			?>
			<script>
				alert("Oops.. Something Went Wrong..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/banner_list";
			</script>
			<?php
		}

	}

	public function delete_banner($id)
	{
		$this->db->where('id',$id);
		if($this->db->delete('banner'))
		{
			?>
			<script>
				alert("Banner Successfully Deleted..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/banner_list";
			</script>
			<?php
		}else{
			?>
			<script>
				alert("Oops.. Something Went Wrong..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/banner_list";
			</script>
			<?php
		}
	}

	public function edit_banner($id)
	{
		$data[] = array(); 
		$data['banner_details'] = $this->mm->banner_details($id);
		$this->load->view('header');
		$this->load->view('banner/banner_edit',$data);
		$this->load->view('footer');
	}

	public function banner_edit_save()
	{
		$id = $this->input->post('id');
		$display_order = $this->input->post('display_order');
		$status = $this->input->post('status');
		$old_image = $this->input->post('old_image');

		$config['upload_path']          = './assets/img/banner/';
		$config['allowed_types']        = '*';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('banner_image')) {
			$error = array('error' => $this->upload->display_errors());
		} else {
			$data = $this->upload->data();
			$banner_image =  $data['file_name'];
		}

		if (!empty($banner_image)) {
			$banner_image = $banner_image;
		} else {
			$banner_image = $old_image;
		}


		$data = array('display_order'=>$display_order, 'banner_image'=>$banner_image, 'status'=>$status);

		$this->db->where('id',$id);
		if($this->db->update('banner',$data))
		{
			?>
			<script>
				alert("Banner Successfully Updated..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/banner_list";
			</script>
			<?php
		}else{
			?>
			<script>
				alert("Oops.. Something Went Wrong..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/banner_list";
			</script>
			<?php
		}

	}


	// CUSTOMER SECTION START

	public function customer_list()
	{
		$data[] = array();
		$data['customer'] = $this->mm->customer_fetch();
		$this->load->view('header');
		$this->load->view('customer/customer_list',$data);
		$this->load->view('footer');
	}

	public function delete_customer($id)
	{
		$this->db->where('id',$id);
		if($this->db->delete('customer'))
		{
			?>
			<script>
				alert("Customer Successfully Deleted..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/customer_list";
			</script>
			<?php
		}else{
			?>
			<script>
				alert("Oops.. Something Went Wrong..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/customer_list";
			</script>
			<?php
		}
	}

	public function edit_customer($id)
	{
		$data[] = array(); 
		$data['customer_details'] = $this->mm->customer_details($id);
		$this->load->view('header');
		$this->load->view('customer/customer_edit',$data);
		$this->load->view('footer');
	}

	public function customer_edit_save()
	{
		$id = $this->input->post('id');
		$status = $this->input->post('status');
		

		$data = array('status'=>$status);

		$this->db->where('id',$id);
		if($this->db->update('customer',$data))
		{
			?>
			<script>
				alert("Customer Successfully Updated..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/customer_list";
			</script>
			<?php
		}else{
			?>
			<script>
				alert("Oops.. Something Went Wrong..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/customer_list";
			</script>
			<?php
		}

	}

	// POST REQUIREMENT SECTION START

	public function post_requirement_list()
	{
		$data[] = array();
		$data['post_requirement'] = $this->mm->post_requirement_fetch();
		$this->load->view('header');
		$this->load->view('post_requirement/post_requirement_list',$data);
		$this->load->view('footer');
	}

	public function delete_post_requirement($id)
	{
		$this->db->where('id',$id);
		if($this->db->delete('post_requirement'))
		{
			?>
			<script>
				alert("Post Requirement Successfully Deleted..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/post_requirement_list";
			</script>
			<?php
		}else{
			?>
			<script>
				alert("Oops.. Something Went Wrong..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/post_requirement_list";
			</script>
			<?php
		}
	}

	public function edit_post_requirement($id)
	{
		$data[] = array(); 
		$data['post_requirement_details'] = $this->mm->post_requirement_details($id);
		$this->load->view('header');
		$this->load->view('post_requirement/post_requirement_edit',$data);
		$this->load->view('footer');
	}

	public function post_requirement_res_save()
	{
		$id = $this->input->post('id');
		$admin_response = $this->input->post('admin_response');
		$old_image = $this->input->post('old_image');
		
		$config['upload_path']          = './assets/img/post_requirement/';
		$config['allowed_types']        = '*';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('image')) {
			$error = array('error' => $this->upload->display_errors());
		} else {
			$data = $this->upload->data();
			$image =  $data['file_name'];
		}

		if(empty($image))
		{
			$image = $old_image;
		}else{
			$image = $image;
		}


		$data = array('admin_response'=>$admin_response, 'attachment'=>$image);

		$this->db->where('id',$id);
		if($this->db->update('post_requirement',$data))
		{
			?>
			<script>
				alert("post_requirement Successfully Updated..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/post_requirement_list";
			</script>
			<?php
		}else{
			?>
			<script>
				alert("Oops.. Something Went Wrong..");
				window.location.href="<?php echo base_url(); ?>index.php/Menus/post_requirement_list";
			</script>
			<?php
		}

	}

	// ALL SUPPLIER SECTION START

	public function all_supplier_list()
	{
		$data[] = array();
		$data['all_supplier'] = $this->mm->all_supplier_fetch();
		$this->load->view('header');
		$this->load->view('supplier/all_supplier_list',$data);
		$this->load->view('footer');
	}

	public function pending_supplier_list()
	{
		$data[] = array();
		$data['pending_supplier'] = $this->mm->pending_supplier_fetch();
		$this->load->view('header');
		$this->load->view('supplier/pending_supplier_list',$data);
		$this->load->view('footer');
	}
	public function approved_supplier_list()
	{
		$data[] = array();
		$data['approved_supplier'] = $this->mm->approved_supplier_fetch();
		$this->load->view('header');
		$this->load->view('supplier/approved_supplier_list',$data);
		$this->load->view('footer');
	}
	public function rejected_supplier_list()
	{
		$data[] = array();
		$data['rejected_supplier'] = $this->mm->rejected_supplier_fetch();
		$this->load->view('header');
		$this->load->view('supplier/rejected_supplier_list',$data);
		$this->load->view('footer');
	}

	public function edit_supplier($id)
	{
		$data[] = array(); 
		$data['supplier_details'] = $this->mm->supplier_details($id);
		$this->load->view('header');
		$this->load->view('supplier/supplier_edit',$data);
		$this->load->view('footer');
	}

	public function supplier_details_edit_save()
	{
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$mobile_no = $this->input->post('mobile_no');
		$email = $this->input->post('email');
		$ceo_name = $this->input->post('ceo_name');
		$website_link = $this->input->post('website_link');
		$annual_turnover = $this->input->post('annual_turnover');
		$business_type = $this->input->post('business_type');
		$ownership_type = $this->input->post('ownership_type');
		$company_address = $this->input->post('company_address');
		$company_locality = $this->input->post('company_locality');
		$company_landmark = $this->input->post('company_landmark');
		$company_state = $this->input->post('company_state');
		$company_pincode = $this->input->post('company_pincode');
		$company_whatsapp = $this->input->post('company_whatsapp');
		$company_email = $this->input->post('company_email');
		$gst_number = $this->input->post('gst_number');
		$cin_llpin = $this->input->post('cin_llpin');
		$tan = $this->input->post('tan');
		$company_pan = $this->input->post('company_pan');
		$dgft_iecode = $this->input->post('dgft_iecode');
		$trade_capacity = $this->input->post('trade_capacity');
		$production_capacity = $this->input->post('production_capacity');
		
		$data = array('username'=>$username, 'mobile_no'=>$mobile_no,'email'=>$email, 'ceo_name'=>$ceo_name,'website_link'=>$website_link, 'annual_turnover'=>$annual_turnover, 'business_type'=>$business_type, 'ownership_type'=>$ownership_type, 'company_address'=>$company_address, 'company_locality'=>$company_locality, 'company_landmark'=>$company_landmark, 'company_state'=>$company_state, 'company_pincode'=>$company_pincode, 'company_whatsapp'=>$company_whatsapp, 'company_email'=>$company_email, 'gst_number'=>$gst_number, 'cin_llpin'=>$cin_llpin, 'tan'=>$tan, 'company_pan'=>$company_pan, 'dgft_iecode'=>$dgft_iecode, 'trade_capacity'=>$trade_capacity, 'production_capacity'=>$production_capacity);

		$this->db->where('id',$id);
		if($this->db->update('supplier',$data))
		{
			?>
			<script>
				alert("Supplier Successfully Updated..");
				window.history.go(-2);
			</script>
			<?php
		}else{
			?>
			<script>
				alert("Oops.. Something Went Wrong..");
				window.history.go(-2);
			</script>
			<?php
		}
	}

	public function delete_supplier($id)
	{
		$this->db->where('id',$id);
		if($this->db->delete('supplier'))
		{
			?>
			<script>
				alert("Supplier Successfully Deleted..");
				window.history.go(-1);
			</script>
			<?php
		}else{
			?>
			<script>
				alert("Oops.. Something Went Wrong..");
				window.history.go(-1);
			</script>
			<?php
		}
	}


}
