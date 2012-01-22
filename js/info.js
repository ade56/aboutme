<script type="text/javascript" src="../phpblog/_class/starterkit/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	
  	$('.request').mouseenter(function() {
    	$(this).css("background","#e3e3e3"); 			
	});
	
	$('.request').click(function() {
		$("#tabPane").load("/Info/" + $(this).attr('id'));
	});
  		 
	$('.request').mouseleave(function() {	
  		$(this).css("background","white");
	});

	$('#information').click();	
});
</script>