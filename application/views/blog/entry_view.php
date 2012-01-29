<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>Andrew Evans Index</title>
	<link href="/./css/header.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="/./css/blog.css" rel="stylesheet" type="text/css" media="screen" />
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