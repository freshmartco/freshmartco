<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_management extends CI_Controller 
{
		public function __construct()
        {
                parent::__construct();
					$this->load->helper('url');
					$this->load->model('back_end/User_db','user');
					$this->load->library("pagination"); 

					$this->load->helper('custom/app');
        }
	public function index()
	{
		  
		if($this->session->userdata(USER_TYPE.'_login'))
		{
			$data['active_menu']="user";
			$data['user_master']=$this->user->get_all_user_master();
			$this->load->view('admin/back_end/user_management/index',$data);
		}
		else
		{
			redirect('home/index');
		}
	}


    function new_user()
	{
		if($this->session->userdata(USER_TYPE.'_login'))
		{
			$data['active_menu']="user";
			$data['user_type']=$this->user->get_user_type_master();	 
			$this->load->view('admin/back_end/user_management/new_user',$data);
		}
		else
		{
			redirect('home/index');
		}
	}
	 


	function save_user()
	{
		if($this->session->userdata(USER_TYPE.'_login'))
		{
			$data=$this->user->save_user();
			 redirect('user_management/');
		}
		else
		{
			redirect('home/index');
		}
	}
	

    function change_status()
	{	
		if($this->session->userdata(USER_TYPE.'_login'))
		{
			$data=$this->user->change_status();
		}
		else
		{
			redirect('home/index');
		}
	}

	function edit_user($origin='')
	{ 
		if($this->session->userdata(USER_TYPE.'_login'))
		{
			$data['active_menu']="adms"; 
			$data['user_details']=$this->user->get_user_master_details($origin); 			
			$data['user_type']=$this->user->get_user_type_master();	 
			$this->load->view('admin/back_end/user_management/edit_user',$data);
		}
		else
		{
			redirect('home/');
		}
	}

	function view_user()
	{
		if($this->session->userdata(USER_TYPE.'_login'))
		{			
			$data=$this->user->view_user();
			$i=1;   
             if(!empty($data)) {                
			foreach($data as $row)
			 {    
				 if($row['status']== 0)
				 {
					 $status='<span class="badge bg-success">Active</span>';
				 }else
				 {
					$status='<span class="badge bg-danger">In-Active</span>';
				 }

				 echo '
					 <div class="modal-header bg-primary">
						 <h6 class="modal-title">USER DETAILS</h6>                     
						 <button type="button" class="close" data-dismiss="modal">&times;</button>
					 </div>
					 <div class="modal-body">
						 
						 <div class="row">
							 <div class="col-md-6 col-sm-6">							 
								 <p><b>User Name :</b> <span>'.$row['username'].'</span></p> 
								 <p><b>Email :</b> <span>'.$row['email'].'</span></p>
								 <p><b>Mobile No :</b> <span>'.$row['phone'].'</span></p> 
							 </div>                            
							 <div class="col-md-6 col-sm-6">	
							 <p><b>User Type :</b> <span>'.$row['user_type_label'].'</span></p>	  
							 <p><b>Status :</b> <span>'.$status.'</span></p>                                                     
							 </div>							 				
						 </div>		
					 </div>';
					  
					 

					echo ' <div class="modal-footer">
						 <button type="button" class="btn bg-primary" data-dismiss="modal">Close</button>
					 </div>';
				
				 $i++;
			 }  
			}
		}
		else
		{
			redirect('/home');
		}
	}

	function update_user_details($origin='')
	{	
		if($this->session->userdata(USER_TYPE.'_login'))
		{
			$data=$this->user->update_user_details($origin);			
			redirect('user_management');
		}
		else
		{
			redirect('home/index');
		}
    }
     
	 
	function logout()
	{
		$this->session->unset_userdata(USER_TYPE.'_login');
		redirect('home/index');
	}
}
