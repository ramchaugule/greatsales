<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Menus extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("Settings_model");
		$this->load->model("Category_model");
	}

	
	public function my_account()
	{
		$data['categories'] = $this->Category_model->getCategories();
		$this->load->view('my_account.php',$data);
	}

	public function about_us()
	{
		$data['categories'] = $this->Category_model->getCategories();
		$this->load->view('about_us.php',$data);
	}

	public function contact()
	{
		$data['categories'] = $this->Category_model->getCategories();
		$this->load->view('contact_us.php',$data);
	}

	public function my_favourite()
	{
		$data['categories'] = $this->Category_model->getCategories();
		$this->load->view('my_favourite.php',$data);
	}

	public function supplier()
	{
		$data['categories'] = $this->Category_model->getCategories();
		$this->load->view('vendordokan_store.php',$data);
	}

	public function becomesupplier()
	{
		$data['categories'] = $this->Category_model->getCategories();
		$this->load->view('become-a-supplier.php',$data);
	}

	public function FAQ()
	{
		$data['categories'] = $this->Category_model->getCategories();
		$this->load->view('faq.php',$data);
	}

	public function cart()
	{	
		$data['categories'] = $this->Category_model->getCategories();
		$this->load->view('cart.php',$data);
	}
	public function checkout()
	{
		$data['categories'] = $this->Category_model->getCategories();
		$this->load->view('checkout.php',$data);
	}

	public function Privacy_Policy()
	{
		$data = array();
		$data['categories'] = $this->Category_model->getCategories();
		$data['pp'] = $this->Settings_model->getcmspage('privacy_policy');
		
		$this->load->view('privacy_policy',$data);
	}

	public function term_conditions()
	{
		$data = array();
		$data['categories'] = $this->Category_model->getCategories();
		$data['tnc'] = $this->Settings_model->getcmspage('terms_condition');

		$this->load->view('term_conditions',$data);
	}

	public function product()
	{
		$data['categories'] = $this->Category_model->getCategories();
		$this->load->view('product',$data);
	}

	public function product_details()
	{
		$data['categories'] = $this->Category_model->getCategories();
		$this->load->view('product_detail',$data);
	}

	public function category()
	{
		$data['categories'] = $this->Category_model->getCategories();
		$this->load->view('category',$data);
	}

	
}
