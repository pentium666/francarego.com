<?php

function render($name, $variables = [])
{
	if(file_exists("../views/{$name}")) {
		require("../views/header.php");
		require("../views/{$name}");
		require("../views/footer.php");
	}
	else {
		echo("File {$name} does not exist.");
	}
}

?>
