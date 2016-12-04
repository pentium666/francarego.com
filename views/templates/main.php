<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require("../views/header.php"); ?>
	</head>
	<body>
		<?php require("../views/navbar.php"); ?>
		<div>
			<?php require("../views/{$page}"); ?>
		</div>
		<?php require("../views/footer.php"); ?>
	</body>
</html>
