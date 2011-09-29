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
	
	<?php
	//Ideas have links to mysql commands, jquery api and phpinfo()
	include('header.php');
	?>
	
	<p id='welcome'>
		<b>Hi There!</b> 
		Welcome to my web-site.</br> Please browse by selecting a section below or by using the navigation bar
	<p>
	
	<div id='visualLinkContent'>		
		<div id='cvLink'>
			<a href='/CV'><img src="images/cv.png"  alt="cv"/> Cirriculum Vitae </a>
		</div>
		<div id='phpLink'>
			<a href='/phpblog'><img  src="images/php.png" alt="cv"/>PHP Blog</a>
		</div>
		<div id='rubyLink'>
			<a><img src="images/ruby.png" alt="cv"/> Ruby on Rails TBC..</a>
		</div>
	</div>	

</body>
</html>
