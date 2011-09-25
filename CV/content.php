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
					<img align="middle" src='../images/prog.png'/>  <b>Programming..?</b> </br> <li>Java, Python, OO Design, Design Patterns</li> 
				</div>
				
				<div class='skill'>
					<img align="middle" src='../images/server.png'/>  <b>Web Stuff..?</b> <li><b>(Client)</b> Javascript/JQuery, CSS/CSS3, HTML/XML, HTTP Request,<b>(Server)</b> PHP, C#.NET MVC, Apache HTTP</li> 
				</div>
				
				<div class='skill'>
					<img align="middle" id='progImg' src='../images/db.png'/>  <b>Databases..?</b> <li> Structured Query Language, RDBMS, MySQL, PostGRESQL(PostGIS)</li>
				</div>
				
			<?php
			
			// <table id='techTable'>
					// <tr id='titles'>
						// <td><b>Programming..?</b></td><td><b>Web-Client..?</b></td><td><b>Web-Server..?</b></td><td><b>Databases..?</b></td><td><b>OS/Other..?</b></td>
					// </tr>
					
					
					// </tr>
				// </table> 
				// <tr>
						// <td class='skillList'> 				
							// <ul> <li>Java</li> <li>Python (intro)</li> <li>OO Design</li> <li>Design Patterns</li> </ul>								
						// </td>
						// <td class='skillList'>
							// <ul> <li>Javascript / JQuery </li> <li>CSS/CSS3</li> <li>HTML & XML</li> <li>HTTPRequests</li></ul>								
						// </td>
						// <td class='skillList'>
							// <ul><li>PHP</li> <li>C#.NET MVC</li> <li>Apache Http</li></ul>							
						// </td>
						// <td class='skillList'> 
							// <ul><li> Structured Query Language </li> <li> RDBMS </li> <li> MySQL </li> <li> PostgreSQL (postGIS) </li></ul>		
						// </td>
						// <td class='skillList'>
							// <ul><li> Windows </li> <li>Linux (Ubuntu,Fedora)</li><li> Photoshop </li> <li>MS Office</li></ul>		
						// </td>
		}
		
		/** */
		if($request == 'youRequest'){
			?>	
				<h1> Personal Summary </h1>
				
				<p> 
					<img src='../images/mug.png' alt='mug' /> 21 years Old. 4th Year Canterbury University, 
					BSc. Computer Science and Geography. 
				</p>
			<?php
			
		}
		
		/** */
		if($request == 'siteRequest'){
			echo "hello siteRequest";
		}
	}

?>