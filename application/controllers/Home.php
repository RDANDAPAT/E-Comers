<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('Home_Model');
		$this->load->model('Users_Model');
    }
// 	Home page functions 
	public function index()
	{
		$data['products'] = $this->Home_Model->getProducts();
		$data['category'] = $this->Home_Model->getProductsCategory();
		$data['veg'] = $this->Home_Model->getVegProducts();
		$this->load->view('home/home_view',$data);
	}

	public function prductByCategory(){
		if($this->input->post('category')){
			$cat = $this->input->post('category');
			$result = $this->Home_Model->getProductsbyCategoryname($cat);
			echo json_encode($result);
		}
	}

	public function shop()
	{
		$this->load->view('shop_view');
	}

	public function shop_details()
	{
		$this->load->view('shop_details_view');
	}

	public function testimonial()
	{
		$this->load->view('testimonial_view');
	}
	
	public function contact()
	{
		$this->load->view('contact_view');
	}

    
}