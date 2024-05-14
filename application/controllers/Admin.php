<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('Admin_Model');
    }
// 	Admin page functions 
	public function index()
	{
        $this->form_validation->set_rules('email','UserName','required');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run()){
            $data = array(
                'mu_mail' => $this->input->post('email'),
                'mu_password' => $this->input->post('password')
            );
            $result = $this->Admin_Model->verifyUser($data);
            if($result){
                // $this->session->set_userdata('username',$result->mu_name);
                // $this->session->set_userdata('usermail',$result->mu_mail);
                redirect('dashboard');
            }else{
                redirect('admin');
            }
        }else{
            $this->load->view('Admin/login_view');
        }
    }

    public function dashboard(){
        $data['product_category']=$this->Admin_Model->get_products_category();
        $this->load->view('Admin/admin_view',$data);
    }

    public function productManage(){
        $this->load->view('Admin/ad_products_view');
    }
    
}