<html>
<head>
	<title>Andrew Evans Index</title>
	<link href="/./css/header.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="/./css/blog.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
	<?php include '/../shared/menu_view.php'; ?>
	<div id="body">
		<?php foreach ($query as $entry) { ?>
  			<div class="blog_entry">
    			<h2><a href="/blog/entry/<?php echo $entry->url_title; ?>"><?php echo $entry->title; ?></a></h2>
    			<span class="metadata"><?php echo $entry->author; ?></span>
    			<p><?php echo $entry->summary; ?></p>
 		 	</div>
  		<?php } ?>
	</div>
</body>
</html>