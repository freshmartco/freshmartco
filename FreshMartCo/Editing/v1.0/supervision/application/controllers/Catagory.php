<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*error_reporting(E_ALL);*/
class Catagory extends CI_Controller 
{	
	public function __construct()
    {
                parent::__construct();
					$this->load->helper('url');
	 				$this->load->model('back_end/Catagory_db','catagory');
					$this->load->library("pagination"); 

					$this->load->helper('custom/app');
    }
	public function index()
	{
		  
		if($this->session->userdata(USER_TYPE.'_login'))
		{
			$data['active_menu']="catagory";
			$data['catagories']=$this->catagory->get_catagories();
			$this->load->view('admin/back_end/catagory/index',$data);
		}
		else
		{
			redirect('home/index');
		}
	}
	public function save_catagory()
    {
        if($this->session->userdata('admin_login'))
        {

            $this->catagory->save_catagory();
            redirect('catagory/'); 
           
        }
        else
        {
            redirect('home/index');
        }
    }

    public function update_catagory()
    {
	    if($this->session->userdata('admin_login'))
	    { 
	        $this->catagory->update_catagory();
	        redirect('catagory');  
	    }
	    else
	    {
	        redirect('home/index');
	    }
    }
    public function change_catagoryStatus()
    {

       if($this->session->userdata(USER_TYPE.'_login'))
		{ 
			$this->catagory->change_catagoryStatus(); 
		}
		else
		{
			redirect('home/index');
		}

    }

        

	
	




	


	





	
}
