<!DOCTYPE html>
<html lang="en">
	<?php $viewpath = root()."/views"; ?>
	<head>
		<?php require("{$viewpath}/header.php"); ?>
	</head>
	<body>
		<?php require("{$viewpath}/navbar.php"); ?>
		<div id="main-content">
			<?php require("{$viewpath}/{$page}"); ?>
		</div>
		<?php require("{$viewpath}/footer.php"); ?>
	</body>
	<?php require(root()."/public/js/scripts.php"); ?>
</html>
