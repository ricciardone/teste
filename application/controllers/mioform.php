<?php

class Mioform extends CI_Controller {
       
	function index()
	{
		$this->load->helper(array('form', 'url'));
		
		$this->load->library('form_validation', 'database');
		
		
                $this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		
          

        if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('myform_view');
		}
		else
		{
			$this->load->view('formsuccess');
		}
	}
}
?>

