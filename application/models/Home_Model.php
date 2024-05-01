<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Model extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    public function getProducts(){
        // return $this->db->get('mst_products')->result_array();
        // $this->db->where(array('mp_status'=> 0));
        // $this->db->order_by('mp_name', 'ASC');
        // return $this->db->get('mst_products')->result_array();
        $sql = "SELECT * FROM mst_products,mst_products_category,map_products_table WHERE mst_products.mp_id = map_products_table.ppt_mp_id AND mst_products_category.mpc_id = map_products_table.ppt_mpc_id";

        return $this->db->query($sql)->result_array();
    }
    
    public function getProductsCategory(){
        return $this->db->get('mst_products_category')->result_array();
    }

    public function getVegProducts(){
        $sql = "SELECT * FROM mst_products,mst_products_category,map_products_table WHERE mst_products.mp_id = map_products_table.ppt_mp_id AND mst_products_category.mpc_id = map_products_table.ppt_mpc_id AND mst_products_category.mpc_name ='Vegetables'";

            return $this->db->query($sql)->result_array();
    }
// ========Model function for Ajax call=======//

    public function getProductsbyCategoryname($cat){
        if($cat == 'all'){
            // return $this->db->get('mst_products')->result_array();
            $sql = "SELECT * FROM mst_products,mst_products_category,map_products_table WHERE mst_products.mp_id = map_products_table.ppt_mp_id AND mst_products_category.mpc_id = map_products_table.ppt_mpc_id";

            return $this->db->query($sql)->result_array();
        }else{
            $sql = "SELECT * FROM mst_products,mst_products_category,map_products_table WHERE mst_products.mp_id = map_products_table.ppt_mp_id AND mst_products_category.mpc_id = map_products_table.ppt_mpc_id AND mst_products_category.mpc_name ='{$cat}'";

            return $this->db->query($sql)->result_array();
        }
    }
}