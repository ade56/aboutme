<script type="text/javascript" src="_class/starterkit/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	var height;
	var heightIncrement;
	
	/** Mouse Over Extending Text Area Height */
	$('div[id^="content"]').mouseover(function(e) {
		height = $(e.target).height();
		heightIncrement = height+15;
	
		$(e.target).animate({
			//height: heightIncrement
			}, 1000 );
		}).mouseleave(function(e) {	
			$(e.target).animate({
				//height: height
			}, 1001 );
		});
	
	/** Click Event Upon "edit" button */
	$('img[id="close"]').click(function(event){
		var target = $(event.target).parent().parent();
		target.fadeOut('slow', function() {
			var test = this.id;
			var testtwo = "_class/commitpost.php?remove="+test;
			$("#entryContent").load(testtwo);
		});
	});
	
	/** Click Event Upon "edit" button */
	$('img[id="edit"]').click(function(event){
		var target = $(this).parent().next("#content");
		
		/** Text Within Content is made Editable, Highlighted & Expanded */
		$(target).attr('readonly',false);
		$(target).animate({
			//height: scrollHeight
		}, 2000, function() {
			$(target).select();
		});
	});
});

</script>

<html>
	<head>
		<title>PHP Blog</title>
		<link href="../css/blog.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="../css/header.css" rel="stylesheet" type="text/css" media="screen" />
		<meta property="og:type" content="blog" />
		<meta property="og:url" content="" />
		<meta property="og:title" content="Andy's PHP" />
		<meta property="og:url" content="173.230.152.239" />
		<meta property="og:image" content="" />
		<meta property="og:site_name" content="" />
		<meta property="fb:admins" content="536880946" />
	</head>
	<body>
	<?php
		error_reporting(0);
		include('../header.php');
		
		include('_class/blogpost.php');
		include('_class/blogentry.php');
			
			# Define MySQL Settings
			define("MYSQL_HOST", "localhost");
			define("MYSQL_USER", "root");
			define("MYSQL_PASS", "9YijdeL4");
			define("MYSQL_DB", "blogDB");
			
			$db = mysql_connect("".MYSQL_HOST."", "".MYSQL_USER."", "".MYSQL_PASS."") or die(mysql_error());
			mysql_select_db("".MYSQL_DB."",$db) or die(mysql_error());
			
			$sql = "CREATE TABLE IF NOT EXISTS blogPosts (
					postID int NOT NULL AUTO_INCREMENT,
					username VARCHAR(15),
					date DATE,
					time TIME,
					textContent VARCHAR(500),
					PRIMARY KEY (postID)
					)";
			
			$res = mysql_query($sql);			
			
			$blogEntry = new blogentry();

			if($_POST) 
				$blogEntry->commitEntry($_POST['entryContent']);
			
			$sql = "SELECT * FROM `blogPosts` ORDER BY date DESC, time DESC";
			
			/** User Has Selected A Post.. Most Likely Via Facebook which is displayed Solo*/
			if($_GET['post']){
				$post = $_GET['post'];
				$sql = "SELECT * FROM `blogPosts` WHERE postID='$post'";
			}
			$result = mysql_query($sql);	

			echo "<div id='blogContent'> \n";

			while ($row = mysql_fetch_array($result)) {
				$blogpost = new blogpost();
				$blogpost->updatePostInfo($row);

				echo $blogpost->displayPost();
				echo "\n";
			}

			echo "</div> \n";

			echo "<div id='entryBorder'> \n";
			echo $blogEntry->displayEntry();
			echo "</div> \n";
	?>
	<img id='treeone' src="white_tree.gif" alt="exit" />
	<img id='treetwo' src="white_tree.gif" alt="exit" />
	</body>
</html>