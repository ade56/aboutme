<?php
	include('blogpost.php');
	
	$db = mysql_connect('localhost:3306', 'root', '9YijdeL4');
	mysql_select_db("blogDB", $db);

	if (isset($_GET['remove'])){
		$blogPost = new blogpost();
		$post = $_GET['remove'];
		$sql = "DELETE FROM blogPosts WHERE postID=substr('$post',5)";
		$blogPost->removePost($sql);
		
		echo "";
	} 
	
	
?>
