<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Category_db extends CI_Model 
{  
    function __construct()  
    {
        parent::__construct();
        $this->load->database();
        $this->load->library("session");
    }
    
    function save_category()
    {
        $category_name=trim($this->input->post('category_name'));
        $data=array("category_name"=>$category_name);
        $this->db->insert("category_manager",$data);     
    }
    function get_catagories()
    {
        $this->db->select('*');
        $this->db->from('category_manager'); 
        $query=$this->db->get();
        $q=$query->result_array();  
        return $q;

    }

    function update_category()
    {  
        $category_name=$this->input->post('category_name'); 
        $category_id=$this->input->post('category_id');    
        $data=array("category_name"=>$category_name);       
        $this->db->where('category_id',$category_id);
        $this->db->update("category_manager",$data);
    }

    function change_categoryStatus()
    {     
        $category_id=$_POST['category_id'];   
        $status=$_POST['value'];
        $data=array("status"=>$status); 
        $this->db->where('category_id',$category_id);
        $this->db->update('category_manager',$data);
    }




}  
?>