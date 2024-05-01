<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('Home_Model');
		$this->load->model('Users_Model');
		$this->load->model('Admin_Model');
    }
// 	Home page functions 
	public function index()
	{
        $this->load->view('admin/login_view');
    }
}