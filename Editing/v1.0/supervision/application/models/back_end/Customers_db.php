<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Customers_db extends CI_Model {  
  
    function __construct()  
    {
        parent::__construct();
		$this->load->database();
		$this->load->library("session");
    }

    function get_location_master()
    {
        $this->db->select('AM.*');
        $this->db->from('area_master AM'); 
        $this->db->where('AM.status',ACTIVE);  
        $query=$this->db->get();
        $q=$query->result_array(); 
        // debug($q);exit; 
        return $q; 
    }

    function get_customer_type_channel_master()
    {
        $this->db->select('CC.*');
        $this->db->from('customer_channel CC'); 
        $this->db->where('CC.status',ACTIVE);  
        $query=$this->db->get();
        $q=$query->result_array(); 
        // debug($q);exit; 
        return $q; 
    }



    function get_all_customers()
    {
        $this->db->select('UD.*,AM.area_name,CT.channel_type');
		$this->db->from('user_details UD');	
		$this->db->join('area_master AM','UD.area_id=AM.area_id','left'); 
		$this->db->join('customer_channel CT','UD.channel_id=CT.channel_id','left'); 
		$query=$this->db->get();
        $q=$query->result_array();	 
        // debug( $q);exit;      
		return $q;
    }
     
    function save_customer()
    {
    	 $data=$this->input->post();
    	 $data['ref_no']='FMC-'.date('ymd').'-'.rand(1,99999);
    	 $data['user_type']='CUSTOMER';

    	 if($data['password'] !=''){
    		$data['enc_pass']=md5($data['password']);
    		unset($data['password']);
    	 }      
		 
		 if ($_FILES['gstn_document']['size'] >0)
         {
			$rand_no=date("is");
			$new_name4 = $rand_no.rand(10,99).str_replace(" ","_",($_FILES["gstn_document"]['name']));
            $config4['upload_path'] = 'uploads/cust_profile/';
            $config4['allowed_types'] = 'jpg|png|jpeg';  
			$config4['file_name'] = $new_name4;	
			$this->load->library('upload',$config4);
			$this->upload->initialize($config4);		 
            if($this->upload->do_upload('gstn_document')) {
				$data['gstn_document']="uploads/cust_profile/".$new_name4;
			}else {
				echo $this->upload->display_errors();
			}
		 }
		 if ($_FILES['kyc_document']['size'] >0)
         {
			$rand_no=date("is");
			$new_name4 = $rand_no.rand(10,99).str_replace(" ","_",($_FILES["kyc_document"]['name']));
            $config4['upload_path'] = 'uploads/cust_profile/';
            $config4['allowed_types'] = 'jpg|png|jpeg';  
			$config4['file_name'] = $new_name4;	
			$this->load->library('upload',$config4);
			$this->upload->initialize($config4);		 
            if($this->upload->do_upload('kyc_document')) {
				$data['kyc_document']="uploads/cust_profile/".$new_name4;
			}else {
				echo $this->upload->display_errors();
			}
		 }
		 $data['created_by']=$this->session->userdata(USER_TYPE.'_id');
		 $data['created_date_time']=date('Y-m-d H:i:s'); 
		$this->db->insert("user_details",$data); 
    }

     
    
     
    
 //    function edit_customers()
 //    {
 //        $id=$this->uri->segment(3); 
 //        $this->db->select('*');
 //        $this->db->from('customers');
 //        $this->db->where('id',$id);		 
	// 	$query=$this->db->get();
 //        $q=$query->result_array();	       
	// 	return $q;
 //    }


 //    function update_customer()
 //    { 
	//     $id=$this->uri->segment(3); 
	 
	// 	$name=$this->input->post('name'); 
 //        $email=$this->input->post('email');
 //        $phone=$this->input->post('phone');
 //        $address=$this->input->post('address');
	// 	$city=$this->input->post('city');
 //        $state=$this->input->post('state');
	// 	$zip=$this->input->post('zip');
	// 	$company_name=$this->input->post('company_name');
		
	// 	 $created_by=$this->session->userdata('admin_id');
 //         $created_date=date('Y-m-d');
		 
		 
	// 	$photo="";
	// 	if (!empty($_FILES['photo']['name']))
 //        {
	// 		$rand_no=date("is");
	// 		$new_name4 = $rand_no.rand(10,99).str_replace(" ","_",($_FILES["photo"]['name']));
 //            $config4['upload_path'] = 'uploads/cust_profile/';
 //            $config4['allowed_types'] = 'gif|jpg|png|jpeg|pdf|doc';  
	// 		$config4['file_name'] = $new_name4;	
	// 		$this->load->library('upload',$config4);
	// 		$this->upload->initialize($config4);
 //            if($this->upload->do_upload('photo'))
 //            {
	// 			$photo="uploads/cust_profile/".$new_name4;
 //            }
             
	// 		 $data=array("name"=>$name,"email"=> $email,"phone"=>$phone,"address"=>$address,"city"=>$city,"state"=>$state,"zip"=>$zip,"company_name"=>$company_name,"image_path"=>$photo,"created_by"=>$created_by,"created_date"=>$created_date);
 //        }
 //        else
 //        {
 //             $data=array("name"=>$name,"email"=> $email,"phone"=>$phone,"address"=>$address,"city"=>$city,"state"=>$state,"zip"=>$zip,"company_name"=>$company_name,"created_by"=>$created_by,"created_date"=>$created_date);
 //        } 
		
 //        $this->db->where('id',$id);
	// 	$this->db->update("customers",$data);
 //    }

 //    function delete_customer()
	// {		 	

 //         $id=$this->input->post('id');			
	// 	 $this->db->where('id',$id);
	// 	 $this->db->delete('customers');
     
 //    } 
	
	// function view_customer_details()
	// {		 	
	// 	$id=$this->input->post('id');	
 //        $this->db->select('*');
	// 	$this->db->from('customers');	
	// 	$this->db->where('id',$id); 
	// 	$query=$this->db->get();
 //        $q=$query->result_array();	       
	// 	return $q; 
     
 //    }
}  
?>