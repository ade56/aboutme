<?php
	define("MYSQL_HOST", "localhost");
	define("MYSQL_USER", "root");
	define("MYSQL_PASS", "");
	define("MYSQL_DB", "blogDB");
	
	$db = mysql_connect("".MYSQL_HOST."", "".MYSQL_USER."", "".MYSQL_PASS."") or die(mysql_error());
	mysql_select_db("".MYSQL_DB."",$db) or die(mysql_error());
	
	if (isset($_GET['remove'])){
		$post = $_GET['remove'];
		
		$substring = substr($post,4);
		
		$sql = "DELETE FROM blogPosts WHERE postID='$substring'";
			
		mysql_query($sql);
		
		echo "";
	} 
	
	
?>
