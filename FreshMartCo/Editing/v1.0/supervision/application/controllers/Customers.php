<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller 
{	
	public function __construct()
        {
            parent::__construct();
			$this->load->model('back_end/Customers_db','cust');
        }
		
        public function index()
        {
            if($this->session->userdata('admin_login'))
            {
                $data['active_menu']="customers";
				$data['cusomers']=$this->cust->get_all_customers();
                $this->load->view('admin/back_end/customers/index',$data);
            }
            else
            {
                redirect('home/index');
            }
        }

        public function new_customer()
        {
            if($this->session->userdata('admin_login'))
            {
                $data['active_menu']="customers"; 
                $this->load->view('admin/back_end/customers/new_customer',$data);
            }
            else
            {
                redirect('home/index');
            }
        }

		
	
        public function save_customer()
        {
            if($this->session->userdata('admin_login'))
            {

                $this->cust->save_customer();
                redirect('customers/'); 
               
            }
            else
            {
                redirect('home/index');
            }
        }
	
	    function edit_customers()
		{

			 if($this->session->userdata('admin_login'))
			{ 
				$data['active_menu']="customers"; 
				$data['customers']=$this->cust->edit_customers(); 
				$this->load->view('admin/back_end/customers/edit_customer',$data);
			}
			else
			{
				redirect('manage-ad/home/index');
			} 
		}
     

    function update_customer()
    {
        if($this->session->userdata('admin_login'))
        { 
            $this->cust->update_customer();
            redirect('customers');  
        }
        else
        {
            redirect('home/index');
        }
    }

    function delete_customer()
    {
        $this->cust->delete_customer();
    }
	
	
  function view_customer_details()
    {
       
		if($this->session->userdata('admin_login'))
		{			
			 $data=$this->cust->view_customer_details();
		  
		    
			$i=1;   
                                     
			foreach($data as $row)
			 {    
			 
				if($row['image_path'] !="")
				{
					$profile_pic=base_url().$row['image_path'];
				}
				else
				{
					$profile_pic=base_url()."uploads/cust_profile/no-photo.png";
				}
				 
				 echo '
					 <div class="modal-header bg-primary">
						 <h6 class="modal-title">Customer Details</h6>                     
						 <button type="button" class="close" data-dismiss="modal">&times;</button>
					 </div>
					 <div class="modal-body">
						 
						 <div class="row">
							 <div class="col-md-4 col-sm-4">							 
								 <p><b>Name :</b> <span>'.$row['name'].'</span></p>
								 <p><b>Email :</b> <span>'.$row['email'].'</span></p>		
								 <p><b>Phone :</b> <span>'.$row['phone'].'</span></p>    
								  <p><b>Address :</b> <span>'.$row['address'].'</span></p>    	
								
							 </div>    
							<div class="col-md-4 col-sm-4">	
								<p><b>City :</b> <span>'.$row['city'].'</span></p>									 
								<p><b>State :</b> <span>'.$row['state'].'</span></p>									 
								 <p><b>Zip :</b> <span>'.$row['zip'].'</span></p>
								 <p><b>Company Name :</b> <span>'.$row['company_name'].'</span></p>								
							  </div> 
							  
							 <div class="col-md-4 col-sm-4">	
									<img src="'.$profile_pic.'" width="50%" height="100%" style="object-fit: contain;" />
							
							 </div>							 				
						 </div>
						 <hr/>
						  
					 <div class="modal-footer">
						 <button type="button" class="btn bg-primary" data-dismiss="modal">Close</button>
					 </div>';
				
				 $i++;
			 }  
		}
		else
		{
			redirect('home/index');
		}
    }


	function logout()
	{
		$this->session->unset_userdata('admin_login');
		redirect('manage-ad/home/index');
	}
}
