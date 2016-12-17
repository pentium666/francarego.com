<div class="container-fluid">
	<div style="padding-bottom: 2%">
		<h1 class="site-title"> Welcome to French King Photography</h1>
	</div>
	<?php if($christmas == 1): ?>
		<button type="button" class="btn btn-transparent" onclick="window.location.href = 'seasonal/card-signup.php'">Sign up to recieve our free christmas card >></button>
	<?php endif; ?>
</div>
<script>
	document.getElementsByTagName("html")[0].style = "height: 100%; min-height: 100%;";
	document.getElementsByTagName("body")[0].style = "min-height: 100%";
	document.getElementsByTagName("html")[0].className = "homepage";
	document.getElementsByTagName("body")[0].className = "homepage";
</script>
