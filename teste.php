<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<form id="resp" method="POST" action="prod.php">
	<input type="text" name="ord" value="<?php echo$_POST['ord']; ?>">
</form>
<script type="">
	$(document).ready(function(){
	$('#resp').submit();
	});
</script>