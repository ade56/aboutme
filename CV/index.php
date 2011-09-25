<script type="text/javascript" src="../phpblog/_class/starterkit/jquery.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	
	/** */
	$('.request').click(function(){
		
		var url = "/CV/content.php?content=";
		var id = $(this).attr('id');

		$("#tabPane").load(url+id);
	});
});



</script>

<html>

<head>
	<title> Andrew Evans Cirriculum Vitae </title>
	<link href="../css/header.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="../css/cv.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="../css/cvcontent.css" rel="stylesheet" type="text/css" media="screen" />
<head>

<body>
	<?php 
		include('../header.php');
	?>	
	<ul id='leftPane'>
		<li class='request' id='cvRequest'> <b>Cirriculum Vitae</b> </br> the whole lot.. </li>
		<li class='request' id='techRequest'> <b>Technical Summary</b> </br> what can I do? </li>
		<li class='request' id='youRequest'> <b>Personal Summary</b> </br> what am I interested in? </li>
		<li class='request' id='siteRequest'> <b>About this site</b> </br> technology used in this site </li>
	</ul>
	
	<div id='tabPane'>
		<?php 
			include('cv.htm');
		?>
	</div>	
	
	<div id='rightPane'>
		
	</div>
</body>
</html>