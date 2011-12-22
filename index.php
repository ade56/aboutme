<script type="text/javascript" src="phpblog/_class/starterkit/jquery.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	
	/** */
	
});

</script>

<html>
<head>
	<title>Andrew Evans Index</title>
	<link href="css/header.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="css/welcome.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
	<div id="body">
		<?php
		//Ideas have links to mysql commands, jquery api and phpinfo()
		include('header.php');
		?>
		
		<div id='welcome'>
			<img id='aboutme_img' src='../images/test3.png'/>
			<p id='welcome_paragraph'><b>Hi There!</b> 
				Welcome to my web-site. My name is Andrew Evans and I am a recent graduate from
				Canterbury University in Christchurch, New Zealand. I enjoy web-technologies, agile work environments, sport and my guitar..</p>
			
		</div>
		
		<div id='footer_welcome'>
			<div id='left_footer'>
				  <img src='../images/blog.png'>
				  <ul>
				  		<li class='footer_item'> Example of first blog post outlining something going along here..Example of first blog post outlining something going along here. </li>
				  		<li class='footer_item'> Example of second blog post outlining something going along here.. Example of first blog post outlining something going along here.</li>
				   </ul>
			</div>
			<div id='right_footer'>
					<img src='../images/currentwork.png'>
					<ul>
				  		<li class='footer_item'> 
				  			Summer of eResearch <a href="http://omeka.org/" target="_blank">Omeka</a> CMS plugin.. <a href="http://digitalnz.org/" target="_blank" > Digital New Zealand  </a>
				  			archive content retrieved and published within CMS. github 
				  			code found <a href="https://github.com/ade56/omeka/tree/master/plugins/DigitalNZ" target="_blank">here</a> 
				  		 </li>
				  		<li class='footer_item'>
				  			 Ruby on rails installation on this site to develop small mapping application.. Awaiting
				  			 some free time from work/life/christmas...
				  		 </li>
				   </ul>
			</div>
		</div>
		
		<div id='bottom_contact'>
			<img src='../images/contact.png'>
			<p> 120 Peverel Street, Riccarton, Christchurch | ade56@uclive.ac.nz | +27 3256 374 </p>
		</div>
	</div>
</body>
</html>
