<?php

class Blog extends CI_Controller {

	function index()
	{
		$this->load->model('Blog_model', 'blog');
   		$entries['query'] = $this->blog->get_all_entries();
		$this->load->view('blog/blog_view', $entries);
	}
	
	public function entry($url_title = "")
	{
	    $this->load->helper('url');
	    
	    if($url_title){
	     	$this->load->model('Blog_model', 'blog');
	     	$entry_data['post'] = $this->blog->get_entry($url_title);
	      
	      	if(!$entry_data['post']){
	        	redirect('/blog', 'location');
	      	} else {
	      		$this->load->view('shared/menu_view', $entries);
	        	$this->load->view('/blog/entry_view', $entry_data);
	      	}
	   } else {
	    	redirect('/blog', 'location');
	   }
	}
}

?>