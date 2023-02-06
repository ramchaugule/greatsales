<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("Category_model");
		$this->load->model("Settings_model");
		
		
		
	}

	public function index()
	{	
		
		$data = array();
		
		$data['categories'] = $this->Category_model->getCategories();
		$data['banner'] = $this->Settings_model->getbannerimg();
		
		
		$this->load->view('home',$data);
		
	}
	
}
