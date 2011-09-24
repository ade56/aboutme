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
				
				<table>
					<tr>
						<td>Programming </td>
						<td>Client-Side </td>
					</tr>
					<tr>
						<td>row 2, cell 1</td>
						<td>row 2, cell 2</td>
					</tr>
				</table> 
				
			<?php
		}
		
		/** */
		if($request == 'youRequest'){
			echo "hello youRequest";
		}
		
		/** */
		if($request == 'siteRequest'){
			echo "hello siteRequest";
		}
	}

?>