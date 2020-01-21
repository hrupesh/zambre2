<?php
class Product extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }

    function get_products(){
        $query="select * from products";
	    $products = $this->db->query($query);
        return array("products"=>$products);
    }
}
?>