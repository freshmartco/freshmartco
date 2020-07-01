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
		$data['created_by']=$this->session->userdata('admin_id');
		$data['date_time ']=date("Y-m-d H:i:s");
		unset($data['password']);
		unset($data['confirm_password']); 	 
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


	function get_user_master_details($id)
	{ 
		$this->db->select('a.*');
		$this->db->from('user_details a');		
		$this->db->where('a.id',$id);
		$query=$this->db->get();
		$q=$query->result_array();	
		return $q;
	}
	
	
	function get_user_ip_addresses($id)
	{
		$this->db->select('a.*');
		$this->db->from('ip_config a');		
		$this->db->where('a.comp_user_id',$id);
		$query=$this->db->get();
		$q=$query->result_array();	
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

	function update_user_details()
	{	
		$id=$this->uri->segment(4);
		$cmp_name=$this->input->post('cmp_name');
		$ip_address=$this->input->post('ip_address');
		$from_date=$this->input->post('from_date');
		$to_date=$this->input->post('to_date');
		$normal_psd=$this->input->post('password');
		$password=md5($normal_psd);
		$phone=$this->input->post('phone');
		$email=$this->input->post('email');
		$person=$this->input->post('person');
		$status=$this->input->post('status');
		
		$db_fdate=date("Y-m-d",strtotime($from_date));
		$db_tdate=date("Y-m-d",strtotime($to_date));
		$db_date=date("Y-m-d H:i:s");
		
		$adm_id=$this->session->userdata('admin_id');		
		$data=array("company_name"=>$cmp_name,"from_date"=>$db_fdate,"to_date"=>$db_tdate,"normal_psd"=>$normal_psd,"password"=>$password,"email"=>$email,"phone"=>$phone,"contact_person"=>$person,"status"=>$status,"added_date"=>$db_date,"added_by"=>$adm_id);
	
		$this->db->where('id',$id);
		$q=$this->db->update("user_details",$data);	
		
		if($q)
		{
			
			$this->db->select('a.*');
			$this->db->from('user_details a');		
			$this->db->where('a.id',$id);
			$query2=$this->db->get();
			$q2=$query2->result_array();	
		 
			if($q2)
			{
				
					
					for($i=0;$i<count($ip_address);$i++)
					{
					   $db_date=date("Y-m-d H:i:s");
					   $ip=$ip_address[$i];
						if($ip !="")
						{
						   $data1=array("comp_user_id"=>$id,"comp_code"=>$q2[0]['comp_code'],"ip_address"=>$ip);
						   $this->db->insert("ip_config",$data1);
						}
					 
				}
			}			   
		}
	}
 
	function delete_ip_address()
	{
		    $id=$this->input->post('id');	 
			$this->db->where('id',$id);
			$this->db->delete('ip_config');
	}
}  
?>