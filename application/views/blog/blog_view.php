<html>
<head>
	<title>Andrew Evans Index</title>
	<link href="/./css/header.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="/./css/blog.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
	<div id="body" class="blog_page wrapper">
		<?php $this->load->view('shared/menu_view.php'); ?>
		<?php foreach ($query as $entry) { ?>
  			<div class="blog_entry">
  				<span class='blog_date'><?php echo date('M j', strtotime($entry->creation_date)) . '</br>' . 										     		date('Y', strtotime($entry->creation_date)); ?></span>
    			<h4><a href="/blog/entry/<?php echo $entry->url_title; ?>"><?php echo $entry->title; ?></a></br>
    			<b class="metadata"><?php echo $entry->author; ?></b></h4>
    			<p><?php echo $entry->summary; ?></p>
 		 	</div>
  		<?php } ?>
	</div>
</body>
</html>