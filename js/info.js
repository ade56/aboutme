<script type="text/javascript" src="../phpblog/_class/starterkit/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	
	$('.request').click(function() {
		$("#tabPane").load("/Info/" + $(this).attr('id'));
		$('.request').removeClass('greyClass');
		$(this).addClass('greyClass');
	});

	$('#information').click();	
});
</script>