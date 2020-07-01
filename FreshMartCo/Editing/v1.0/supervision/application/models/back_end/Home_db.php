<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Home_db extends CI_Model {  
  
    function __construct()  
    {
        parent::__construct();
		$this->load->database();
		$this->load->library("session");
    }

	function check_login()
	{
		$user_type=$this->input->post('user_type');
		$user_name=$this->input->post('user_name');
		$password=$this->input->post('password');	 
		$en_psd=md5($password);
		 
		$this->db->where('email',$user_name);
		$this->db->where('enc_pass',$en_psd);
		$this->db->where('user_type',$user_type);
		$this->db->where('status',0); 
		$query=$this->db->get('muser_master');
		 
		$q=$query->result_array();
		 
		$otp=rand(100001,999999);
		$otp='123456';
		
		if($query->num_rows()==1)
		{
			$this->session->set_userdata(USER_TYPE.'_id',$q[0]['id']);	
			$this->session->set_userdata(USER_TYPE.'_email',$q[0]['email']);	
			
			$data=array('otp'=>$otp);		
			$this->db->where('id',$q[0]['id']);
			$this->db->update('muser_master',$data);

			return "success****".$otp;
			
		}
		else
		{
			return "false";
		}
	}


	function resend_otp()
	{
		 $otp=rand(100001,999999);
		 $otp='1234567';
		 $admin_id=$this->session->userdata(USER_TYPE.'_id');
		
		if($admin_id)
		{  
			$data=array('otp'=>$otp);		
			$this->db->where('id',$admin_id);
			$this->db->update('muser_master',$data);  
			return "success****".$otp;
		} 		 
	}
	 
	 function check_otp()
	{
		$user_id=$this->session->userdata(USER_TYPE.'_id');
		
		$this->db->where('id',$user_id);
		$query=$this->db->get('muser_master');
		$q=$query->result_array();
		$otp=$q[0]['otp'];
		
		$user_otp=$this->input->post('otp_sms');
		
		$change_otp=rand(111,9999);
		
		if($otp==$user_otp)
		{	
			 $date_time=date('Y-m-d H:i:s');
			 $data=array('otp'=>$change_otp);
						
			$this->db->where('id',$q[0]['id']);
			$this->db->update('muser_master',$data);
			 	
			$this->session->set_userdata(USER_TYPE.'_login','true');
			$this->session->set_userdata(USER_TYPE.'_name',$q[0]['username']);	
			$this->session->set_userdata(USER_TYPE.'_type',$q[0]['user_type']);	
			 
			return "success";
		}
		else
		{
			return "false";
		}
	}

  
	
	 

}  
?>