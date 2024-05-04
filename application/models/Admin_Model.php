<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model {
    
    public function verifyUser($data){
        $query = $this->db->get_where('mst_users',$data)->result_array();
        // $query = $this->db->get('mst_users');
        if($query){
            return $query;
        }
    }
}