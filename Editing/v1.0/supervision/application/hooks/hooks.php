<?php
/**
 *
 * @author Balu A<balu.provab@gmail.com>
 *
 */
class application {
	var $CI; // code igniter object
	var $userId; // user id to identify user
	var $page_configuration;
	var $skip_validation;

	/**
	 * constructor to initialize data
	 */
	function __construct() {
		$this->CI = &get_instance ();
		$this->CI->load->library ( 'provab_page_loader.php' );
		$this->CI->load->helper ( 'url' );
		if (! isset ( $this->CI->session )) {
			$this->CI->load->library ( 'session' );
		}
		$this->footer_needle = $this->header_needle = $this->CI->uri->segment ( 2 );
		$this->skip_validation = false;
		$this->CI->language_preference = 'english';
		$this->CI->lang->load ( 'form', $this->CI->language_preference );
		$this->CI->lang->load ( 'utility', $this->CI->language_preference );
		$this->CI->lang->load ( 'application', $this->CI->language_preference );
		
		// $this->CI->session->set_userdata(array(AUTH_USER_POINTER => 10, LOGIN_POINTER => intval(100)));
	}
 

}
