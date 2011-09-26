<?php
		
	if (isset($_GET['content'])){
		$request = $_GET['content'];
		
		/** */
		if($request == 'cvRequest'){
			include('cv.htm');
		}
		
		/** */
		if($request == 'techRequest'){
			?>	
				<h1> Technical Summary </h1>
				
				<div class='skill'>
					<img align="middle" src='../images/prog.png'/>  <b>Programming..?</b> </br> <a>Java, Python, OO Design, Design Patterns</a> 
				</div>
				
				<div class='skill'>
					<img align="middle" src='../images/server.png'/>  <b>Web Stuff..?</b> </br> <a><b>(Client)</b> Javascript/JQuery, CSS/CSS3, HTML/XML, HTTP Request,<b>(Server)</b> PHP, C#.NET MVC, Apache HTTP</a> 
				</div>
				
				<div class='skill'>
					<img align="middle" id='progImg' src='../images/db.png'/>  <b>Databases..?</b> </br> <a> Structured Query Language, RDBMS, MySQL, PostGRESQL(PostGIS)</a>
				</div>
				
			<?php
		}
		
		/** */
		if($request == 'youRequest'){
			?>	
				<script type="text/javascript" src="../js/jquery.js"></script>
				<script type="text/javascript">
					$(document).ready(function(){
							$('#picture').click(function() {
							if ($("#mug").is(":hidden")) {
								$("#mug").slideDown("slow");
								$(this).css('background', '#111');
								this.innerHTML = '<b>Ewww.. retract!</b>';
							} else {
								$("#mug").slideUp("slow");
								$(this).css('background', '#222');
								this.innerHTML = '<b>Mug Shot</b>';
							}
						});
					});
				</script>
				
				<h1> Personal Summary </h1>
				
				<div class='skill'>
					<img align="middle" src='../images/home.png'/>  <b>Biography..?</b> </br> 
					<a>My name is Andrew Evans, I'm 21yrs old and I was born and raised in Gisborne, New Zealand. </br>
					   I'm currently in my 4th and final year of a BSc. Comp Sci & Geography at Canterbury University in Christchurch.</a>
				</div>
				
				<div class='skill'>
					<img align="middle" src='../images/academic.png'/>  <b>Cultural & Academic Interests..?</b> </br> 
					<a> Growing up I have enjoyed spending time with my friends and family, playing my guitar (far too often!)</br>
 					    and being home @ Wainui Beach. Within my course I have enjoyed software engineering and more recently </br>
						I have passionatly enjoyed being emersed in various web computing technologies (both inside and outside of university).</a>
				</div>
				
				<div class='skill'>
					<img align="middle" id='progImg' src='../images/personal.png'/>  <b> Sporting ..?</b> </br> 
					<a> Tennis, cricket, cycling (road+mtb) and surfing are primary sporting interests, these sports allow me to keep fit and interact with others. </br>
					    + tour de france + Lance Armstrong + all blacks + good books + Roger Federer...</a>
				</div>
				
				<div id='picture'>
					<b id='mugshot'> Mug Shot </b>			
				</div>
				<img id="mug" src="../images/mug.png" style="" />
				
						
			<?php
			
		}
		
		/** */
		if($request == 'siteRequest'){
			?>
				<h2> About this site...? </h2>
				
				<div class='skill'>
					<img align="middle" id='progImg' src='../images/info.png'/>  <b> Whats going on here..?</b> </br> 
					<a> <ul id='aboutList'><li>Ubuntu 10.1 OS with an apache http web server hosted via linode.</li>
						<li>PHP, MySQL installed using aptitude. </li>
					    <li> GitHUB and Capistrano used for version control and deployment. </li>
						<li> Menu on left hand side populates area through HttpRequests via JQuery </li>
						<li> Everything else standard HTML/CSS/PHP mixed together :).. </li></ul>
					</a>
				</div>
				
				<div class='technology'>
					<img align="middle" src='../images/client.png'/> <ul> <li> HTML </li> <li> JQuery </li> <li> CSS </li> </ul>
				</div >
				
				<div class='technology' id='box'>
					<img align="middle" src='../images/box.png'/> <ul> <li> PHP </li> <li> Ruby/Rails </li> <li> Apache Http </li> </ul>
				</div>
				
				<div class='technology'>
					<img align="middle" src='../images/mysql.gif'/> <ul> <li> MySQL </li> </ul>
				</div>
				
				<div class='technology' id='control'>
					<a> Ubuntu OS, GitHub, Capistrano</a> </br>
					<img align="middle" src='../images/linux.png'/> <img align="middle" src='../images/github_icon.png'/> 
				</div>
			
			<?php
		}
	}

?>