<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>Andrew Evans Index</title>
	<link href="/./css/header.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
	<div id="body" onload="">
			<?php include '/../shared/menu_view.php'; ?>
	  		<h2>
	  			<?php echo $post->title; ?>
			</h2>
	  		<span class="metadata">
	  			<?php echo $post->author; ?>
			</span>
	  		<?php echo $post->entry; ?>
	  
	  		<p><a href="/blog/">Back to Blog</a></p>
	  </div>
</body>
</html>