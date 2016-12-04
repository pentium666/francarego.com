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

//gets root of project
function root()
{
	return dirname($_SERVER['DOCUMENT_ROOT'], 1);
}
?>
