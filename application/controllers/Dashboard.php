<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
        parent::__construct();
		// $this->load->model('Home_Model');
		// $this->load->model('Users_Model');
		$this->load->model('Admin_Model');
    }

    // for products section 

    public function ad_products(){
        $result=$this->Admin_Model->get_products();
        echo json_encode($result);
    }

    // for employee section

    public function employee_details(){
        $result = $this->Admin_Model->get_emp_data();
        echo json_encode($result);
    }

    // for business user section

    public function business_user_details(){
        $result = $this->Admin_Model->get_user_data();
        echo json_encode($result);
    }
}