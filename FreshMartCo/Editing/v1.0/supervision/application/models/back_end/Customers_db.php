<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Customers_db extends CI_Model {  
  
    function __construct()  
    {
        parent::__construct();
		$this->load->database();
		$this->load->library("session");
    }

    function get_all_customers()
    {
        $this->db->select('*');
		$this->db->from('customers');	 
		$query=$this->db->get();
        $q=$query->result_array();	       
		return $q;
    }
     
    function save_customer()
    {
        $name=$this->input->post('name'); 
        $email=$this->input->post('email');
        $phone=$this->input->post('phone');
        $address=$this->input->post('address');
		$city=$this->input->post('city');
        $state=$this->input->post('state');
		$zip=$this->input->post('zip');
		$company_name=$this->input->post('company_name');
		
		 $created_by=$this->session->userdata('admin_id');
         $created_date=date('Y-m-d');		  
  
		$photo="";
		if (!empty($_FILES['photo']['name']))
        {
			$rand_no=date("is");
			$new_name4 = $rand_no.rand(10,99).str_replace(" ","_",($_FILES["photo"]['name']));
            $config4['upload_path'] = 'uploads/cust_profile/';
            $config4['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc';  
			$config4['file_name'] = $new_name4;	
			$this->load->library('upload',$config4);
			$this->upload->initialize($config4);
            if($this->upload->do_upload('photo'))
            {
				$photo="uploads/cust_profile/".$new_name4;
			}
		}
 
		$data=array("name"=>$name,"email"=> $email,"phone"=>$phone,"address"=>$address,"city"=>$city,"state"=>$state,"zip"=>$zip,"company_name"=>$company_name,"image_path"=>$photo,"created_by"=>$created_by,"created_date"=>$created_date);
		$this->db->insert("customers",$data);
    }

     
    
     
    
    function edit_customers()
    {
        $id=$this->uri->segment(3); 
        $this->db->select('*');
        $this->db->from('customers');
        $this->db->where('id',$id);		 
		$query=$this->db->get();
        $q=$query->result_array();	       
		return $q;
    }


    function update_customer()
    { 
	    $id=$this->uri->segment(3); 
	 
		$name=$this->input->post('name'); 
        $email=$this->input->post('email');
        $phone=$this->input->post('phone');
        $address=$this->input->post('address');
		$city=$this->input->post('city');
        $state=$this->input->post('state');
		$zip=$this->input->post('zip');
		$company_name=$this->input->post('company_name');
		
		 $created_by=$this->session->userdata('admin_id');
         $created_date=date('Y-m-d');
		 
		 
		$photo="";
		if (!empty($_FILES['photo']['name']))
        {
			$rand_no=date("is");
			$new_name4 = $rand_no.rand(10,99).str_replace(" ","_",($_FILES["photo"]['name']));
            $config4['upload_path'] = 'uploads/cust_profile/';
            $config4['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc';  
			$config4['file_name'] = $new_name4;	
			$this->load->library('upload',$config4);
			$this->upload->initialize($config4);
            if($this->upload->do_upload('photo'))
            {
				$photo="uploads/cust_profile/".$new_name4;
            }
             
			 $data=array("name"=>$name,"email"=> $email,"phone"=>$phone,"address"=>$address,"city"=>$city,"state"=>$state,"zip"=>$zip,"company_name"=>$company_name,"image_path"=>$photo,"created_by"=>$created_by,"created_date"=>$created_date);
        }
        else
        {
             $data=array("name"=>$name,"email"=> $email,"phone"=>$phone,"address"=>$address,"city"=>$city,"state"=>$state,"zip"=>$zip,"company_name"=>$company_name,"created_by"=>$created_by,"created_date"=>$created_date);
        } 
		
        $this->db->where('id',$id);
		$this->db->update("customers",$data);
    }

    function delete_customer()
	{		 	

         $id=$this->input->post('id');			
		 $this->db->where('id',$id);
		 $this->db->delete('customers');
     
    } 
	
	function view_customer_details()
	{		 	
		$id=$this->input->post('id');	
        $this->db->select('*');
		$this->db->from('customers');	
		$this->db->where('id',$id); 
		$query=$this->db->get();
        $q=$query->result_array();	       
		return $q; 
     
    }
}  
?>