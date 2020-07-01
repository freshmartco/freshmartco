<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*error_reporting(E_ALL);*/
class Country extends CI_Controller 
{	
	public function __construct()
    {
                parent::__construct();
					$this->load->helper('url');
	 				$this->load->model('back_end/Country_db','country');
					$this->load->library("pagination"); 

					$this->load->helper('custom/app');
    }
	public function index()
	{
		  
		if($this->session->userdata(USER_TYPE.'_login'))
		{
			$data['active_menu']="country";
			$data['country_master']=$this->country->get_country_master();
			$this->load->view('admin/back_end/country/index',$data);
		}
		else
		{
			redirect('home/index');
		}
	}
	public function city_index()
	{
		  
		if($this->session->userdata(USER_TYPE.'_login'))
		{
			$data['active_menu']="city";	
			$data['city_master']=$this->country->get_city_master();		
			$this->load->view('admin/back_end/country/city_index',$data);
		}
		else
		{
			redirect('home/index');
		}
	}
	public function state_index()
	{
		  
		if($this->session->userdata(USER_TYPE.'_login'))
		{
			$data['active_menu']="state";	
			$data['state_master']=$this->country->get_state_master();		
			$this->load->view('admin/back_end/country/state_index',$data);
		}
		else
		{
			redirect('home/index');
		}
	}
	public function area_index()
	{
		  
		if($this->session->userdata(USER_TYPE.'_login'))
		{
			$data['active_menu']="area";	
			$data['area_master']=$this->country->get_area_master();	
			$this->load->view('admin/back_end/country/area_index',$data);
		}
		else
		{
			redirect('home/index');
		}
	}
	
	
	public function add_country()
    {
            if($this->session->userdata(USER_TYPE.'_login'))
            {
                $data['active_menu']="country"; 
                $this->load->view('admin/back_end/country/add_country',$data);
            }
            else
            {
                redirect('home/index');
            }
    }
    public function save_country()
	{
		if($this->session->userdata(USER_TYPE.'_login'))
		{
			 $data=$this->country->save_country();
			 redirect('country/');
		}
		else
		{
			redirect('home/index');
		}
	}
	public function delete_country()
	{
		if($this->session->userdata(USER_TYPE.'_login'))
		{
			 $data=$this->country->delete_country();
			 redirect('country/');
		}
		else
		{
			redirect('home/index');
		}
	}
	public function add_city()
    {
        if($this->session->userdata(USER_TYPE.'_login'))
        {
            $data['active_menu']="city"; 
            $data['country_master']=$this->country->get_active_country_list();
            $data['state_master']=$this->country->get_state_master();
            $this->load->view('admin/back_end/country/add_city',$data);
        }
        else
        {
            redirect('home/index');
        }
    }

    public function get_stateList($country_id='')
    {
    	 if($this->session->userdata(USER_TYPE.'_login'))
        {  
            $stateList=$this->country->get_stateListForCountry($country_id);
            
        	$options=' <option value="">--Select State--</option>';
            if(!empty($stateList)){
             foreach ($stateList as $key => $value) {
                $options .='<option value="'.$value['state_id'].'">'.$value['state_name'].'</option>';
             }
             echo $options;
         }
        }
        else
        {
            redirect('home/index');
        }
    }

     public function get_cityList($state_id='')
    {
    	 if($this->session->userdata(USER_TYPE.'_login'))
        {  
            $cityList=$this->country->get_get_cityListForState($state_id);
            
        	$options=' <option value="">--Select City--</option>';
            if(!empty($cityList)){
             foreach ($cityList as $key => $value) {
                $options .='<option value="'.$value['city_id'].'">'.$value['city_name'].'</option>';
             }
             echo $options;
         }
        }
        else
        {
            redirect('home/index');
        }
    }

    public function save_city()
	{
		if($this->session->userdata(USER_TYPE.'_login'))
		{
			 $data=$this->country->save_city();
			 redirect('country/city_index');
		}
		else
		{
			redirect('home/index');
		}
	}
	public function delete_city()
	{
		if($this->session->userdata(USER_TYPE.'_login'))
		{
			 $data=$this->country->delete_city();
			 redirect('country/city_index');
		}
		else
		{
			redirect('home/index');
		}
	}

	public function add_state()
    {
        if($this->session->userdata(USER_TYPE.'_login'))
        {
            $data['active_menu']="state"; 
            $data['country_master']=$this->country->get_active_country_list();
            $this->load->view('admin/back_end/country/add_state',$data);
        }
        else
        {
            redirect('home/index');
        }
    }
    public function save_state()
	{
		if($this->session->userdata(USER_TYPE.'_login'))
		{
			 $data=$this->country->save_state();
			 redirect('country/state_index');
		}
		else
		{
			redirect('home/index');
		}
	}
	public function delete_state()
	{
		if($this->session->userdata(USER_TYPE.'_login'))
		{
			 $data=$this->country->delete_state();
			 redirect('country/state_index');
		}
		else
		{
			redirect('home/index');
		}
	}
	public function add_area()
    {
        if($this->session->userdata(USER_TYPE.'_login'))
        {
            $data['active_menu']="area"; 
            $data['country_master']=$this->country->get_active_country_list();
            $data['state_master']=$this->country->get_state_master();
            $data['city_master']=$this->country->get_city_master();
            $this->load->view('admin/back_end/country/add_area',$data);
        }
        else
        {
            redirect('home/index');
        }
    }
    public function save_area()
	{
		if($this->session->userdata(USER_TYPE.'_login'))
		{
			 $data=$this->country->save_area();
			 redirect('country/area_index');
		}
		else
		{
			redirect('home/index');
		}
	}
	public function delete_area()
	{
		if($this->session->userdata(USER_TYPE.'_login'))
		{
			 $data=$this->country->delete_area();
			 redirect('country/area_index');
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

	function change_countryStatus()
	{
		if($this->session->userdata(USER_TYPE.'_login'))
		{ 
			$this->country->change_countryStatus(); 
		}
		else
		{
			redirect('home/index');
		}
	}

	  
	function update_country()
	{
		if($this->session->userdata(USER_TYPE.'_login'))
		{ 
			$this->country->update_country(); 
		}
		else
		{
			redirect('home/index');
		}
	}

	function edit_state($state_id='')
	{
		if($this->session->userdata(USER_TYPE.'_login'))
		{ 
			 $data['active_menu']="state"; 
            $data['country_master']=$this->country->get_active_country_list();
			$data['stateDetails']=$this->country->getStateByState_id($state_id); 
			$this->load->view('admin/back_end/country/edit_state',$data);
		}
		else
		{
			redirect('home/index');
		}
	}

	function update_state($state_id='')
	{
		if($this->session->userdata(USER_TYPE.'_login'))
		{ 
			$data['active_menu']="state"; 
            $this->country->update_state($state_id);  
            redirect('country/state_index');
		}
		else
		{
			redirect('home/index');
		}
	}

	function change_stateStatus()
	{
		if($this->session->userdata(USER_TYPE.'_login'))
		{ 
			$this->country->change_stateStatus(); 
		}
		else
		{
			redirect('home/index');
		}
	}

	function change_cityStatus()
	{
		if($this->session->userdata(USER_TYPE.'_login'))
		{ 
			$this->country->change_cityStatus(); 
		}
		else
		{
			redirect('home/index');
		}
	}

	function edit_city($city_id='')
	{
		if($this->session->userdata(USER_TYPE.'_login'))
		{ 
			$data['active_menu']="city"; 
            $data['country_master']=$this->country->get_active_country_list(); 
            $data['state_master']=$this->country->get_state_master();
			$data['cityDetails']=$this->country->getCityByCity_id($city_id);  
			$this->load->view('admin/back_end/country/edit_city',$data);
		}
		else
		{
			redirect('home/index');
		}
	}


	function update_city($city_id='')
	{
		if($this->session->userdata(USER_TYPE.'_login'))
		{ 
			$data['active_menu']="city"; 
            $this->country->update_city($city_id);  
            redirect('country/city_index');
		}
		else
		{
			redirect('home/index');
		}
	}

	function change_areaStatus()
	{
		if($this->session->userdata(USER_TYPE.'_login'))
		{ 
			$this->country->change_areaStatus(); 
		}
		else
		{
			redirect('home/index');
		}
	}

	function edit_area($area_id='')
	{
		if($this->session->userdata(USER_TYPE.'_login'))
		{ 
			$data['active_menu']="area"; 
            $data['country_master']=$this->country->get_active_country_list(); 
            $data['state_master']=$this->country->get_ActiveState_master();
            $data['city_master']=$this->country->get_ActiveCity_master();
			$data['areaDetails']=$this->country->getAreaByArea_id($area_id);   
			$this->load->view('admin/back_end/country/edit_area',$data);
		}
		else
		{
			redirect('home/index');
		}
	}

	function update_area($area_id='')
	{
		if($this->session->userdata(USER_TYPE.'_login'))
		{ 
			$data['active_menu']="area"; 
            $this->country->update_area($area_id);  
            redirect('country/area_index');
		}
		else
		{
			redirect('home/index');
		}
	}
 




	


	





	
}
