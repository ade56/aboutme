<!DOCTYPE html>
<html lang="en">
<head>
	<title>Andrew Evans Blog</title>
	<link href="/./css/header.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="/./css/blog.css" rel="stylesheet" type="text/css" media="screen" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
	<div id="body" onload="">
	  		<h2 id='blog_full_title'>
	  			<?php echo $post->title; ?>
			</h2>
	  		<span class="metadata">
	  			<?php echo $post->author; ?>
			</span>
	  		<div id='blog_full_view'>
				<?php echo $post->entry; ?>
	  		</div>
	  		<p><a href="/blog/">Back to Blog</a></p>
	  </div>
</body>
</html>