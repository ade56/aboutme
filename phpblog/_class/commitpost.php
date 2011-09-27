<?php
	include('blogpost.php');
	
	define("MYSQL_HOST", "localhost");
	define("MYSQL_USER", "root");
	define("MYSQL_PASS", "");
	define("MYSQL_DB", "blogDB");

	if (isset($_GET['remove'])){
		$blogPost = new blogpost();
		$post = $_GET['remove'];
		$sql = "DELETE FROM blogPosts WHERE postID=substr('$post',5)";
		$blogPost->removePost($sql);
		
		echo "";
	} 
	
	
?>
