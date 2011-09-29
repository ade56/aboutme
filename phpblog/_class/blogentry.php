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
	
	public function display(){
		//<textarea id="entryTextArea" NAME="entryContent" COLS=130px ROWS=6></textarea> </br>
		//<input type="submit" value="Submit" />
		
		$entryDisplay = <<<blogContent
			<form name="entry" id="blogentry" action='$_SERVER[PHP_SELF]' method="post">
				<div id='entryTitle'>Blog Entry</div>
				<div id="entryTextArea" NAME="entryContent"></div </br>			
blogContent;
		
		//if ( $_SESSION['logged_in'] ) { 
		
		$entryDisplay = $entryDisplay . $this->displayLogin();
		//else
		//<textarea id="entryTextArea" NAME="entryContent" COLS=130px ROWS=6></textarea> </br>
		//<input type="submit" value="Submit" />
		return $entryDisplay;
	}
	
	function displayLogin(){
		$login = <<<loginContent
			<div id='loginContent'>
				<p>
					<b>Sorry..!</b> Only registered-members may post..
				</p>
				<form>
					<a>Username:</a> <input class='loginInput' type="text" name="firstname" />
					<a>Password:</a> <input class='loginInput' type="text" name="lastname" />
					<input id="submit" type="submit" value="Submit" />
				</form>
			</div>
loginContent;
		return $login . "</form> \n";
	}
	
	function displayEntry(){
		
	}
	
}
	
?>
