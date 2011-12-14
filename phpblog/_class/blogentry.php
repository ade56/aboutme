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
			<form name="entry" id="blogentry" action='' method="post">
				<div id='entryTitle'>Write Something.... Click</div>
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
		if(!session_is_registered(ade56))
		{
			$login = <<<loginContent
				<div id='loginContent'>
					<p>
						<b>Sorry..!</b> Only registered-members may post..
					</p>
					<form name='form1' method='post' action='checkLogin.php'>
						<a>Username:</a> <input class='loginInput' name="myusername" type="text" id="myusername">
						<a>Password:</a> <input class='loginInput' name="mypassword" type="password" id="mypassword">
						<input id="submit" type="submit" value="Submit" />
					</form>
				</div>
loginContent;
			} 
			else
			{
					$login = "<h1>logged in</h1>";
			}
		return $login . "</form> \n";
	}
	
	function displayEntry(){
		
	}
	
}
	
?>
