<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class User_db extends CI_Model 
{  
    function __construct()  
    {
        parent::__construct();
		$this->load->database();
		$this->load->library("session");
    }
	
	function get_user_type_master()
	{  
		$this->db->select('*');
		$this->db->from('user_type');	
		$this->db->where('origin !=','0');
		$this->db->where('status','0');
		$query=$this->db->get();
		$q=$query->result_array(); 
		return $q;

	}

	function get_all_user_master()
	{
		$this->db->select('UD.*,UT.user_type as user_type_label');
		$this->db->from('user_details UD');	 
		$this->db->join('user_type UT','UD.user_type=UT.origin','left');	 
		$query=$this->db->get();
		$q=$query->result_array();  
		return $q; 
	}
	
	function save_user()
	{ 
		$data=$this->input->post(); 
		$data['enc_pass']=md5($data['confirm_password']);
		unset($data['password']);
		unset($data['confirm_password']); 
		$data['created_by']=$this->session->userdata('admin_id');
		$data['date_time ']=date("Y-m-d H:i:s");
			 
		$q=$this->db->insert("user_details",$data);
		 
	}


	function change_status()
	{	 
		$origin=$_POST['origin'];	
		$status=$_POST['value'];
		$data=array("status"=>$status);	
		$this->db->where('origin',$origin);
		$this->db->update('user_details',$data);
	}


	function get_user_master_details($origin)
	{ 
		$this->db->select('UD.*');
		$this->db->from('user_details UD');		
		$this->db->where('UD.origin',$origin);
		$query=$this->db->get();
		$q=$query->row_array();	
		return $q;
	}
	
	 
	function view_user()
	{ 
		$origin=$_POST['origin'];
		$this->db->select('UD.*,UT.user_type as user_type_label');
		$this->db->from('user_details UD');		
		$this->db->join('user_type UT','UD.user_type=UT.origin','left');
		$this->db->where('UD.origin',$origin);
		$query=$this->db->get();
		$q=$query->result_array();	
		return $q;  
		
	}

	function update_user_details($origin='')
	{	
		 $data=$this->input->post(); 
		 $data['enc_pass']=md5($data['confirm_password']);
		 unset($data['password']);
		 unset($data['confirm_password']); 
		 debug($data);		 
	
		 $this->db->where('origin',$origin);
		 $this->db->update("user_details",$data);		 
	}
 
	function delete_ip_address()
	{
		    $id=$this->input->post('id');	 
			$this->db->where('id',$id);
			$this->db->delete('ip_config');
	}
}  
?>