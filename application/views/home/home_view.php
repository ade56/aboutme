<html>
<head>
	<title>Andrew Evans Index</title>
	<link href="/./css/header.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="/./css/welcome.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
	<div id="body">
		<?php include '/../shared/menu_view.php'; ?>
		<div id='welcome'>
			<a href='/CV/'><img id='aboutme_img' src='../images/test3.png'/></a>
			<p id='welcome_paragraph'><b>Hi There!</b> Welcome to my web-site. My name is Andrew Evans and I am a recent graduate from Canterbury University in Christchurch, New Zealand. I enjoy web-technologies, agile work environments, sport and my guitar.....</p>	
		</div>
		
		<div id='blog_work_content'>
			<div id='blog_list'>
				  <a href='/phpblog/'><img src='/./images/blog.png'></a>
				  <ul>
				  		<?php for ($i = 0 ; $i < 2 ; $i++) { ?>
				  			<li class='blog_work_list'><?php echo substr($query[$i]->summary, 0, 153);  ?>...</li>
				  		<?php } ?>
				   </ul>
			</div>
			<div id='work_list'>
					<img src='../images/currentwork.png'>
					<ul>
				  		<li class='blog_work_list'> 
				  			Summer of eResearch <a href="http://omeka.org/" target="_blank">Omeka</a> CMS plugin.. <a href="http://digitalnz.org/" target="_blank" > Digital New Zealand  </a> archive content retrieved and published within CMS. github code found <a href="https://github.com/ade56/omeka/tree/master/plugins/DigitalNZ" target="_blank">here</a> 
				  		 </li>
				  		<li class='blog_work_list'>
				  			 Travel blog mapping application for bike trip throughout America. Awaiting some free time..
				  		 </li>
				   </ul>
			</div>
		</div>
		
		<div id='bottom_contact'>
			<img src='../images/contact.png'>
			<p> <b>e:</b> ade56@uclive.ac.nz | <b>p:</b> +27 3256 374 |
				<a href="http://www.linkedin.com/profile/view?id=149677087"><img class='social_icon' src='/./images/linkedin.png'/></a>
				<a href="http://www.facebook.com/profile.php?id=536880946"><img class='social_icon' src='/./images/facebook_icon1.jpg'/></a>
				<a href="skype:andy.evans85?call" >
					<img class='social_icon' src="http://mystatus.skype.com/balloon/andy%2Eevans85" width="75" height="30" alt="My status" />
				</a>		
			</p>
		</div>
	</div>
</body>
</html>