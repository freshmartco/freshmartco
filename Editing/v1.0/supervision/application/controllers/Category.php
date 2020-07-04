<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*error_reporting(E_ALL);*/
class Category extends CI_Controller 
{	
	public function __construct()
    {
                parent::__construct();
					$this->load->helper('url');
	 				$this->load->model('back_end/Category_db','category');
					$this->load->library("pagination"); 

					$this->load->helper('custom/app');
    }
	public function index()
	{
		  
		if($this->session->userdata(USER_TYPE.'_login'))
		{
			$data['active_menu']="category";
			$data['catagories']=$this->category->get_catagories();
			$this->load->view('admin/back_end/category/index',$data);
		}
		else
		{
			redirect('home/index');
		}
	}
	public function save_category()
    {
        if($this->session->userdata('admin_login'))
        {

            $this->category->save_category();
            redirect('category/'); 
           
        }
        else
        {
            redirect('home/index');
        }
    }

    public function update_category()
    {
	    if($this->session->userdata('admin_login'))
	    { 
	        $this->category->update_category();
	        redirect('category');  
	    }
	    else
	    {
	        redirect('home/index');
	    }
    }
    public function change_categoryStatus()
    {

       if($this->session->userdata(USER_TYPE.'_login'))
		{ 
			$this->category->change_categoryStatus(); 
		}
		else
		{
			redirect('home/index');
		}

    }

        

	
	




	


	





	
}
