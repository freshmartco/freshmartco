<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Catagory_db extends CI_Model 
{  
    function __construct()  
    {
        parent::__construct();
        $this->load->database();
        $this->load->library("session");
    }
    
    function save_catagory()
    {
        $catagory_name=trim($this->input->post('catagory_name'));
        $data=array("catagory_name"=>$catagory_name);
        $this->db->insert("catagory_manager",$data);     
    }
    function get_catagories()
    {
        $this->db->select('*');
        $this->db->from('catagory_manager'); 
        $query=$this->db->get();
        $q=$query->result_array();  
        return $q;

    }

    function update_catagory()
    {  
        $catagory_name=$this->input->post('catagory_name'); 
        $catagory_id=$this->input->post('catagory_id');    
        $data=array("catagory_name"=>$catagory_name);       
        $this->db->where('catagory_id',$catagory_id);
        $this->db->update("catagory_manager",$data);
    }

    function change_catagoryStatus()
    {     
        $catagory_id=$_POST['catagory_id'];   
        $status=$_POST['value'];
        $data=array("status"=>$status); 
        $this->db->where('catagory_id',$catagory_id);
        $this->db->update('catagory_manager',$data);
    }




}  
?>