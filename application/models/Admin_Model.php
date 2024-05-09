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

    public function get_products(){
        $sql = 'SELECT mst_products.*,mst_products_category.* FROM mst_products,mst_products_category,map_products_table WHERE mst_products.mp_id =map_products_table.ppt_mp_id AND mst_products_category.mpc_id = map_products_table.ppt_mpc_id ORDER BY mst_products_category.mpc_name ASC;';
        return $query = $this->db->query($sql)->result_array();
    }

    public function get_emp_data(){
        return $result = $this->db->get('mst_users')->result_array();
    }

    public function get_user_data(){
        return $result = $this->db->get('mst_bisuness_user')->result_array();
    }
}