<script type="text/javascript">(
	
	/** Facebook Like Function at Post-Bottom*/
	function test(d){
		 var js, id = 'facebook-jssdk'; 
		 if (d.getElementById(id)) {return;}
		 js = d.createElement('script'); 
		 js.id = id; 
		 js.async = true;
		 js.src = "//connect.facebook.net/en_US/all.js#appId=114010215371776&xfbml=1";
		 d.getElementsByTagName('head')[0].appendChild(js);	 		 
	}(document));
	
</script>

<?php
	
class blogpost {
	
	var $id;
	var $username;
	var $date;
	var $time;
	var $textContent;
	
	public function updatePostInfo($row){
		$this->id = $row['postID'];
		$this->username = $row['username'];
		$this->date = $row['date'];
		$this->time = $row['time'];
		$this->textContent = $row['textContent'];			
	}
	
	public function displayPost(){
		$blogDisplay = <<<blogContent
			<div class='userPost' id='post$this->id' name='post$this->id'>
				<div class='postTitle'> <b>$this->username </b> 
					<img class='editIcon' src="edit.png"/>
					<img id='close' src="close.png"/> </br> $this->date
				</div>
				<div class='postText'> $this->textContent </div>
				<div id="fb-root"/></div>
				<div class="fb-like" data-href="http://studweb.cosc.canterbury.ac.nz/~ade56/test/mainpage.php?post=$this->id" data-width="450" data-show-faces="false"></div>
		    </div>
blogContent;
		return $blogDisplay;
	}
	
	public function removePost($sql){
		mysql_query($sql);
	}
	
}
	
?>
