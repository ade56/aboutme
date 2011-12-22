<script type="text/javascript" src="../phpblog/_class/starterkit/jquery.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	
	/** */
	$('.request').click(function(){
		
		var url = "/CV/content.php?content=";
		var id = $(this).attr('id');

		$("#tabPane").load(url+id);
		
		$("#leftPane  > li").css("background", "white");
		
		$(this).css("background","#e3e3e3");
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
	
	   
		<div id='body'>
			<?php 
				include('../header.php');
			?>
			<ul id='leftPane'>
				<li class='request' id='cvRequest'> <img src='../images/cv_img.png'/> </li>
				<li class='request' id='techRequest'>  <img src='../images/tech_img.png'/> </li>
				<li class='request' id='youRequest'> <img src='../images/personal_img.png'/> </li>
			</ul>
	    	<div id='tabPane'>
				<?php 
					include('cv.html');
				?>
			</div>
		</div>	
	</div>
</body>
</html>