<?php

class Home extends CI_Controller {

	function index()
	{
		$this->load->model('Blog_model', 'blog');
   		$entries['query'] = $this->blog->get_all_entries();
		$this->load->view('home/home_view', $entries);
	}
}

?>