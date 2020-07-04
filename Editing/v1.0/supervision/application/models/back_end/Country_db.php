<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Country_db extends CI_Model 
{  
    function __construct()  
    {
        parent::__construct();
        $this->load->database();
        $this->load->library("session");
    }

    function get_country_master()
    {
        $this->db->select('*');
        $this->db->from('country_master'); 
        $query=$this->db->get();
        $q=$query->result_array();  
        return $q; 
    } 

    function get_active_country_list()
    {
        $this->db->select('*');
        $this->db->from('country_master');          
        $this->db->where('status','0');  
        $query=$this->db->get();
        $q=$query->result_array();  
        return $q; 
    }

    function save_country()
    {
        $country_name=trim($this->input->post('country_name'));
        $data=array("country_name"=>$country_name);
        $this->db->insert("country_master",$data);     
    }
    function delete_country()
    {           
         $id=$this->input->post('id');
         $this->db->where('country_id',$id);
         $this->db->delete('country_master');
     
    }
    function save_city()
    {
        $country_name=$this->input->post('country_name');
        $city_name=$this->input->post('city_name');
        $state_name=trim($this->input->post('state_name'));
        $data=array("city_name"=>$city_name,"country_id"=>$country_name,"state_id"=>$state_name);
        $this->db->insert("city_master",$data);     
    }
    function delete_city()
    {           
         $id=$this->input->post('id');
         $this->db->where('city_id',$id);
         $this->db->delete('city_master');
     
    }
    function get_city_master()
    {
        $this->db->select('CT.*,CM.country_name,state_name');
        $this->db->from('city_master CT');          
        $this->db->join('country_master CM','CT.country_id=CM.country_id','left'); 
        $this->db->join('state_master SM','CT.state_id=SM.state_id','left'); 
        $query=$this->db->get();
        $q=$query->result_array(); 
        // debug($q);exit; 
        return $q; 
    }


     function get_ActiveCity_master()
    {
        $this->db->select('CT.*,CM.country_name,state_name');
        $this->db->from('city_master CT');          
        $this->db->join('country_master CM','CT.country_id=CM.country_id','left'); 
        $this->db->join('state_master SM','CT.state_id=SM.state_id','left'); 
        $this->db->where('CT.status','0');
        $query=$this->db->get();
        $q=$query->result_array(); 
        // debug($q);exit; 
        return $q; 
    }
    
    function save_state()
    {
        $country_name=$this->input->post('country_name');
        $state_name=trim($this->input->post('state_name'));
        $data=array("state_name"=>$state_name,"country_id"=>$country_name);
        $this->db->insert("state_master",$data);     
    }
    function delete_state()
    {           
         $id=$this->input->post('id');
         $this->db->where('state_id',$id);
         $this->db->delete('state_master');
     
    }
    function get_state_master()
    {
        $this->db->select('SM.*,CM.country_name');
        $this->db->from('state_master SM');  
        $this->db->join('country_master CM','SM.country_id=CM.country_id','left');  
        $this->db->order_by('CM.country_name','ASC');
        $query=$this->db->get();
        $q=$query->result_array();   
        return $q; 
    }

    function get_ActiveState_master()
    {
        $this->db->select('SM.*,CM.country_name');
        $this->db->from('state_master SM');  
        $this->db->join('country_master CM','SM.country_id=CM.country_id','left');  
        $this->db->where('SM.status','0');
        $this->db->order_by('CM.country_name','ASC');
        $query=$this->db->get();
        $q=$query->result_array();   
        return $q; 
    }

     

     function get_stateListForCountry($country_id='')
    {
        $this->db->select('SM.*');
        $this->db->from('state_master SM');   
         $this->db->where('SM.country_id',$country_id);
         $this->db->where('SM.status','0');
        $this->db->order_by('SM.state_name','ASC');
        $query=$this->db->get(); 
        $q=$query->result_array();   
        return $q; 
    }

    function get_get_cityListForState($state_id='')
    {
        $this->db->select('SM.*');
        $this->db->from('city_master SM');   
         $this->db->where('SM.state_id',$state_id);
         $this->db->where('SM.status','0');
        $this->db->order_by('SM.city_name','ASC');
        $query=$this->db->get(); 
        $q=$query->result_array();   
        return $q; 
    }


    function save_area()
    {
        $country_name=$this->input->post('country_name');
        $state_name=$this->input->post('state_name');
        $city_name=$this->input->post('city_name');
        $area_name=trim($this->input->post('area_name'));
        $data=array("state_id"=>$state_name,"country_id"=>$country_name,"city_id"=>$city_name,"area_name"=>$area_name);
        $this->db->insert("area_master",$data);     
    }
    function delete_area()
    {           
         $id=$this->input->post('id');
         $this->db->where('area_id',$id);
         $this->db->delete('area_master');
     
    }
    function get_area_master()
    { 
        $this->db->select('AM.*,CT.city_name,CM.country_name,state_name');
         $this->db->from('area_master AM');    
        $this->db->join('country_master CM','AM.country_id=CM.country_id','left'); 
        $this->db->join('state_master SM','AM.state_id=SM.state_id','left'); 
        $this->db->join('city_master CT','AM.city_id=CT.city_id','left'); 
        $query=$this->db->get();
        $q=$query->result_array(); 
        // debug($q);exit; 
        return $q; 
    }

    function change_countryStatus()
    {     
        $country_id=$_POST['country_id'];   
        $status=$_POST['value'];
        $data=array("status"=>$status); 
        $this->db->where('country_id',$country_id);
        $this->db->update('country_master',$data);
    }

    function update_country()
    {
        $country_id=$_POST['country_id'];   
        $country_name=trim($_POST['country_name']);
        $data=array("country_name"=>$country_name); 
        $this->db->where('country_id',$country_id);
        $this->db->update('country_master',$data);
    }

    function getStateByState_id($state_id='')
    {
        $this->db->select('SM.*');
        $this->db->from('state_master SM');   
        $this->db->where('SM.state_id',$state_id);  
        $query=$this->db->get(); 
        $q=$query->row_array();   
        return $q; 
    }

    function update_state($state_id='')
    {
        $country_name=$this->input->post('country_name');
        $state_name=trim($this->input->post('state_name'));
        $data=array("state_name"=>$state_name,"country_id"=>$country_name);
        $this->db->where('state_id',$state_id);
        $this->db->update('state_master',$data);
    }

    function change_stateStatus()
    {     
        $state_id=$_POST['state_id'];   
        $status=$_POST['value'];
        $data=array("status"=>$status); 
        $this->db->where('state_id',$state_id);
        $this->db->update('state_master',$data);
    }

     function change_cityStatus()
    {     
        $city_id=$_POST['city_id'];   
        $status=$_POST['value'];
        $data=array("status"=>$status); 
        $this->db->where('city_id',$city_id);
        $this->db->update('city_master',$data);
    }

    function getCityByCity_id($city_id)
    {
        $this->db->select('CM.*');
        $this->db->from('city_master CM');   
        $this->db->where('CM.city_id',$city_id);  
        $query=$this->db->get(); 
        $q=$query->row_array();   
        return $q; 
    }

    function update_city($city_id='')
    {
        $country_name=$this->input->post('country_name');
        $city_name=$this->input->post('city_name');
        $state_name=trim($this->input->post('state_name'));
        $data=array("city_name"=>$city_name,"country_id"=>$country_name,"state_id"=>$state_name);
        $this->db->where('city_id',$city_id);
        $this->db->update('city_master',$data);
    }

     function change_areaStatus()
    {     
        $area_id=$_POST['area_id'];   
        $status=$_POST['value'];
        $data=array("status"=>$status); 
        $this->db->where('area_id',$area_id);
        $this->db->update('area_master',$data);
    }


    function getAreaByArea_id($area_id) 
    {
        $this->db->select('AM.*');
        $this->db->from('area_master AM');   
        $this->db->where('AM.area_id',$area_id);  
        $query=$this->db->get(); 
        $q=$query->row_array();   
        return $q; 
    }

    function update_area($area_id='')
    {
        $country_name=$this->input->post('country_name');
        $state_name=$this->input->post('state_name');
        $city_name=$this->input->post('city_name');
        $area_name=trim($this->input->post('area_name'));
        $data=array("state_id"=>$state_name,"country_id"=>$country_name,"city_id"=>$city_name,"area_name"=>$area_name);

        $this->db->where('area_id',$area_id);
        $this->db->update('area_master',$data);
    }



}  
?>