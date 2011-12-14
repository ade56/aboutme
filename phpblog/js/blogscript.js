<script type="text/javascript" src="_class/starterkit/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	
	var height;
	var heightIncrement;
	
	/** Mouse Over Extending Text Area Height */
	$('div[id^="content"]').mouseover(function(e) {
		height = $(e.target).height();
		heightIncrement = height+15;
	
		$(e.target).animate({
			//height: heightIncrement
			}, 1000 );
		}).mouseleave(function(e) {	
			$(e.target).animate({
				//height: height
			}, 1001 );
		});
	
	/** Click Event Upon "edit" button */
	$('.close').click(function(event){
		var target = $(event.target).parent().parent();
		target.fadeOut('slow', function() {
			var test = this.id;
			var testtwo = "_class/commitpost.php?remove="+test;
			target.load(testtwo);
		});
	});
	
	/** Click Event Upon "edit" button */
	$('img[id="edit"]').click(function(event){
		var target = $(this).parent().next("#content");
		
		/** Text Within Content is made Editable, Highlighted & Expanded */
		$(target).attr('readonly',false);
		$(target).animate({
			//height: scrollHeight
		}, 2000, function() {
			$(target).select();
		});
	});
	
	/** Content Box Resize to fit text within */
    var test = $('.postText').attr('rows');
	//function resizeText(){	
		//var str = $('text-area').value;
		//var cols = $('text-area').cols;

		//var linecount = 0;
		//$A(str.split("\n")).each( function(l) {
			//linecount += Math.ceil( l.length / cols ); // take into account long lines
		//} )
		//$('text-area').rows = linecount + 1;
	 //}



});

</script>
