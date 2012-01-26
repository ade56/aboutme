<?php

class Info extends CI_Controller {

	function index()
	{
		$this->load->view('info/info_view');
	}
	
	function information()
	{
		$this->load->view('info/resume.html');	
	}
	
	function technical()
	{
		$this->load->view('info/tech_view.php');
	}
	
	function personal()
	{
		$this->load->view('info/personal_view.php');	
	}
}

?>