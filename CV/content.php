<?php
		
	if (isset($_GET['content'])){
		$request = $_GET['content'];
		
		/** */
		if($request == 'cvRequest'){
			include('cv.html');
		}
		
		/** */
		if($request == 'techRequest'){
			?>	
				<h1> Technical Summary </h1>
				
				<div class='skill'>
					<img align="middle" src='../images/eng.png'/>  <b>Programming..?</b> </br> <a>Java, Python, PHP, C#.NET MVC, OO Design, Design Patterns</a> 
				</div>
				
				<div class='skill'>
					<img align="middle" src='../images/www.png'/>  <b>Web Stuff..?</b> </br> <a> Javascript/JQuery, CSS/CSS3, AJAX, Apache HTTP Web Server</a> 
				</div>
				
				<div class='skill'>
					<img align="middle" id='progImg' src='../images/db.png'/>  <b>Databases..?</b> </br> <a> Structured Query Language, RDBMS, MySQL, PostGRESQL(PostGIS)</a>
				</div>
				
				<div class='skill'>
					<img align="middle" id='progImg' src='../images/prog.png'/>  <b>Tools..?</b> </br> <a> Git/github, SVN, Capistrano</a>
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
					<img align="middle" src='../images/academic.png'/>  <b>Academic Interests..?</b> </br> 
					<a> I believe my interest in web technologies and GIS can be attributed to the inherent front-end nature associated with these technologies. </br> 
						My interest in web technologies, and the small amount of web related course work available, prompted me to create this website which has </br> 
						been an excellent learning experience. However, course work in OO programming and physical geography stems from interests in math </br> 
						and a love for the outdoors respectively. </a>
				</div>
				
				<div class='skill'>
					<img align="middle" id='progImg' src='../images/personal.png'/>  <b> Sporting ..?</b> </br> 
					<a> Growing up I have done a lot of road cycling, cricket, tennis and surfing. Keeping fit and the interaction with others which comes with</br> 
						these activities is very important to me, and I recieve great personal enjoyment from them. Other than this, I have a keen interest in</br> 
						following the all blacks, the tour de france, tennis grand slams and Roger Federer.</a>
				</div>
				
				<div class='skill'>
					<img align="middle" src='../images/cultural.png'/>  <b>Cultural Interests..?</b> </br> 
					<a> Having played guitar for a number of years, I enjoy playing with friends or listening to my favourite artists. I also love good
						books, with particular emphasis on Bryce Courtenay, JR.Tolkien, Lance Armstrong novels and any african novel or autobiography. Working for the 
						Gisborne District Council, and their work with the Sustainable Coastlines group over summer also taught me the importance of
						responsible waste management, with a heavy on emphasis on recycling.   </a>
				</div>		
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
