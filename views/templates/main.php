<!DOCTYPE html>
<html lang="en">
	<?php $viewpath = root()."/views"; ?>
	<head>
		<?php require("{$viewpath}/header.php"); ?>
	</head>
	<body>
		<?php require("{$viewpath}/navbar.php"); ?>
		<div class="container" id="main-content">
			<?php require("{$viewpath}/{$page}"); ?>
		</div>
		<footer class="footer" id="footer">
			<?php require("{$viewpath}/footer.php"); ?>
		</div>
	</body>
	<?php require(root()."/public/js/scripts.php"); ?>
</html>
