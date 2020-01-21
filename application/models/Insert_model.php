<?php
class insert_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    function form_insert($name,$email,$mobile,$product,$message){
        
        
        $query="insert into queries values('','$name','$email','$mobile','$product','$message')";
        $this->db->query($query);
        
    }
}
?>