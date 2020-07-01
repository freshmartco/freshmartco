<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{	
	public function __construct()
        {
                parent::__construct();
					$this->load->model('back_end/home_db','home');
					$this->load->helper('custom/app');
					
        }
	public function index()
	{
		$this->load->view('admin/index');
	}
	
	
	function check_login()
	{
		$this->load->library('email');
		
		$data=$this->home->check_login();
		$val=explode('****',$data);
		// print_r($data);exit;
		if($val[0]=="success")
		{ 
			require 'phpmail/PHPMailerAutoload.php';
			
			//$smtp_usermail='sdmca54@gmail.com';
			//$smtp_userpwd='9790105473';
			
		 	//$smtp_usermail='chala.arya@gmail.com';
			//$smtp_userpwd='King@123456789';

			// $smtp_usermail='prakashprovab762@gmail.com';
			// $smtp_userpwd='Prakupooja';
			
			/*$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->SMTPDebug = 3;
			$mail->Debugoutput = 'html';
			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 587;
			$mail->SMTPAuth = true;
			$mail->Username =$smtp_usermail;
			$mail->Password = $smtp_userpwd;	
			
			 

			$message =COMPANY_NAME."Supervision Application login OTP is ".$val[1];
			$to_mail=$this->session->userdata(USER_TYPE.'_email');
			$subject=COMPANY_NAME."Supervision Application Login OTP";
			$s_name=COMPANY_NAME;
			
				$tomailLists = array($to_mail);
				$arrlength = count($tomailLists);
				$mail->setFrom($smtp_usermail,$s_name);
				$mail->addReplyTo("noreply@freshmartco.com", COMPANY_NAME);

					for($x = 0; $x < $arrlength; $x++) 
					{     
						$mail->addAddress($tomailLists[$x]);
					}
				$mail->Subject = $subject;
				$mail->msgHTML($message);
				if ($mail->send()){
					$this->session->set_flashdata('xyz','success');
					redirect('home/otp');
				}  	else{
					echo 'Not sent';
				} */
			redirect('home/otp');
		} 	 
		else
		{
			$this->session->set_flashdata('abc','error');
			redirect('home/');
		}
	}
 	
 	public function otp() {
	if($this->session->userdata(USER_TYPE.'_id')) {			
		$this->load->view('admin/otp');
	} else 
		redirect('home/index');
	}
 	

 	function resend_otp()
	{
		$this->load->library('email');
		if($this->session->userdata(USER_TYPE.'_id'))
		{  
			$data=$this->home->resend_otp();
			$val=explode('****',$data);
			if($val[0]=="success")
			{ 
				 echo 'sent';
			}
		}
		else
		{
			redirect('home/index');
		}
	}

	function process_otp()
	{
		$data=$this->home->check_otp();

		if($data=="success") 
		{ 
			redirect('home/dashboard');	
		}
		else
		{
			$this->session->set_flashdata('abc','error');
			redirect('home/otp');
		}
	}	 
	 
	function dashboard()
	{	 
		if($this->session->userdata(USER_TYPE.'_login'))
		{ 
				$data['active_menu']="dashboard";
			    $this->load->view('admin/back_end/index',$data);
		}
		else
		{
			redirect('home/');
		}
	}

	function logout()
	{
		$this->session->unset_userdata(USER_TYPE.'_login');
		redirect('home/index');
	}
}
