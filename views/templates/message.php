<!DOCTYPE html>
<html lang="en">
	<?php $viewpath = root()."/views"; ?>
	<head>
		<?php require("{$viewpath}/header.php"); ?>
	</head>
	<body>
		<?php require("{$viewpath}/navbar.php"); ?>
		<div id="main-content">
			<h1><?= $text ?></h1>
		</div>
		<?php require("{$viewpath}/footer.php"); ?>
	</body>
	<?php require(root()."/public/js/scripts.php"); ?>
</html>
<script>
	document.getElementsByTagName("html")[0].style = "height: 100%; min-height: 100%;";
	document.getElementsByTagName("body")[0].style = "min-height: 100%";
	document.getElementsByTagName("html")[0].className = "homepage";
	document.getElementsByTagName("body")[0].className = "homepage";
</script>
