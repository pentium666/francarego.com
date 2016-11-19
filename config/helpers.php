<?php

function render($name, $variables = ["title" => "French King Photography"])
{
	if(file_exists("../views/{$name}")) {
		extract($variables);

		require("../views/header.php");
		require("../views/{$name}");
		require("../views/footer.php");
	}
	else {
		echo("File {$name} does not exist.");
	}
}

?>
