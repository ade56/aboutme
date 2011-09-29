<?php
	
class blogentry {
	
	var $textContent;
	
	public function commitEntry($content){
		$textContent = $content;
		$date = date("y/m/d : H:i:s", time()); 
		$time = date("H:i:s", time());
		
		$sql = "INSERT INTO blogPosts (username, date, time, textContent) VALUES ('ade56', '$date', '$time', '$textContent')";
		
		if($textContent != ''){
			mysql_query($sql);
			$textContent = '';
		}
		
	}
	
	public function displayEntry(){
		$entryDisplay = <<<blogContent
			<form name="entry" id="blogentry" action='$_SERVER[PHP_SELF]' method="post">
				<a><b>Blog Entry</b></a> </br> 
				<textarea id="entryTextArea" NAME="entryContent" COLS=130px ROWS=6></textarea> </br>
				<input type="submit" value="Submit" />
			</form> \n
blogContent;
		
		return $entryDisplay;
	}
	
}
	
?>
