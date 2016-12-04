<?php
function render($page, $variables = ["title" => "French King Photography"])
{
	if(file_exists("../views/{$page}")) {
		extract($variables);
		require("../views/templates/main.php");
	}
	else {
		echo("File {$page} does not exist.");
	}
}
?>
